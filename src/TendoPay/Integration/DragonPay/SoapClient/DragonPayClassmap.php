<?php

namespace TendoPay\Integration\DragonPay\SoapClient;

use TendoPay\Integration\DragonPay\SoapClient\Type;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection;
use Soap\ExtSoapEngine\Configuration\ClassMap\ClassMap;

class DragonPayClassmap
{
    public static function getCollection() : \Soap\ExtSoapEngine\Configuration\ClassMap\ClassMapCollection
    {
        return new ClassMapCollection(
            new ClassMap('GetCountries', Type\GetCountries::class),
            new ClassMap('GetCountriesResponse', Type\GetCountriesResponse::class),
            new ClassMap('ArrayOfCountry', Type\ArrayOfCountry::class),
            new ClassMap('Country', Type\Country::class),
            new ClassMap('GetProcessors', Type\GetProcessors::class),
            new ClassMap('GetProcessorsResponse', Type\GetProcessorsResponse::class),
            new ClassMap('ArrayOfProcessorInfo', Type\ArrayOfProcessorInfo::class),
            new ClassMap('ProcessorInfo', Type\ProcessorInfo::class),
            new ClassMap('GetAvailableProcessors', Type\GetAvailableProcessors::class),
            new ClassMap('GetAvailableProcessorsResponse', Type\GetAvailableProcessorsResponse::class),
            new ClassMap('GetTxnStatus', Type\GetTxnStatus::class),
            new ClassMap('GetTxnStatusResponse', Type\GetTxnStatusResponse::class),
            new ClassMap('GetTxnRefNo', Type\GetTxnRefNo::class),
            new ClassMap('GetTxnRefNoResponse', Type\GetTxnRefNoResponse::class),
            new ClassMap('GetTxnToken', Type\GetTxnToken::class),
            new ClassMap('GetTxnTokenResponse', Type\GetTxnTokenResponse::class),
            new ClassMap('CreateLifetimeUser', Type\CreateLifetimeUser::class),
            new ClassMap('CreateLifetimeUserResponse', Type\CreateLifetimeUserResponse::class),
            new ClassMap('GetLifetimeUser', Type\GetLifetimeUser::class),
            new ClassMap('GetLifetimeUserResponse', Type\GetLifetimeUserResponse::class),
            new ClassMap('LifetimeUser', Type\LifetimeUser::class),
            new ClassMap('UpdateLifetimeUser', Type\UpdateLifetimeUser::class),
            new ClassMap('UpdateLifetimeUserResponse', Type\UpdateLifetimeUserResponse::class),
            new ClassMap('CancelTransaction', Type\CancelTransaction::class),
            new ClassMap('CancelTransactionResponse', Type\CancelTransactionResponse::class),
            new ClassMap('SendBillingInfo', Type\SendBillingInfo::class),
            new ClassMap('SendBillingInfoResponse', Type\SendBillingInfoResponse::class),
            new ClassMap('SendShippingInfo', Type\SendShippingInfo::class),
            new ClassMap('SendShippingInfoResponse', Type\SendShippingInfoResponse::class),
            new ClassMap('RefundTransaction', Type\RefundTransaction::class),
            new ClassMap('RefundTransactionResponse', Type\RefundTransactionResponse::class),
            new ClassMap('RefundStatus', Type\RefundStatus::class),
            new ClassMap('CancelRecurringTransaction', Type\CancelRecurringTransaction::class),
            new ClassMap('CancelRecurringTransactionResponse', Type\CancelRecurringTransactionResponse::class),
            new ClassMap('SplitPayment', Type\SplitPayment::class),
            new ClassMap('ArrayOfSplitPaymentDetails', Type\ArrayOfSplitPaymentDetails::class),
            new ClassMap('SplitPaymentDetails', Type\SplitPaymentDetails::class),
            new ClassMap('SplitPaymentResponse', Type\SplitPaymentResponse::class),
            new ClassMap('CreateExpressTransaction', Type\CreateExpressTransaction::class),
            new ClassMap('CreateExpressTransactionResponse', Type\CreateExpressTransactionResponse::class),
            new ClassMap('GetMerchantTxns', Type\GetMerchantTxns::class),
            new ClassMap('GetMerchantTxnsResponse', Type\GetMerchantTxnsResponse::class),
            new ClassMap('ArrayOfTransaction', Type\ArrayOfTransaction::class),
            new ClassMap('Transaction', Type\Transaction::class),
            new ClassMap('GetMerchantSettledTxns', Type\GetMerchantSettledTxns::class),
            new ClassMap('GetMerchantSettledTxnsResponse', Type\GetMerchantSettledTxnsResponse::class),
            new ClassMap('GetSwitchTxnLogs', Type\GetSwitchTxnLogs::class),
            new ClassMap('GetSwitchTxnLogsResponse', Type\GetSwitchTxnLogsResponse::class),
            new ClassMap('ArrayOfTransactionLog', Type\ArrayOfTransactionLog::class),
            new ClassMap('TransactionLog', Type\TransactionLog::class),
            new ClassMap('GetTxn', Type\GetTxn::class),
            new ClassMap('GetTxnResponse', Type\GetTxnResponse::class),
            new ClassMap('GetTxnExpiryDate', Type\GetTxnExpiryDate::class),
            new ClassMap('GetTxnExpiryDateResponse', Type\GetTxnExpiryDateResponse::class),
        );
    }
}

