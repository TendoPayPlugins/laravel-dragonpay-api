<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetMerchantSettledTxnsResponse implements ResultInterface
{
    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfTransaction
     */
    private $GetMerchantSettledTxnsResult;

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfTransaction
     */
    public function getGetMerchantSettledTxnsResult()
    {
        return $this->GetMerchantSettledTxnsResult;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfTransaction $GetMerchantSettledTxnsResult
     * @return GetMerchantSettledTxnsResponse
     */
    public function withGetMerchantSettledTxnsResult($GetMerchantSettledTxnsResult)
    {
        $new = clone $this;
        $new->GetMerchantSettledTxnsResult = $GetMerchantSettledTxnsResult;

        return $new;
    }
}

