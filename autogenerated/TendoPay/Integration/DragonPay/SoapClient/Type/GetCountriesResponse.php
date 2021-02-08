<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetCountriesResponse implements ResultInterface
{

    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfCountry
     */
    private $GetCountriesResult;

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfCountry
     */
    public function getGetCountriesResult()
    {
        return $this->GetCountriesResult;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfCountry
     * $GetCountriesResult
     * @return GetCountriesResponse
     */
    public function withGetCountriesResult($GetCountriesResult)
    {
        $new = clone $this;
        $new->GetCountriesResult = $GetCountriesResult;

        return $new;
    }


}

