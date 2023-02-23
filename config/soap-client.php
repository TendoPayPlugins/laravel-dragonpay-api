<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;
use Soap\ExtSoapEngine\ExtSoapOptions;
use Phpro\SoapClient\Soap\DefaultEngineFactory;

return Config::create()
    ->setEngine($engine = DefaultEngineFactory::create(
        ExtSoapOptions::defaults('https://test.dragonpay.ph/DragonPayWebService/MerchantService.asmx?WSDL', [])
            ->disableWsdlCache()
    ))
    ->setTypeDestination('src/TendoPay/Integration/DragonPay/SoapClient/Type')
    ->setTypeNamespace('TendoPay\Integration\DragonPay\SoapClient\Type')
    ->setClientDestination('src/TendoPay/Integration/DragonPay/SoapClient')
    ->setClientName('DragonPayClient')
    ->setClientNamespace('TendoPay\Integration\DragonPay\SoapClient')
    ->setClassMapDestination('src/TendoPay/Integration/DragonPay/SoapClient')
    ->setClassMapName('DragonPayClassmap')
    ->setClassMapNamespace('TendoPay\Integration\DragonPay\SoapClient')
    ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
    ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler(
        new Assembler\ImmutableSetterAssemblerOptions()
    )))
    ->addRule(
        new Rules\IsRequestRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\RequestAssembler()),
                new Rules\AssembleRule(new Assembler\ConstructorAssembler(new Assembler\ConstructorAssemblerOptions())),
            ])
        )
    )
    ->addRule(
        new Rules\IsResultRule(
            $engine->getMetadata(),
            new Rules\MultiRule([
                new Rules\AssembleRule(new Assembler\ResultAssembler()),
            ])
        )
    )
;
