<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class SplitPaymentResponse implements ResultInterface
{
    /**
     * @var int
     */
    private $SplitPaymentResult;

    /**
     * @return int
     */
    public function getSplitPaymentResult()
    {
        return $this->SplitPaymentResult;
    }

    /**
     * @param int $SplitPaymentResult
     * @return SplitPaymentResponse
     */
    public function withSplitPaymentResult($SplitPaymentResult)
    {
        $new = clone $this;
        $new->SplitPaymentResult = $SplitPaymentResult;

        return $new;
    }
}

