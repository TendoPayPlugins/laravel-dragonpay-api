<?php

namespace TendoPay\Integration\DragonPay\SoapClient;

use Phpro\SoapClient\Caller\Caller;
use TendoPay\Integration\DragonPay\SoapClient\Type;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class DragonPayClient
{
    /**
     * @var Caller
     */
    private $caller;

    public function __construct(\Phpro\SoapClient\Caller\Caller $caller)
    {
        $this->caller = $caller;
    }

    /**
     * @param RequestInterface|Type\GetCountries $parameters
     * @return ResultInterface|Type\GetCountriesResponse
     * @throws SoapException
     */
    public function getCountries(\TendoPay\Integration\DragonPay\SoapClient\Type\GetCountries $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetCountriesResponse
    {
        return ($this->caller)('GetCountries', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetProcessors $parameters
     * @return ResultInterface|Type\GetProcessorsResponse
     * @throws SoapException
     */
    public function getProcessors(\TendoPay\Integration\DragonPay\SoapClient\Type\GetProcessors $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetProcessorsResponse
    {
        return ($this->caller)('GetProcessors', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetAvailableProcessors $parameters
     * @return ResultInterface|Type\GetAvailableProcessorsResponse
     * @throws SoapException
     */
    public function getAvailableProcessors(\TendoPay\Integration\DragonPay\SoapClient\Type\GetAvailableProcessors $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetAvailableProcessorsResponse
    {
        return ($this->caller)('GetAvailableProcessors', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTxnStatus $parameters
     * @return ResultInterface|Type\GetTxnStatusResponse
     * @throws SoapException
     */
    public function getTxnStatus(\TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnStatus $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnStatusResponse
    {
        return ($this->caller)('GetTxnStatus', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTxnRefNo $parameters
     * @return ResultInterface|Type\GetTxnRefNoResponse
     * @throws SoapException
     */
    public function getTxnRefNo(\TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnRefNo $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnRefNoResponse
    {
        return ($this->caller)('GetTxnRefNo', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTxnToken $parameters
     * @return ResultInterface|Type\GetTxnTokenResponse
     * @throws SoapException
     */
    public function getTxnToken(\TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnToken $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnTokenResponse
    {
        return ($this->caller)('GetTxnToken', $parameters);
    }

    /**
     * @param RequestInterface|Type\CreateLifetimeUser $parameters
     * @return ResultInterface|Type\CreateLifetimeUserResponse
     * @throws SoapException
     */
    public function createLifetimeUser(\TendoPay\Integration\DragonPay\SoapClient\Type\CreateLifetimeUser $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\CreateLifetimeUserResponse
    {
        return ($this->caller)('CreateLifetimeUser', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetLifetimeUser $parameters
     * @return ResultInterface|Type\GetLifetimeUserResponse
     * @throws SoapException
     */
    public function getLifetimeUser(\TendoPay\Integration\DragonPay\SoapClient\Type\GetLifetimeUser $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetLifetimeUserResponse
    {
        return ($this->caller)('GetLifetimeUser', $parameters);
    }

    /**
     * @param RequestInterface|Type\UpdateLifetimeUser $parameters
     * @return ResultInterface|Type\UpdateLifetimeUserResponse
     * @throws SoapException
     */
    public function updateLifetimeUser(\TendoPay\Integration\DragonPay\SoapClient\Type\UpdateLifetimeUser $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\UpdateLifetimeUserResponse
    {
        return ($this->caller)('UpdateLifetimeUser', $parameters);
    }

    /**
     * @param RequestInterface|Type\CancelTransaction $parameters
     * @return ResultInterface|Type\CancelTransactionResponse
     * @throws SoapException
     */
    public function cancelTransaction(\TendoPay\Integration\DragonPay\SoapClient\Type\CancelTransaction $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\CancelTransactionResponse
    {
        return ($this->caller)('CancelTransaction', $parameters);
    }

    /**
     * @param RequestInterface|Type\SendBillingInfo $parameters
     * @return ResultInterface|Type\SendBillingInfoResponse
     * @throws SoapException
     */
    public function sendBillingInfo(\TendoPay\Integration\DragonPay\SoapClient\Type\SendBillingInfo $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\SendBillingInfoResponse
    {
        return ($this->caller)('SendBillingInfo', $parameters);
    }

    /**
     * @param RequestInterface|Type\SendShippingInfo $parameters
     * @return ResultInterface|Type\SendShippingInfoResponse
     * @throws SoapException
     */
    public function sendShippingInfo(\TendoPay\Integration\DragonPay\SoapClient\Type\SendShippingInfo $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\SendShippingInfoResponse
    {
        return ($this->caller)('SendShippingInfo', $parameters);
    }

    /**
     * @param RequestInterface|Type\RefundTransaction $parameters
     * @return ResultInterface|Type\RefundTransactionResponse
     * @throws SoapException
     */
    public function refundTransaction(\TendoPay\Integration\DragonPay\SoapClient\Type\RefundTransaction $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\RefundTransactionResponse
    {
        return ($this->caller)('RefundTransaction', $parameters);
    }

    /**
     * @param RequestInterface|Type\CancelRecurringTransaction $parameters
     * @return ResultInterface|Type\CancelRecurringTransactionResponse
     * @throws SoapException
     */
    public function cancelRecurringTransaction(\TendoPay\Integration\DragonPay\SoapClient\Type\CancelRecurringTransaction $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\CancelRecurringTransactionResponse
    {
        return ($this->caller)('CancelRecurringTransaction', $parameters);
    }

    /**
     * @param RequestInterface|Type\SplitPayment $parameters
     * @return ResultInterface|Type\SplitPaymentResponse
     * @throws SoapException
     */
    public function splitPayment(\TendoPay\Integration\DragonPay\SoapClient\Type\SplitPayment $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\SplitPaymentResponse
    {
        return ($this->caller)('SplitPayment', $parameters);
    }

    /**
     * @param RequestInterface|Type\CreateExpressTransaction $parameters
     * @return ResultInterface|Type\CreateExpressTransactionResponse
     * @throws SoapException
     */
    public function createExpressTransaction(\TendoPay\Integration\DragonPay\SoapClient\Type\CreateExpressTransaction $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\CreateExpressTransactionResponse
    {
        return ($this->caller)('CreateExpressTransaction', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetMerchantTxns $parameters
     * @return ResultInterface|Type\GetMerchantTxnsResponse
     * @throws SoapException
     */
    public function getMerchantTxns(\TendoPay\Integration\DragonPay\SoapClient\Type\GetMerchantTxns $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetMerchantTxnsResponse
    {
        return ($this->caller)('GetMerchantTxns', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetMerchantSettledTxns $parameters
     * @return ResultInterface|Type\GetMerchantSettledTxnsResponse
     * @throws SoapException
     */
    public function getMerchantSettledTxns(\TendoPay\Integration\DragonPay\SoapClient\Type\GetMerchantSettledTxns $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetMerchantSettledTxnsResponse
    {
        return ($this->caller)('GetMerchantSettledTxns', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetSwitchTxnLogs $parameters
     * @return ResultInterface|Type\GetSwitchTxnLogsResponse
     * @throws SoapException
     */
    public function getSwitchTxnLogs(\TendoPay\Integration\DragonPay\SoapClient\Type\GetSwitchTxnLogs $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetSwitchTxnLogsResponse
    {
        return ($this->caller)('GetSwitchTxnLogs', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTxn $parameters
     * @return ResultInterface|Type\GetTxnResponse
     * @throws SoapException
     */
    public function getTxn(\TendoPay\Integration\DragonPay\SoapClient\Type\GetTxn $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnResponse
    {
        return ($this->caller)('GetTxn', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTxnExpiryDate $parameters
     * @return ResultInterface|Type\GetTxnExpiryDateResponse
     * @throws SoapException
     */
    public function getTxnExpiryDate(\TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnExpiryDate $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnExpiryDateResponse
    {
        return ($this->caller)('GetTxnExpiryDate', $parameters);
    }
}

