<?php

namespace TendoPay\Integration\DragonPay\SoapClient;

use TendoPay\Integration\DragonPay\SoapClient\Type;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use Phpro\SoapClient\Exception\SoapException;

class DragonPayClient extends \Phpro\SoapClient\Client
{

    /**
     * @param RequestInterface|Type\GetCountries $parameters
     * @return ResultInterface|Type\GetCountriesResponse
     * @throws SoapException
     */
    public function getCountries(\TendoPay\Integration\DragonPay\SoapClient\Type\GetCountries $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetCountriesResponse
    {
        return $this->call('GetCountries', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetProcessors $parameters
     * @return ResultInterface|Type\GetProcessorsResponse
     * @throws SoapException
     */
    public function getProcessors(\TendoPay\Integration\DragonPay\SoapClient\Type\GetProcessors $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetProcessorsResponse
    {
        return $this->call('GetProcessors', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetAvailableProcessors $parameters
     * @return ResultInterface|Type\GetAvailableProcessorsResponse
     * @throws SoapException
     */
    public function getAvailableProcessors(\TendoPay\Integration\DragonPay\SoapClient\Type\GetAvailableProcessors $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetAvailableProcessorsResponse
    {
        return $this->call('GetAvailableProcessors', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTxnStatus $parameters
     * @return ResultInterface|Type\GetTxnStatusResponse
     * @throws SoapException
     */
    public function getTxnStatus(\TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnStatus $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnStatusResponse
    {
        return $this->call('GetTxnStatus', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTxnRefNo $parameters
     * @return ResultInterface|Type\GetTxnRefNoResponse
     * @throws SoapException
     */
    public function getTxnRefNo(\TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnRefNo $parameters) : \TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnRefNoResponse
    {
        return $this->call('GetTxnRefNo', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTxnToken $parameters
     * @return ResultInterface|Type\GetTxnTokenResponse
     * @throws SoapException
     */
    public function getTxnToken(\TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnToken $parameters) : ResultInterface
    {
        return $this->call('GetTxnToken', $parameters);
    }

    /**
     * @param RequestInterface|Type\CreateLifetimeUser $parameters
     * @return ResultInterface|Type\CreateLifetimeUserResponse
     * @throws SoapException
     */
    public function createLifetimeUser(\TendoPay\Integration\DragonPay\SoapClient\Type\CreateLifetimeUser $parameters) : ResultInterface
    {
        return $this->call('CreateLifetimeUser', $parameters);
    }

    /**
     * @param RequestInterface|Type\CancelTransaction $parameters
     * @return ResultInterface|Type\CancelTransactionResponse
     * @throws SoapException
     */
    public function cancelTransaction(\TendoPay\Integration\DragonPay\SoapClient\Type\CancelTransaction $parameters) : ResultInterface
    {
        return $this->call('CancelTransaction', $parameters);
    }

    /**
     * @param RequestInterface|Type\SendBillingInfo $parameters
     * @return ResultInterface|Type\SendBillingInfoResponse
     * @throws SoapException
     */
    public function sendBillingInfo(\TendoPay\Integration\DragonPay\SoapClient\Type\SendBillingInfo $parameters) : ResultInterface
    {
        return $this->call('SendBillingInfo', $parameters);
    }

    /**
     * @param RequestInterface|Type\SendShippingInfo $parameters
     * @return ResultInterface|Type\SendShippingInfoResponse
     * @throws SoapException
     */
    public function sendShippingInfo(\TendoPay\Integration\DragonPay\SoapClient\Type\SendShippingInfo $parameters) : ResultInterface
    {
        return $this->call('SendShippingInfo', $parameters);
    }

    /**
     * @param RequestInterface|Type\RefundTransaction $parameters
     * @return ResultInterface|Type\RefundTransactionResponse
     * @throws SoapException
     */
    public function refundTransaction(\TendoPay\Integration\DragonPay\SoapClient\Type\RefundTransaction $parameters) : ResultInterface
    {
        return $this->call('RefundTransaction', $parameters);
    }

    /**
     * @param RequestInterface|Type\CancelRecurringTransaction $parameters
     * @return ResultInterface|Type\CancelRecurringTransactionResponse
     * @throws SoapException
     */
    public function cancelRecurringTransaction(\TendoPay\Integration\DragonPay\SoapClient\Type\CancelRecurringTransaction $parameters) : ResultInterface
    {
        return $this->call('CancelRecurringTransaction', $parameters);
    }

    /**
     * @param RequestInterface|Type\SplitPayment $parameters
     * @return ResultInterface|Type\SplitPaymentResponse
     * @throws SoapException
     */
    public function splitPayment(\TendoPay\Integration\DragonPay\SoapClient\Type\SplitPayment $parameters) : ResultInterface
    {
        return $this->call('SplitPayment', $parameters);
    }

    /**
     * @param RequestInterface|Type\CreateExpressTransaction $parameters
     * @return ResultInterface|Type\CreateExpressTransactionResponse
     * @throws SoapException
     */
    public function createExpressTransaction(\TendoPay\Integration\DragonPay\SoapClient\Type\CreateExpressTransaction $parameters) : ResultInterface
    {
        return $this->call('CreateExpressTransaction', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetMerchantTxns $parameters
     * @return ResultInterface|Type\GetMerchantTxnsResponse
     * @throws SoapException
     */
    public function getMerchantTxns(\TendoPay\Integration\DragonPay\SoapClient\Type\GetMerchantTxns $parameters) : ResultInterface
    {
        return $this->call('GetMerchantTxns', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetMerchantSettledTxns $parameters
     * @return ResultInterface|Type\GetMerchantSettledTxnsResponse
     * @throws SoapException
     */
    public function getMerchantSettledTxns(\TendoPay\Integration\DragonPay\SoapClient\Type\GetMerchantSettledTxns $parameters) : ResultInterface
    {
        return $this->call('GetMerchantSettledTxns', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetSwitchTxnLogs $parameters
     * @return ResultInterface|Type\GetSwitchTxnLogsResponse
     * @throws SoapException
     */
    public function getSwitchTxnLogs(\TendoPay\Integration\DragonPay\SoapClient\Type\GetSwitchTxnLogs $parameters) : ResultInterface
    {
        return $this->call('GetSwitchTxnLogs', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTxn $parameters
     * @return ResultInterface|Type\GetTxnResponse
     * @throws SoapException
     */
    public function getTxn(\TendoPay\Integration\DragonPay\SoapClient\Type\GetTxn $parameters) : ResultInterface
    {
        return $this->call('GetTxn', $parameters);
    }

    /**
     * @param RequestInterface|Type\GetTxnExpiryDate $parameters
     * @return ResultInterface|Type\GetTxnExpiryDateResponse
     * @throws SoapException
     */
    public function getTxnExpiryDate(\TendoPay\Integration\DragonPay\SoapClient\Type\GetTxnExpiryDate $parameters) : ResultInterface
    {
        return $this->call('GetTxnExpiryDate', $parameters);
    }


}

