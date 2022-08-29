<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetTxnResponse implements ResultInterface
{
    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\Transaction
     */
    private $GetTxnResult;

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\Transaction
     */
    public function getGetTxnResult()
    {
        return $this->GetTxnResult;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\Transaction $GetTxnResult
     * @return GetTxnResponse
     */
    public function withGetTxnResult($GetTxnResult)
    {
        $new = clone $this;
        $new->GetTxnResult = $GetTxnResult;

        return $new;
    }
}

