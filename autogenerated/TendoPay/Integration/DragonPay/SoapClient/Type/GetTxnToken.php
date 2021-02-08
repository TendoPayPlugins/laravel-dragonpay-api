<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetTxnToken implements RequestInterface
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
    private $merchantTxnId;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $ccy;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $param1;

    /**
     * @var string
     */
    private $param2;

    /**
     * Constructor
     *
     * @var string $merchantId
     * @var string $password
     * @var string $merchantTxnId
     * @var float $amount
     * @var string $ccy
     * @var string $description
     * @var string $email
     * @var string $param1
     * @var string $param2
     */
    public function __construct($merchantId, $password, $merchantTxnId, $amount, $ccy, $description, $email, $param1, $param2)
    {
        $this->merchantId = $merchantId;
        $this->password = $password;
        $this->merchantTxnId = $merchantTxnId;
        $this->amount = $amount;
        $this->ccy = $ccy;
        $this->description = $description;
        $this->email = $email;
        $this->param1 = $param1;
        $this->param2 = $param2;
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
     * @return GetTxnToken
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
     * @return GetTxnToken
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
    public function getMerchantTxnId()
    {
        return $this->merchantTxnId;
    }

    /**
     * @param string $merchantTxnId
     * @return GetTxnToken
     */
    public function withMerchantTxnId($merchantTxnId)
    {
        $new = clone $this;
        $new->merchantTxnId = $merchantTxnId;

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
     * @return GetTxnToken
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
    public function getCcy()
    {
        return $this->ccy;
    }

    /**
     * @param string $ccy
     * @return GetTxnToken
     */
    public function withCcy($ccy)
    {
        $new = clone $this;
        $new->ccy = $ccy;

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
     * @return GetTxnToken
     */
    public function withDescription($description)
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return GetTxnToken
     */
    public function withEmail($email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }

    /**
     * @return string
     */
    public function getParam1()
    {
        return $this->param1;
    }

    /**
     * @param string $param1
     * @return GetTxnToken
     */
    public function withParam1($param1)
    {
        $new = clone $this;
        $new->param1 = $param1;

        return $new;
    }

    /**
     * @return string
     */
    public function getParam2()
    {
        return $this->param2;
    }

    /**
     * @param string $param2
     * @return GetTxnToken
     */
    public function withParam2($param2)
    {
        $new = clone $this;
        $new->param2 = $param2;

        return $new;
    }


}

