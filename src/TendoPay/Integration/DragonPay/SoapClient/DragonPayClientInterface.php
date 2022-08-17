<?php

namespace TendoPay\Integration\DragonPay\SoapClient;

use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use TendoPay\Integration\DragonPay\SoapClient\Type;
use TendoPay\Integration\DragonPay\SoapClient\Type\CancelRecurringTransaction;
use TendoPay\Integration\DragonPay\SoapClient\Type\CancelRecurringTransactionResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\CancelTransaction;
use TendoPay\Integration\DragonPay\SoapClient\Type\CancelTransactionResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\CreateExpressTransaction;
use TendoPay\Integration\DragonPay\SoapClient\Type\CreateExpressTransactionResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\CreateLifetimeUser;
use TendoPay\Integration\DragonPay\SoapClient\Type\CreateLifetimeUserResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetAvailableProcessors;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetAvailableProcessorsResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetCountries;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetCountriesResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetLifetimeUser;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetLifetimeUserResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetMerchantSettledTxns;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetMerchantSettledTxnsResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetMerchantTxns;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetMerchantTxnsResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetProcessors;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetProcessorsResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetSwitchTxnLogs;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetSwitchTxnLogsResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetTxn;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnExpiryDate;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnExpiryDateResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnRefNo;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnRefNoResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnStatus;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnStatusResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnToken;
use TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnTokenResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\RefundTransaction;
use TendoPay\Integration\DragonPay\SoapClient\Type\RefundTransactionResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\SendBillingInfo;
use TendoPay\Integration\DragonPay\SoapClient\Type\SendBillingInfoResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\SendShippingInfo;
use TendoPay\Integration\DragonPay\SoapClient\Type\SendShippingInfoResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\SplitPayment;
use TendoPay\Integration\DragonPay\SoapClient\Type\SplitPaymentResponse;
use TendoPay\Integration\DragonPay\SoapClient\Type\UpdateLifetimeUser;
use TendoPay\Integration\DragonPay\SoapClient\Type\UpdateLifetimeUserResponse;

interface DragonPayClientInterface
{
    /**
     * @param RequestInterface|Type\GetCountries $parameters
     * @return ResultInterface|Type\GetCountriesResponse
     * @throws SoapException
     */
    public function getCountries(GetCountries $parameters): GetCountriesResponse;

    /**
     * @param RequestInterface|Type\GetProcessors $parameters
     * @return ResultInterface|Type\GetProcessorsResponse
     * @throws SoapException
     */
    public function getProcessors(GetProcessors $parameters): GetProcessorsResponse;

    /**
     * @param RequestInterface|Type\GetAvailableProcessors $parameters
     * @return ResultInterface|Type\GetAvailableProcessorsResponse
     * @throws SoapException
     */
    public function getAvailableProcessors(GetAvailableProcessors $parameters): GetAvailableProcessorsResponse;

    /**
     * @param RequestInterface|Type\GetTxnStatus $parameters
     * @return ResultInterface|Type\GetTxnStatusResponse
     * @throws SoapException
     */
    public function getTxnStatus(GetTxnStatus $parameters): GetTxnStatusResponse;

    /**
     * @param RequestInterface|Type\GetTxnRefNo $parameters
     * @return ResultInterface|Type\GetTxnRefNoResponse
     * @throws SoapException
     */
    public function getTxnRefNo(GetTxnRefNo $parameters): GetTxnRefNoResponse;

    /**
     * @param RequestInterface|Type\GetTxnToken $parameters
     * @return ResultInterface|Type\GetTxnTokenResponse
     * @throws SoapException
     */
    public function getTxnToken(GetTxnToken $parameters): GetTxnTokenResponse;

    /**
     * @param RequestInterface|Type\CreateLifetimeUser $parameters
     * @return ResultInterface|Type\CreateLifetimeUserResponse
     * @throws SoapException
     */
    public function createLifetimeUser(CreateLifetimeUser $parameters): CreateLifetimeUserResponse;

    /**
     * @param RequestInterface|Type\GetLifetimeUser $parameters
     * @return ResultInterface|Type\GetLifetimeUserResponse
     * @throws SoapException
     */
    public function getLifetimeUser(GetLifetimeUser $parameters): GetLifetimeUserResponse;

    /**
     * @param RequestInterface|Type\UpdateLifetimeUser $parameters
     * @return ResultInterface|Type\UpdateLifetimeUserResponse
     * @throws SoapException
     */
    public function updateLifetimeUser(UpdateLifetimeUser $parameters): UpdateLifetimeUserResponse;

    /**
     * @param RequestInterface|Type\CancelTransaction $parameters
     * @return ResultInterface|Type\CancelTransactionResponse
     * @throws SoapException
     */
    public function cancelTransaction(CancelTransaction $parameters): CancelTransactionResponse;

    /**
     * @param RequestInterface|Type\SendBillingInfo $parameters
     * @return ResultInterface|Type\SendBillingInfoResponse
     * @throws SoapException
     */
    public function sendBillingInfo(SendBillingInfo $parameters): SendBillingInfoResponse;

    /**
     * @param RequestInterface|Type\SendShippingInfo $parameters
     * @return ResultInterface|Type\SendShippingInfoResponse
     * @throws SoapException
     */
    public function sendShippingInfo(SendShippingInfo $parameters): SendShippingInfoResponse;

    /**
     * @param RequestInterface|Type\RefundTransaction $parameters
     * @return ResultInterface|Type\RefundTransactionResponse
     * @throws SoapException
     */
    public function refundTransaction(RefundTransaction $parameters): RefundTransactionResponse;

    /**
     * @param RequestInterface|Type\CancelRecurringTransaction $parameters
     * @return ResultInterface|Type\CancelRecurringTransactionResponse
     * @throws SoapException
     */
    public function cancelRecurringTransaction(CancelRecurringTransaction $parameters
    ): CancelRecurringTransactionResponse;

    /**
     * @param RequestInterface|Type\SplitPayment $parameters
     * @return ResultInterface|Type\SplitPaymentResponse
     * @throws SoapException
     */
    public function splitPayment(SplitPayment $parameters): SplitPaymentResponse;

    /**
     * @param RequestInterface|Type\CreateExpressTransaction $parameters
     * @return ResultInterface|Type\CreateExpressTransactionResponse
     * @throws SoapException
     */
    public function createExpressTransaction(CreateExpressTransaction $parameters): CreateExpressTransactionResponse;

    /**
     * @param RequestInterface|Type\GetMerchantTxns $parameters
     * @return ResultInterface|Type\GetMerchantTxnsResponse
     * @throws SoapException
     */
    public function getMerchantTxns(GetMerchantTxns $parameters): GetMerchantTxnsResponse;

    /**
     * @param RequestInterface|Type\GetMerchantSettledTxns $parameters
     * @return ResultInterface|Type\GetMerchantSettledTxnsResponse
     * @throws SoapException
     */
    public function getMerchantSettledTxns(GetMerchantSettledTxns $parameters): GetMerchantSettledTxnsResponse;

    /**
     * @param RequestInterface|Type\GetSwitchTxnLogs $parameters
     * @return ResultInterface|Type\GetSwitchTxnLogsResponse
     * @throws SoapException
     */
    public function getSwitchTxnLogs(GetSwitchTxnLogs $parameters): GetSwitchTxnLogsResponse;

    /**
     * @param RequestInterface|Type\GetTxn $parameters
     * @return ResultInterface|Type\GetTxnResponse
     * @throws SoapException
     */
    public function getTxn(GetTxn $parameters): GetTxnResponse;

    /**
     * @param RequestInterface|Type\GetTxnExpiryDate $parameters
     * @return ResultInterface|Type\GetTxnExpiryDateResponse
     * @throws SoapException
     */
    public function getTxnExpiryDate(GetTxnExpiryDate $parameters): GetTxnExpiryDateResponse;
}
