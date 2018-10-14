<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ArrayOfCountry implements RequestInterface
{

    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\Country
     */
    private $Country;

    /**
     * Constructor
     *
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\Country $Country
     */
    public function __construct($Country)
    {
        $this->Country = $Country;
    }

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\Country
     */
    public function getCountry()
    {
        return $this->Country;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\Country $Country
     * @return ArrayOfCountry
     */
    public function withCountry($Country)
    {
        $new = clone $this;
        $new->Country = $Country;

        return $new;
    }


}

