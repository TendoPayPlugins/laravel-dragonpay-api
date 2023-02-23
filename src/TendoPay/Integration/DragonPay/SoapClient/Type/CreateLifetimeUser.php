<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class CreateLifetimeUser implements RequestInterface
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
    private $prefix;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $remarks;

    /**
     * Constructor
     *
     * @var string $merchantId
     * @var string $password
     * @var string $prefix
     * @var string $name
     * @var string $email
     * @var string $remarks
     */
    public function __construct($merchantId, $password, $prefix, $name, $email, $remarks)
    {
        $this->merchantId = $merchantId;
        $this->password = $password;
        $this->prefix = $prefix;
        $this->name = $name;
        $this->email = $email;
        $this->remarks = $remarks;
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
     * @return CreateLifetimeUser
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
     * @return CreateLifetimeUser
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
    public function getPrefix()
    {
        return $this->prefix;
    }

    /**
     * @param string $prefix
     * @return CreateLifetimeUser
     */
    public function withPrefix($prefix)
    {
        $new = clone $this;
        $new->prefix = $prefix;

        return $new;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CreateLifetimeUser
     */
    public function withName($name)
    {
        $new = clone $this;
        $new->name = $name;

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
     * @return CreateLifetimeUser
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
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * @param string $remarks
     * @return CreateLifetimeUser
     */
    public function withRemarks($remarks)
    {
        $new = clone $this;
        $new->remarks = $remarks;

        return $new;
    }
}

