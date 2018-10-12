<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SplitPaymentDetails implements RequestInterface
{

    /**
     * @var string
     */
    private $merchantId;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $description;

    /**
     * Constructor
     *
     * @var string $merchantId
     * @var float $amount
     * @var string $description
     */
    public function __construct($merchantId, $amount, $description)
    {
        $this->merchantId = $merchantId;
        $this->amount = $amount;
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @param string $merchantId
     * @return SplitPaymentDetails
     */
    public function withMerchantId($merchantId)
    {
        $new = clone $this;
        $new->merchantId = $merchantId;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return SplitPaymentDetails
     */
    public function withAmount($amount)
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return SplitPaymentDetails
     */
    public function withDescription($description)
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }


}

