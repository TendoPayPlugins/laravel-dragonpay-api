<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetTxnStatusResponse implements ResultInterface
{
    /**
     * @var string
     */
    private $GetTxnStatusResult;

    /**
     * @return string
     */
    public function getGetTxnStatusResult()
    {
        return $this->GetTxnStatusResult;
    }

    /**
     * @param string $GetTxnStatusResult
     * @return GetTxnStatusResponse
     */
    public function withGetTxnStatusResult($GetTxnStatusResult)
    {
        $new = clone $this;
        $new->GetTxnStatusResult = $GetTxnStatusResult;

        return $new;
    }
}

