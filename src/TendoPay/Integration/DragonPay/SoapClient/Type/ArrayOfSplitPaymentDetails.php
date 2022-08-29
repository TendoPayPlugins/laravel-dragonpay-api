<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

class ArrayOfSplitPaymentDetails
{
    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\SplitPaymentDetails
     */
    private $SplitPaymentDetails;

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\SplitPaymentDetails
     */
    public function getSplitPaymentDetails()
    {
        return $this->SplitPaymentDetails;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\SplitPaymentDetails $SplitPaymentDetails
     * @return ArrayOfSplitPaymentDetails
     */
    public function withSplitPaymentDetails($SplitPaymentDetails)
    {
        $new = clone $this;
        $new->SplitPaymentDetails = $SplitPaymentDetails;

        return $new;
    }
}

