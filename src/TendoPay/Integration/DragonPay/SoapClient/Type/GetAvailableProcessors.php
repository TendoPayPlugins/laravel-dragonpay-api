<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetAvailableProcessors implements RequestInterface
{
    /**
     * @var string
     */
    private $merchantId;

    /**
     * @var string
     */
    private $password;

    /**
     * @var float
     */
    private $amount;

    /**
     * Constructor
     *
     * @var string $merchantId
     * @var string $password
     * @var float $amount
     */
    public function __construct($merchantId, $password, $amount)
    {
        $this->merchantId = $merchantId;
        $this->password = $password;
        $this->amount = $amount;
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
     * @return GetAvailableProcessors
     */
    public function withMerchantId($merchantId)
    {
        $new = clone $this;
        $new->merchantId = $merchantId;

        return $new;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     * @return GetAvailableProcessors
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

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
     * @return GetAvailableProcessors
     */
    public function withAmount($amount)
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }
}

