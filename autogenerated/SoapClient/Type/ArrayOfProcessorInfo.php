<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ArrayOfProcessorInfo implements RequestInterface
{

    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\ProcessorInfo
     */
    private $ProcessorInfo;

    /**
     * Constructor
     *
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\ProcessorInfo
     * $ProcessorInfo
     */
    public function __construct($ProcessorInfo)
    {
        $this->ProcessorInfo = $ProcessorInfo;
    }

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\ProcessorInfo
     */
    public function getProcessorInfo()
    {
        return $this->ProcessorInfo;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\ProcessorInfo
     * $ProcessorInfo
     * @return ArrayOfProcessorInfo
     */
    public function withProcessorInfo($ProcessorInfo)
    {
        $new = clone $this;
        $new->ProcessorInfo = $ProcessorInfo;

        return $new;
    }


}

