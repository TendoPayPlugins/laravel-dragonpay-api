<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetMerchantSettledTxns implements RequestInterface
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
     * @var \DateTimeInterface
     */
    private $dStart;

    /**
     * @var \DateTimeInterface
     */
    private $dEnd;

    /**
     * Constructor
     *
     * @var string $merchantId
     * @var string $password
     * @var \DateTimeInterface $dStart
     * @var \DateTimeInterface $dEnd
     */
    public function __construct($merchantId, $password, $dStart, $dEnd)
    {
        $this->merchantId = $merchantId;
        $this->password = $password;
        $this->dStart = $dStart;
        $this->dEnd = $dEnd;
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
     * @return GetMerchantSettledTxns
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
     * @return GetMerchantSettledTxns
     */
    public function withPassword($password)
    {
        $new = clone $this;
        $new->password = $password;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDStart()
    {
        return $this->dStart;
    }

    /**
     * @param \DateTimeInterface $dStart
     * @return GetMerchantSettledTxns
     */
    public function withDStart($dStart)
    {
        $new = clone $this;
        $new->dStart = $dStart;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getDEnd()
    {
        return $this->dEnd;
    }

    /**
     * @param \DateTimeInterface $dEnd
     * @return GetMerchantSettledTxns
     */
    public function withDEnd($dEnd)
    {
        $new = clone $this;
        $new->dEnd = $dEnd;

        return $new;
    }
}

