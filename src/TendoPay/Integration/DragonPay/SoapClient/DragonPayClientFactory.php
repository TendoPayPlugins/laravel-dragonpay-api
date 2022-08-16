<?php

namespace TendoPay\Integration\DragonPay\SoapClient;

use TendoPay\Integration\DragonPay\SoapClient\DragonPayClient;
use TendoPay\Integration\DragonPay\SoapClient\DragonPayClassmap;
use Symfony\Component\EventDispatcher\EventDispatcher;
use Phpro\SoapClient\Soap\DefaultEngineFactory;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Caller\EventDispatchingCaller;
use Phpro\SoapClient\Caller\EngineCaller;

class DragonPayClientFactory
{
    public static function factory(string $wsdl) : \TendoPay\Integration\DragonPay\SoapClient\DragonPayClient
    {
        $engine = DefaultEngineFactory::create(
            ExtSoapOptions::defaults($wsdl, [])
                ->withClassMap(DragonPayClassmap::getCollection())
        );

        $eventDispatcher = new EventDispatcher();
        $caller = new EventDispatchingCaller(new EngineCaller($engine), $eventDispatcher);

        return new DragonPayClient($caller);
    }
}

