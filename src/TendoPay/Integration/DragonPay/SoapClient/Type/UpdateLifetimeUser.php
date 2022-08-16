<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class UpdateLifetimeUser implements RequestInterface
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
     * @var string
     */
    private $status;

    /**
     * Constructor
     *
     * @var string $merchantId
     * @var string $password
     * @var string $lifetimeId
     * @var string $name
     * @var string $email
     * @var string $remarks
     * @var string $status
     */
    public function __construct($merchantId, $password, $lifetimeId, $name, $email, $remarks, $status)
    {
        $this->merchantId = $merchantId;
        $this->password = $password;
        $this->lifetimeId = $lifetimeId;
        $this->name = $name;
        $this->email = $email;
        $this->remarks = $remarks;
        $this->status = $status;
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
     * @return UpdateLifetimeUser
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
     * @return UpdateLifetimeUser
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
     * @return UpdateLifetimeUser
     */
    public function withLifetimeId($lifetimeId)
    {
        $new = clone $this;
        $new->lifetimeId = $lifetimeId;

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
     * @return UpdateLifetimeUser
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
     * @return UpdateLifetimeUser
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
     * @return UpdateLifetimeUser
     */
    public function withRemarks($remarks)
    {
        $new = clone $this;
        $new->remarks = $remarks;

        return $new;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return UpdateLifetimeUser
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }
}

