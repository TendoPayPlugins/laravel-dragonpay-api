<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class RefundTransactionResponse implements ResultInterface
{

    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\RefundStatus
     */
    private $RefundTransactionResult;

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\RefundStatus
     */
    public function getRefundTransactionResult()
    {
        return $this->RefundTransactionResult;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\RefundStatus
     * $RefundTransactionResult
     * @return RefundTransactionResponse
     */
    public function withRefundTransactionResult($RefundTransactionResult)
    {
        $new = clone $this;
        $new->RefundTransactionResult = $RefundTransactionResult;

        return $new;
    }


}

