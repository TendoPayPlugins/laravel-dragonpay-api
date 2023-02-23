<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class GetLifetimeUser implements RequestInterface
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
    private $lifetimeId;

    /**
     * Constructor
     *
     * @var string $merchantId
     * @var string $password
     * @var string $lifetimeId
     */
    public function __construct($merchantId, $password, $lifetimeId)
    {
        $this->merchantId = $merchantId;
        $this->password = $password;
        $this->lifetimeId = $lifetimeId;
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
     * @return GetLifetimeUser
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
     * @return GetLifetimeUser
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
    public function getLifetimeId()
    {
        return $this->lifetimeId;
    }

    /**
     * @param string $lifetimeId
     * @return GetLifetimeUser
     */
    public function withLifetimeId($lifetimeId)
    {
        $new = clone $this;
        $new->lifetimeId = $lifetimeId;

        return $new;
    }
}

