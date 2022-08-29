<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetTxnExpiryDateResponse implements ResultInterface
{
    /**
     * @var \DateTimeInterface
     */
    private $GetTxnExpiryDateResult;

    /**
     * @return \DateTimeInterface
     */
    public function getGetTxnExpiryDateResult()
    {
        return $this->GetTxnExpiryDateResult;
    }

    /**
     * @param \DateTimeInterface $GetTxnExpiryDateResult
     * @return GetTxnExpiryDateResponse
     */
    public function withGetTxnExpiryDateResult($GetTxnExpiryDateResult)
    {
        $new = clone $this;
        $new->GetTxnExpiryDateResult = $GetTxnExpiryDateResult;

        return $new;
    }
}

