<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetTxnRefNoResponse implements ResultInterface
{

    /**
     * @var string
     */
    private $GetTxnRefNoResult;

    /**
     * @return string
     */
    public function getGetTxnRefNoResult()
    {
        return $this->GetTxnRefNoResult;
    }

    /**
     * @param string $GetTxnRefNoResult
     * @return GetTxnRefNoResponse
     */
    public function withGetTxnRefNoResult($GetTxnRefNoResult)
    {
        $new = clone $this;
        $new->GetTxnRefNoResult = $GetTxnRefNoResult;

        return $new;
    }


}

