<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

class Transaction
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
    private $merchantId;

    /**
     * @var string
     */
    private $merchantTxnId;

    /**
     * @var float
     */
    private $amount;

    /**
     * @var string
     */
    private $currency;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $procId;

    /**
     * @var string
     */
    private $procMsg;

    /**
     * @var string
     */
    private $billerId;

    /**
     * @var \DateTimeInterface
     */
    private $settleDate;

    /**
     * @var string
     */
    private $param1;

    /**
     * @var string
     */
    private $param2;

    /**
     * @var string
     */
    private $mobileNo;

    /**
     * @var float
     */
    private $amountDue;

    /**
     * @var \DateTimeInterface
     */
    private $expiryDate;

    /**
     * @var float
     */
    private $fee;

    /**
     * @return string
     */
    public function getRefNo()
    {
        return $this->refNo;
    }

    /**
     * @param string $refNo
     * @return Transaction
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
     * @return Transaction
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
    public function getMerchantId()
    {
        return $this->merchantId;
    }

    /**
     * @param string $merchantId
     * @return Transaction
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
    public function getMerchantTxnId()
    {
        return $this->merchantTxnId;
    }

    /**
     * @param string $merchantTxnId
     * @return Transaction
     */
    public function withMerchantTxnId($merchantTxnId)
    {
        $new = clone $this;
        $new->merchantTxnId = $merchantTxnId;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param float $amount
     * @return Transaction
     */
    public function withAmount($amount)
    {
        $new = clone $this;
        $new->amount = $amount;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * @param string $currency
     * @return Transaction
     */
    public function withCurrency($currency)
    {
        $new = clone $this;
        $new->currency = $currency;

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
     * @return Transaction
     */
    public function withDescription($description)
    {
        $new = clone $this;
        $new->description = $description;

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
     * @return Transaction
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
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     * @return Transaction
     */
    public function withStatus($status)
    {
        $new = clone $this;
        $new->status = $status;

        return $new;
    }

    /**
     * @return string
     */
    public function getProcId()
    {
        return $this->procId;
    }

    /**
     * @param string $procId
     * @return Transaction
     */
    public function withProcId($procId)
    {
        $new = clone $this;
        $new->procId = $procId;

        return $new;
    }

    /**
     * @return string
     */
    public function getProcMsg()
    {
        return $this->procMsg;
    }

    /**
     * @param string $procMsg
     * @return Transaction
     */
    public function withProcMsg($procMsg)
    {
        $new = clone $this;
        $new->procMsg = $procMsg;

        return $new;
    }

    /**
     * @return string
     */
    public function getBillerId()
    {
        return $this->billerId;
    }

    /**
     * @param string $billerId
     * @return Transaction
     */
    public function withBillerId($billerId)
    {
        $new = clone $this;
        $new->billerId = $billerId;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getSettleDate()
    {
        return $this->settleDate;
    }

    /**
     * @param \DateTimeInterface $settleDate
     * @return Transaction
     */
    public function withSettleDate($settleDate)
    {
        $new = clone $this;
        $new->settleDate = $settleDate;

        return $new;
    }

    /**
     * @return string
     */
    public function getParam1()
    {
        return $this->param1;
    }

    /**
     * @param string $param1
     * @return Transaction
     */
    public function withParam1($param1)
    {
        $new = clone $this;
        $new->param1 = $param1;

        return $new;
    }

    /**
     * @return string
     */
    public function getParam2()
    {
        return $this->param2;
    }

    /**
     * @param string $param2
     * @return Transaction
     */
    public function withParam2($param2)
    {
        $new = clone $this;
        $new->param2 = $param2;

        return $new;
    }

    /**
     * @return string
     */
    public function getMobileNo()
    {
        return $this->mobileNo;
    }

    /**
     * @param string $mobileNo
     * @return Transaction
     */
    public function withMobileNo($mobileNo)
    {
        $new = clone $this;
        $new->mobileNo = $mobileNo;

        return $new;
    }

    /**
     * @return float
     */
    public function getAmountDue()
    {
        return $this->amountDue;
    }

    /**
     * @param float $amountDue
     * @return Transaction
     */
    public function withAmountDue($amountDue)
    {
        $new = clone $this;
        $new->amountDue = $amountDue;

        return $new;
    }

    /**
     * @return \DateTimeInterface
     */
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }

    /**
     * @param \DateTimeInterface $expiryDate
     * @return Transaction
     */
    public function withExpiryDate($expiryDate)
    {
        $new = clone $this;
        $new->expiryDate = $expiryDate;

        return $new;
    }

    /**
     * @return float
     */
    public function getFee()
    {
        return $this->fee;
    }

    /**
     * @param float $fee
     * @return Transaction
     */
    public function withFee($fee)
    {
        $new = clone $this;
        $new->fee = $fee;

        return $new;
    }
}

