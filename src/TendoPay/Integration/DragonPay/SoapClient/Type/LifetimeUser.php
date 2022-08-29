<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

class LifetimeUser
{
    /**
     * @var string
     */
    private $userId;

    /**
     * @var string
     */
    private $merchantId;

    /**
     * @var string
     */
    private $custName;

    /**
     * @var string
     */
    private $custEmail;

    /**
     * @var string
     */
    private $remarks;

    /**
     * @var string
     */
    private $status;

    /**
     * @var \DateTimeInterface
     */
    private $created;

    /**
     * @return string
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param string $userId
     * @return LifetimeUser
     */
    public function withUserId($userId)
    {
        $new = clone $this;
        $new->userId = $userId;

        return $new;
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
     * @return LifetimeUser
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
    public function getCustName()
    {
        return $this->custName;
    }

    /**
     * @param string $custName
     * @return LifetimeUser
     */
    public function withCustName($custName)
    {
        $new = clone $this;
        $new->custName = $custName;

        return $new;
    }

    /**
     * @return string
     */
    public function getCustEmail()
    {
        return $this->custEmail;
    }

    /**
     * @param string $custEmail
     * @return LifetimeUser
     */
    public function withCustEmail($custEmail)
    {
        $new = clone $this;
        $new->custEmail = $custEmail;

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
     * @return LifetimeUser
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
     * @return LifetimeUser
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTimeInterface $created
     * @return LifetimeUser
     */
    public function withCreated($created)
    {
        $new = clone $this;
        $new->created = $created;

        return $new;
    }
}

