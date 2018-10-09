<?php

namespace TendoPay\Integration\DragonPay\SoapClient;

use TendoPay\Integration\DragonPay\SoapClient\DragonPayClient;
use TendoPay\Integration\DragonPay\SoapClient\DragonPayClassmap;
use Phpro\SoapClient\ClientFactory as PhproClientFactory;
use Phpro\SoapClient\ClientBuilder;

class DragonPayClientFactory
{

    public static function factory(string $wsdl) : \TendoPay\Integration\DragonPay\SoapClient\DragonPayClient
    {
        $clientFactory = new PhproClientFactory(DragonPayClient::class);
        $clientBuilder = new ClientBuilder($clientFactory, $wsdl, []);
        $clientBuilder->withClassMaps(DragonPayClassmap::getCollection());

        return $clientBuilder->build();
    }


}

