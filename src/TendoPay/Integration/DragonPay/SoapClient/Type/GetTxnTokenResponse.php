<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetTxnTokenResponse implements ResultInterface
{
    /**
     * @var string
     */
    private $GetTxnTokenResult;

    /**
     * @return string
     */
    public function getGetTxnTokenResult()
    {
        return $this->GetTxnTokenResult;
    }

    /**
     * @param string $GetTxnTokenResult
     * @return GetTxnTokenResponse
     */
    public function withGetTxnTokenResult($GetTxnTokenResult)
    {
        $new = clone $this;
        $new->GetTxnTokenResult = $GetTxnTokenResult;

        return $new;
    }
}

