<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class TransactionLog implements RequestInterface
{

    /**
     * @var string
     */
    private $refNo;

    /**
     * @var \DateTime
     */
    private $refDate;

    /**
     * @var string
     */
    private $description;

    /**
     * Constructor
     *
     * @var string $refNo
     * @var \DateTime $refDate
     * @var string $description
     */
    public function __construct($refNo, $refDate, $description)
    {
        $this->refNo = $refNo;
        $this->refDate = $refDate;
        $this->description = $description;
    }

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
     * @return \DateTime
     */
    public function getRefDate()
    {
        return $this->refDate;
    }

    /**
     * @param \DateTime $refDate
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

