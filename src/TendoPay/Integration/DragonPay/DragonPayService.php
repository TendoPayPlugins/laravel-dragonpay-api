<?php

namespace TendoPay\Integration\DragonPay;

use Carbon\Carbon;
use Phpro\SoapClient\Type\MixedResult;
use TendoPay\Integration\DragonPay\Model\DragonPayUserLifetimeId;
use TendoPay\Integration\DragonPay\SoapClient\DragonPayClient;
use TendoPay\Integration\DragonPay\SoapClient\DragonPayClientFactory;
use TendoPay\Integration\DragonPay\SoapClient\DragonPayClientInterface;
use TendoPay\Integration\DragonPay\SoapClient\Type\CreateLifetimeUser;
use TendoPay\Integration\DragonPay\SoapClient\Type\CreateLifetimeUserResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetTxn;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\Transaction;

class DragonPayService
{
    use NormalizedEmail;

    /** @var string $wsdl the wsdl URL of the DragonPay SOAP API */
    private string $wsdl;

    /** @var string $merchantId dragonpay merchant ID */
    private string $merchantId;

    /** @var string $password dragonpay merchant password */
    private string $password;

    /** @var DragonPayClient $client */
    private ?DragonPayClient $client = null;

    /**
     * DragonPayService constructor.
     *
     * @throws DragonPayConfigurationException if the integration wasn't configured.
     */
    public function __construct()
    {
        $this->wsdl = config('dragonpay.wsdl', '');
        $this->merchantId = config('dragonpay.merchant_id', '');
        $this->password = config('dragonpay.merchant_password', '');

        if (empty($this->wsdl) || empty($this->merchantId) || empty($this->password)) {
            throw new DragonPayConfigurationException('No configuration for DragonPay API found.');
        }
    }

    /**
     * Retrieves the userLifetimeID from the database, or tries to create it otherwise. Throws exceptions if
     * API integration with DragonPay is not configured properly or
     *
     * @return string userLifetimeId
     * @throws \Exception if the API integration is not properly configured, or if there was an issue while trying to
     * communicate with DragonPay API.
     */
    public function getUserLifetimeId(string $email, string $name, ?string $prefix = '', ?string $remarks = ''): string
    {
        $userLifetimeId = $this->getUserLifetimeIdFromDatabase($email);

        if (! empty($userLifetimeId)) {
            return $userLifetimeId;
        }

        $client = $this->getClient();

        /** @var MixedResult $response */
        $response = $client->createLifetimeUser(
            new CreateLifetimeUser($this->merchantId, $this->password, $prefix, $name, $email, $remarks)
        );

        $userLifetimeId = $response instanceof CreateLifetimeUserResponse
            ? $response->getCreateLifetimeUserResult()
            : $response->getResult()->CreateLifetimeUserResult;

        if (empty($userLifetimeId)) {
            throw new CreateUserLifetimeIdException(
                sprintf(
                    'Could not create userLifetimeID for: email=%s, name=%s, prefix=%s, remarks=%s]',
                    $email,
                    $name,
                    $prefix,
                    $remarks
                )
            );
        }

        $this->saveUserLifetimeId($userLifetimeId, $email, $name, $prefix, $remarks);

        return $userLifetimeId;
    }

    /**
     * Retrieves the transaction details from DragonPay.
     *
     * @param string $refno transaction reference number
     *
     * @return \stdClass response returned from DragonPay API
     *
     * @throws TransactionNotFoundException|\JsonException when no such transaction found on DragonPay
     */
    public function getTransaction(string $refno): \stdClass
    {
        $client = $this->getClient();

        /** @var MixedResult|Transaction $response */
        $response = $client->getTxn(new GetTxn($this->merchantId, $this->password, $refno));

        if ($response instanceof GetTxnResponse) {
            /** @var Transaction $result */
            $result = $response->getGetTxnResult();

            //[refDate:TendoPay\Integration\DragonPay\SoapClient\Type\Transaction:private] =>
            // DateTimeImmutable Object (
            //     [date] => 2022-08-17 10:21:54.924907
            //     [timezone_type] => 3
            //     [timezone] => Asia/Manila
            //  )
            $parseDate = static function ($beforeDate): ?string {
                if ($beforeDate instanceof \DateTimeImmutable) {
                    return $beforeDate->format(\DateTimeImmutable::ATOM);
                }

                if ($beforeDate instanceof \DateTimeInterface || is_string($beforeDate)) {
                    return Carbon::parse($beforeDate)->toIso8601String();
                }

                if ($beforeDate instanceof \stdClass && ($refDate->date ?? null)) {
                    return Carbon::parse($beforeDate->date)->toIso8601String();
                }

                return null;
            };


            return json_decode(
                json_encode([
                    'refNo' => $result->getRefNo(),
                    'refDate' => $parseDate($result->getRefDate()),
                    'merchantId' => $result->getMerchantId(),
                    'merchantTxnId' => $result->getMerchantTxnId(),
                    'amount' => $result->getAmount(),
                    'currency' => $result->getCurrency(),
                    'description' => $result->getDescription(),
                    'email' => $result->getEmail(),
                    'status' => $result->getStatus(),
                    'procId' => $result->getProcId(),
                    'procMsg' => $result->getProcMsg(),
                    'billerId' => $result->getBillerId(),
                    'settleDate' => $parseDate($result->getSettleDate()),
                    'param1' => $result->getParam1(),
                    'param2' => $result->getParam2(),
                    'mobileNo' => $result->getMobileNo(),
                    'amountDue' => $result->getAmountDue(),
                    'expiryDate' => $parseDate($result->getExpiryDate()),
                    'fee' => $result->getFee(),
                ], JSON_THROW_ON_ERROR),
                false,
                512,
                JSON_THROW_ON_ERROR
            );
        }

        // Legacy
        $result = $response->getResult();

        $responseArray = (array) $result;
        if (empty($responseArray)) {
            throw new TransactionNotFoundException("Could not find transaction [$refno] on DragonPay");
        }

        return $result->GetTxnResult;
    }

    /**
     * Returns API client if already created, creates and caches new otherwise.
     *
     * @return DragonPayClient cached or new client
     */
    private function getClient(): DragonPayClient
    {
        if (null === $this->client) {
            $this->client = DragonPayClientFactory::factory($this->wsdl);
        }

        return $this->client;
    }

    public function setClient(DragonPayClientInterface $client): self
    {
        $this->client = $client;

        return $this;
    }

    /**
     * Retrieves the `user_lifetime_id` from `dp_user_lifetime_ids` table if exists, or null otherwise.
     *
     * @param string $email email of the customer to search for his userLifetimeID
     *
     * @return null|string `user_lifetime_id` if exists in table `dp_user_lifetime_ids`, or null otherwise
     */
    private function getUserLifetimeIdFromDatabase(string $email): ?string
    {
        /** @var DragonPayUserLifetimeId $userLifetimeIdEntity */
        $userLifetimeIdEntity = DragonPayUserLifetimeId::query()
            ->where('email_normalized', $this->normalizeEmail($email))
            ->first();

        if ($userLifetimeIdEntity !== null) {
            return $userLifetimeIdEntity->user_lifetime_id;
        }

        return null;
    }

    /**
     * Saves `userLifetimeId` in the database (along with the parameters passed to the DragonPay endpoint).
     *
     * @param string $userLifetimeId userLifetimeId received from the DragonPay
     * @param string $email
     * @param string $name
     * @param ?string $prefix
     * @param ?string $remarks
     *
     * @throws SaveUserLifetimeIdException if we couldn't save `userLifetimeId` in the database.
     */
    private function saveUserLifetimeId(
        string $userLifetimeId,
        string $email,
        string $name,
        ?string $prefix = '',
        ?string $remarks = ''
    ): void {
        $model = new DragonPayUserLifetimeId([
            'email' => $email,
            'name' => $name,
            'prefix' => empty($prefix) ? null : $prefix,
            'remarks' => empty($remarks) ? null : $remarks,
            'user_lifetime_id' => $userLifetimeId,
        ]);

        if (! $model->save()) {
            throw new SaveUserLifetimeIdException('Could not save the userLifetimeId in the database');
        }
    }
}
