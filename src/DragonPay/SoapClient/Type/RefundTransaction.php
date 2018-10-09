<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RefundTransaction implements RequestInterface
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
     * @var string
     */
    private $refNo;

    /**
     * @var float
     */
    private $amount;

    /**
     * Constructor
     *
     * @var string $merchantId
     * @var string $password
     * @var string $refNo
     * @var float $amount
     */
    public function __construct($merchantId, $password, $refNo, $amount)
    {
        $this->merchantId = $merchantId;
        $this->password = $password;
        $this->refNo = $refNo;
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
     * @return RefundTransaction
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
     * @return RefundTransaction
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    /**
     * @return string
     */
    public function getRefNo()
    {
        return $this->refNo;
    }

    /**
     * @param string $refNo
     * @return RefundTransaction
     */
    public function withRefNo($refNo)
    {
        $new = clone $this;
        $new->refNo = $refNo;

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
     * @return RefundTransaction
     */
    public function withAmount($amount)
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }


}

