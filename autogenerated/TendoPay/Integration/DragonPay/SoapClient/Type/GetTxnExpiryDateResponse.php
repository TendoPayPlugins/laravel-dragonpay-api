<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetTxnExpiryDateResponse implements ResultInterface
{

    /**
     * @var \DateTime
     */
    private $GetTxnExpiryDateResult;

    /**
     * @return \DateTime
     */
    public function getGetTxnExpiryDateResult()
    {
        return $this->GetTxnExpiryDateResult;
    }

    /**
     * @param \DateTime $GetTxnExpiryDateResult
     * @return GetTxnExpiryDateResponse
     */
    public function withGetTxnExpiryDateResult($GetTxnExpiryDateResult)
    {
        $new = clone $this;
        $new->GetTxnExpiryDateResult = $GetTxnExpiryDateResult;

        return $new;
    }


}

