<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CancelRecurringTransaction implements RequestInterface
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
     * Constructor
     *
     * @var string $merchantId
     * @var string $password
     * @var string $refNo
     */
    public function __construct($merchantId, $password, $refNo)
    {
        $this->merchantId = $merchantId;
        $this->password = $password;
        $this->refNo = $refNo;
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
     * @return CancelRecurringTransaction
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
     * @return CancelRecurringTransaction
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
     * @return CancelRecurringTransaction
     */
    public function withRefNo($refNo)
    {
        $new = clone $this;
        $new->refNo = $refNo;

        return $new;
    }
}

