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
    private $wsdl;
    private $merchantId;
    private $password;

    public function __construct()
    {
        $this->wsdl       = config('services.dragonpay.wsdl');
        $this->merchantId = config('services.dragonpay.merchant_id');
        $this->password   = config('services.dragonpay.merchant_password');
    }

    public function createLifetimeId($email, $name, $prefix = '', $remarks = '')
    {
        if (empty($this->wsdl) || empty($this->merchantId) || empty($this->password)) {
            throw new \Exception('No configuration for DragonPay API found.');
        }

        $clientFactory = new ClientFactory(DragonPayClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $this->wsdl, []);

        /** @var DragonPayClient $client */
        $client = $clientBuilder->build();

        /** @var MixedResult $response */
        $response = $client->createLifetimeUser(new CreateLifetimeUser($this->merchantId, $this->password, $prefix,
            $name, $email, $remarks));

        $userLifetimeId = $response->getResult()->CreateLifetimeUserResult;

        $this->saveUserLifetimeId($userLifetimeId, $email, $name, $prefix = '', $remarks = '');

        return $response;
    }

    private function saveUserLifetimeId($userLifetimeId, $email, $name, $prefix = '', $remarks = '')
    {
        $model = new DragonPayUserLifetimeId([
            'email'            => $email,
            'name'             => $name,
            'prefix'           => $prefix,
            'remarks'          => $remarks,
            'user_lifetime_id' => $userLifetimeId
        ]);

        // todo should we update the email first? or maybe just add another record for the same email?

        $model->save();
    }
}
