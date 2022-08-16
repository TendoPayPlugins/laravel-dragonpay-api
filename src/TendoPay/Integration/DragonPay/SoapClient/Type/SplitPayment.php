<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SplitPayment implements RequestInterface
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
    private $refno;

    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfSplitPaymentDetails
     */
    private $details;

    /**
     * Constructor
     *
     * @var string $merchantId
     * @var string $password
     * @var string $refno
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfSplitPaymentDetails $details
     */
    public function __construct($merchantId, $password, $refno, $details)
    {
        $this->merchantId = $merchantId;
        $this->password = $password;
        $this->refno = $refno;
        $this->details = $details;
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
     * @return SplitPayment
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
     * @return SplitPayment
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
    public function getRefno()
    {
        return $this->refno;
    }

    /**
     * @param string $refno
     * @return SplitPayment
     */
    public function withRefno($refno)
    {
        $new = clone $this;
        $new->refno = $refno;

        return $new;
    }

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfSplitPaymentDetails
     */
    public function getDetails()
    {
        return $this->details;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfSplitPaymentDetails $details
     * @return SplitPayment
     */
    public function withDetails($details)
    {
        $new = clone $this;
        $new->details = $details;

        return $new;
    }
}

