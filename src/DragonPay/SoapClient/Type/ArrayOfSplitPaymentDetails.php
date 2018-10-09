<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ArrayOfSplitPaymentDetails implements RequestInterface
{

    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\SplitPaymentDetails
     */
    private $SplitPaymentDetails;

    /**
     * Constructor
     *
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\SplitPaymentDetails
     * $SplitPaymentDetails
     */
    public function __construct($SplitPaymentDetails)
    {
        $this->SplitPaymentDetails = $SplitPaymentDetails;
    }

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\SplitPaymentDetails
     */
    public function getSplitPaymentDetails()
    {
        return $this->SplitPaymentDetails;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\SplitPaymentDetails
     * $SplitPaymentDetails
     * @return ArrayOfSplitPaymentDetails
     */
    public function withSplitPaymentDetails($SplitPaymentDetails)
    {
        $new = clone $this;
        $new->SplitPaymentDetails = $SplitPaymentDetails;

        return $new;
    }


}

