<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SendShippingInfoResponse implements ResultInterface
{

    /**
     * @var int
     */
    private $SendShippingInfoResult;

    /**
     * @return int
     */
    public function getSendShippingInfoResult()
    {
        return $this->SendShippingInfoResult;
    }

    /**
     * @param int $SendShippingInfoResult
     * @return SendShippingInfoResponse
     */
    public function withSendShippingInfoResult($SendShippingInfoResult)
    {
        $new = clone $this;
        $new->SendShippingInfoResult = $SendShippingInfoResult;

        return $new;
    }


}

