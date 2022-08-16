<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

class ArrayOfProcessorInfo
{
    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\ProcessorInfo
     */
    private $ProcessorInfo;

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\ProcessorInfo
     */
    public function getProcessorInfo()
    {
        return $this->ProcessorInfo;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\ProcessorInfo $ProcessorInfo
     * @return ArrayOfProcessorInfo
     */
    public function withProcessorInfo($ProcessorInfo)
    {
        $new = clone $this;
        $new->ProcessorInfo = $ProcessorInfo;

        return $new;
    }
}

