<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetTxnRefNo implements RequestInterface
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
    private $txnId;

    /**
     * Constructor
     *
     * @var string $merchantId
     * @var string $password
     * @var string $txnId
     */
    public function __construct($merchantId, $password, $txnId)
    {
        $this->merchantId = $merchantId;
        $this->password = $password;
        $this->txnId = $txnId;
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
     * @return GetTxnRefNo
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
     * @return GetTxnRefNo
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
    public function getTxnId()
    {
        return $this->txnId;
    }

    /**
     * @param string $txnId
     * @return GetTxnRefNo
     */
    public function withTxnId($txnId)
    {
        $new = clone $this;
        $new->txnId = $txnId;

        return $new;
    }
}

