<?php

namespace TendoPay\Integration\DragonPay;

use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapEngineFactory;
use Phpro\SoapClient\Soap\Driver\ExtSoap\ExtSoapOptions;
use Phpro\SoapClient\Type\MixedResult;
use Symfony\Component\EventDispatcher\EventDispatcher;
use TendoPay\Integration\DragonPay\Model\DragonPayUserLifetimeId;
use TendoPay\Integration\DragonPay\SoapClient\DragonPayClient;
use TendoPay\Integration\DragonPay\SoapClient\Type\CreateLifetimeUser;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetTxn;

class DragonPayService
{
    use NormalizedEmail;

    /** @var string $wsdl the wsdl URL of the DragonPay SOAP API */
    private $wsdl;

    /** @var string $merchantId dragonpay merchant ID */
    private $merchantId;

    /** @var string $password dragonpay merchant password */
    private $password;

    /** @var DragonPayClient $client */
    private $client;

    /**
     * DragonPayService constructor.
     *
     * @throws DragonPayConfigurationException if the integration wasn't configured.
     */
    public function __construct()
    {
        $this->wsdl       = config('dragonpay.wsdl');
        $this->merchantId = config('dragonpay.merchant_id');
        $this->password   = config('dragonpay.merchant_password');

        if (empty($this->wsdl) || empty($this->merchantId) || empty($this->password)) {
            throw new DragonPayConfigurationException('No configuration for DragonPay API found.');
        }
    }

    /**
     * Retrieves the userLifetimeID from the database, or tries to create it otherwise. Throws exceptions if
     * API integration with DragonPay is not configured properly or
     *
     * @param string $email customer email
     * @param string $name customer name
     * @param string $prefix (optional)
     * @param string $remarks (optional)
     *
     * @return string userLifetimeId
     * @throws \Exception if the API integration is not properly configured, or if there was an issue while trying to
     * communicate with DragonPay API.
     */
    public function getUserLifetimeId($email, $name, $prefix = '', $remarks = '')
    {
        $userLifetimeId = $this->getUserLifetimeIdFromDatabase($email);

        if ( ! empty($userLifetimeId)) {
            return $userLifetimeId;
        }

        $client = $this->getClient();

        /** @var MixedResult $response */
        $response = $client->createLifetimeUser(new CreateLifetimeUser($this->merchantId, $this->password, $prefix,
            $name, $email, $remarks));

        $userLifetimeId = $response->getResult()->CreateLifetimeUserResult;

        if (empty($userLifetimeId)) {
            throw new CreateUserLifetimeIdException(
                sprintf('Could not create userLifetimeID for: email=%s, name=%s, prefix=%s, remarks=%s]',
                    $email, $name, $prefix, $remarks));
        }

        $this->saveUserLifetimeId($userLifetimeId, $email, $name, $prefix = '', $remarks = '');

        return $userLifetimeId;
    }

    /**
     * Retrieves the transaction details from DragonPay.
     *
     * @param string $refno transaction reference number
     *
     * @return \stdClass response returned from DragonPay API
     *
     * @throws TransactionNotFoundException when no such transaction found on DragonPay
     */
    public function getTransaction($refno): \stdClass
    {
        $client = $this->getClient();

        /** @var MixedResult $response */
        $response = $client->getTxn(new GetTxn($this->merchantId, $this->password, $refno));
        $response = $response->getResult();

        $responseArray = (array)$response;
        if (empty($responseArray)) {
            throw new TransactionNotFoundException("Could not find transaction [$refno] on DragonPay");
        }

        return $response->GetTxnResult;
    }

    /**
     * Returns API client if already created, creates and caches new otherwise.
     *
     * @return DragonPayClient cached or new client
     */
    private function getClient(): DragonPayClient
    {
        if (null === $this->client) {
            $engine = ExtSoapEngineFactory::fromOptions(
                ExtSoapOptions::defaults($this->wsdl)
            );
            $this->client = new DragonPayClient($engine);
        }

        return $this->client;
    }

    /**
     * Retrieves the `user_lifetime_id` from `dp_user_lifetime_ids` table if exists, or null otherwise.
     *
     * @param string $email email of the customer to search for his userLifetimeID
     *
     * @return null|string `user_lifetime_id` if exists in table `dp_user_lifetime_ids`, or null otherwise
     */
    private function getUserLifetimeIdFromDatabase($email)
    {
        /** @var DragonPayUserLifetimeId $userLifetimeIdEntity */
        $userLifetimeIdEntity =
            DragonPayUserLifetimeId::where('email_normalized', $this->normalizeEmail($email))->first();

        if ( ! empty($userLifetimeIdEntity)) {
            return $userLifetimeIdEntity->user_lifetime_id;
        }

        return null;
    }

    /**
     * Saves `userLifetieId` in the database (along with the parameters passed to the DragonPay endpoint).
     *
     * @param string $userLifetimeId userLifetimeId received from the DragonPay
     * @param string $email
     * @param string $name
     * @param string $prefix
     * @param string $remarks
     *
     * @throws SaveUserLifetimeIdException if we couldn't save `userLifetimeId` in the database.
     */
    private function saveUserLifetimeId($userLifetimeId, $email, $name, $prefix = '', $remarks = '')
    {
        $model = new DragonPayUserLifetimeId([
            'email'            => $email,
            'name'             => $name,
            'prefix'           => empty($prefix) ? null : $prefix,
            'remarks'          => empty($remarks) ? null : $remarks,
            'user_lifetime_id' => $userLifetimeId
        ]);

        if ( ! $model->save()) {
            throw new SaveUserLifetimeIdException('Could not save the userLifetimeId in the database');
        }
    }
}
