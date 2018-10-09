<?php

use Phpro\SoapClient\CodeGenerator\Assembler;
use Phpro\SoapClient\CodeGenerator\Rules;
use Phpro\SoapClient\CodeGenerator\Config\Config;

return Config::create()
             ->setWsdl('https://test.dragonpay.ph/DragonPayWebService/MerchantService.asmx?WSDL')
             ->setTypeDestination('src/DragonPay/SoapClient/Type')
             ->setTypeNamespace('TendoPay\Integration\DragonPay\SoapClient\Type')
             ->setClientDestination('src/DragonPay/SoapClient')
             ->setClientName('DragonPayClient')
             ->setClientNamespace('TendoPay\Integration\DragonPay\SoapClient')
             ->setClassMapDestination('src/DragonPay/SoapClient')
             ->setClassMapName('DragonPayClassmap')
             ->setClassMapNamespace('TendoPay\Integration\DragonPay\SoapClient')
             ->addRule(new Rules\AssembleRule(new Assembler\GetterAssembler(new Assembler\GetterAssemblerOptions())))
             ->addRule(new Rules\AssembleRule(new Assembler\ImmutableSetterAssembler()))
             ->addRule(
                 new Rules\TypenameMatchesRule(
                     new Rules\MultiRule([
                         new Rules\AssembleRule(new Assembler\RequestAssembler()),
                         new Rules\AssembleRule(new Assembler\ConstructorAssembler()),
                     ]),
                     '/(?<!Response)$/i'
                 )
             )
             ->addRule(
                 new Rules\TypenameMatchesRule(
                     new Rules\MultiRule([
                         new Rules\AssembleRule(new Assembler\ResultAssembler()),
                     ]),
                     '/Response$/i'
                 )
             );
