<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMerchantTxnsResponse implements ResultInterface
{
    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfTransaction
     */
    private $GetMerchantTxnsResult;

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfTransaction
     */
    public function getGetMerchantTxnsResult()
    {
        return $this->GetMerchantTxnsResult;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfTransaction $GetMerchantTxnsResult
     * @return GetMerchantTxnsResponse
     */
    public function withGetMerchantTxnsResult($GetMerchantTxnsResult)
    {
        $new = clone $this;
        $new->GetMerchantTxnsResult = $GetMerchantTxnsResult;

        return $new;
    }
}

