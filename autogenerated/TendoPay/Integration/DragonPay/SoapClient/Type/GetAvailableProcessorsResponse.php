<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetAvailableProcessorsResponse implements ResultInterface
{

    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfProcessorInfo
     */
    private $GetAvailableProcessorsResult;

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfProcessorInfo
     */
    public function getGetAvailableProcessorsResult()
    {
        return $this->GetAvailableProcessorsResult;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfProcessorInfo
     * $GetAvailableProcessorsResult
     * @return GetAvailableProcessorsResponse
     */
    public function withGetAvailableProcessorsResult($GetAvailableProcessorsResult)
    {
        $new = clone $this;
        $new->GetAvailableProcessorsResult = $GetAvailableProcessorsResult;

        return $new;
    }


}

