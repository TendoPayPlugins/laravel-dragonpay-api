<?php
/**
 * Created by PhpStorm.
 * User: robert
 * Date: 06.10.2018
 * Time: 23:39
 */

namespace TendoPay\Integration\DragonPay;

use Phpro\SoapClient\ClientBuilder;
use Phpro\SoapClient\ClientFactory;
use Phpro\SoapClient\Type\MixedResult;
use TendoPay\Integration\DragonPay\Model\DragonPayUserLifetimeId;
use TendoPay\Integration\DragonPay\SoapClient\DragonPayClient;
use TendoPay\Integration\DragonPay\SoapClient\Type\CreateLifetimeUser;

class DragonPayService
{
    use NormalizedEmail;

    /**
     * @var string $wsdl the wsdl URL of the DragonPay SOAP API
     * @var string $merchantId dragonpay merchant ID
     * @var string $password dragonpay merchant password
     */
    private $wsdl;
    private $merchantId;
    private $password;

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

        $clientFactory = new ClientFactory(DragonPayClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $this->wsdl, []);

        /** @var DragonPayClient $client */
        $client = $clientBuilder->build();

        /** @var MixedResult $response */
        $response = $client->createLifetimeUser(new CreateLifetimeUser($this->merchantId, $this->password, $prefix,
            $name, $email, $remarks));

        $userLifetimeId = $response->getResult()->CreateLifetimeUserResult;

        if (empty($userLifetimeId)) {
            throw new \Exception(
                sprintf('Could not create userLifetimeID for: email=%s, name=%s, prefix=%s, remarks=%s]',
                    $email, $name, $prefix, $remarks));
        }

        $this->saveUserLifetimeId($userLifetimeId, $email, $name, $prefix = '', $remarks = '');

        return $userLifetimeId;
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

    private function saveUserLifetimeId($userLifetimeId, $email, $name, $prefix = '', $remarks = '')
    {
        $model = new DragonPayUserLifetimeId([
            'email'            => $email,
            'name'             => $name,
            'prefix'           => empty($prefix) ? null : $prefix,
            'remarks'          => empty($remarks) ? null : $remarks,
            'user_lifetime_id' => $userLifetimeId
        ]);

        $model->save();
    }
}
