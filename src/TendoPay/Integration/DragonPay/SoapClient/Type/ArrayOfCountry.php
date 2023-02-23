<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

class ArrayOfCountry
{
    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\Country
     */
    private $Country;

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

