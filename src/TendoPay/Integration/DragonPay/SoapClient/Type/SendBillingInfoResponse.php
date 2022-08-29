<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendBillingInfoResponse implements ResultInterface
{
    /**
     * @var int
     */
    private $SendBillingInfoResult;

    /**
     * @return int
     */
    public function getSendBillingInfoResult()
    {
        return $this->SendBillingInfoResult;
    }

    /**
     * @param int $SendBillingInfoResult
     * @return SendBillingInfoResponse
     */
    public function withSendBillingInfoResult($SendBillingInfoResult)
    {
        $new = clone $this;
        $new->SendBillingInfoResult = $SendBillingInfoResult;

        return $new;
    }
}

