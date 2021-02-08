<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetProcessorsResponse implements ResultInterface
{

    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfProcessorInfo
     */
    private $GetProcessorsResult;

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfProcessorInfo
     */
    public function getGetProcessorsResult()
    {
        return $this->GetProcessorsResult;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfProcessorInfo
     * $GetProcessorsResult
     * @return GetProcessorsResponse
     */
    public function withGetProcessorsResult($GetProcessorsResult)
    {
        $new = clone $this;
        $new->GetProcessorsResult = $GetProcessorsResult;

        return $new;
    }


}

