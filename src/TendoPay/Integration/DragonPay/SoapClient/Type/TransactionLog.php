<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

class TransactionLog
{
    /**
     * @var string
     */
    private $refNo;

    /**
     * @var \DateTimeInterface
     */
    private $refDate;

    /**
     * @var string
     */
    private $description;

    /**
     * @return string
     */
    public function getRefNo()
    {
        return $this->refNo;
    }

    /**
     * @param string $refNo
     * @return TransactionLog
     */
    public function withRefNo($refNo)
    {
        $new = clone $this;
        $new->refNo = $refNo;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getRefDate()
    {
        return $this->refDate;
    }

    /**
     * @param \DateTimeInterface $refDate
     * @return TransactionLog
     */
    public function withRefDate($refDate)
    {
        $new = clone $this;
        $new->refDate = $refDate;

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
     * @return TransactionLog
     */
    public function withDescription($description)
    {
        $new = clone $this;
        $new->description = $description;

        return $new;
    }
}

