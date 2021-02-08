<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CancelTransaction implements RequestInterface
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
     * Constructor
     *
     * @var string $merchantId
     * @var string $password
     * @var string $merchantTxnId
     */
    public function __construct($merchantId, $password, $merchantTxnId)
    {
        $this->merchantId = $merchantId;
        $this->password = $password;
        $this->merchantTxnId = $merchantTxnId;
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
     * @return CancelTransaction
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
     * @return CancelTransaction
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
     * @return CancelTransaction
     */
    public function withMerchantTxnId($merchantTxnId)
    {
        $new = clone $this;
        $new->merchantTxnId = $merchantTxnId;

        return $new;
    }


}

