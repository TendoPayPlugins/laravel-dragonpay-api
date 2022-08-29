<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

class ProcessorInfo
{
    /**
     * @var string
     */
    private $procId;

    /**
     * @var string
     */
    private $shortName;

    /**
     * @var string
     */
    private $longName;

    /**
     * @var string
     */
    private $logo;

    /**
     * @var string
     */
    private $currencies;

    /**
     * @var string
     */
    private $url;

    /**
     * @var bool
     */
    private $realTime;

    /**
     * @var string
     */
    private $pwd;

    /**
     * @var string
     */
    private $defaultBillerId;

    /**
     * @var bool
     */
    private $hasTxnPwd;

    /**
     * @var bool
     */
    private $hasManualEnrollment;

    /**
     * @var int
     */
    private $type;

    /**
     * @var string
     */
    private $status;

    /**
     * @var string
     */
    private $remarks;

    /**
     * @var string
     */
    private $dayOfWeek;

    /**
     * @var string
     */
    private $startTime;

    /**
     * @var string
     */
    private $endTime;

    /**
     * @var float
     */
    private $minAmount;

    /**
     * @var float
     */
    private $maxAmount;

    /**
     * @var bool
     */
    private $mustRedirect;

    /**
     * @var float
     */
    private $surcharge;

    /**
     * @var bool
     */
    private $hasAltRefNo;

    /**
     * @var float
     */
    private $cost;

    /**
     * @var bool
     */
    private $hasSettlement;

    /**
     * @return string
     */
    public function getProcId()
    {
        return $this->procId;
    }

    /**
     * @param string $procId
     * @return ProcessorInfo
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
    public function getShortName()
    {
        return $this->shortName;
    }

    /**
     * @param string $shortName
     * @return ProcessorInfo
     */
    public function withShortName($shortName)
    {
        $new = clone $this;
        $new->shortName = $shortName;

        return $new;
    }

    /**
     * @return string
     */
    public function getLongName()
    {
        return $this->longName;
    }

    /**
     * @param string $longName
     * @return ProcessorInfo
     */
    public function withLongName($longName)
    {
        $new = clone $this;
        $new->longName = $longName;

        return $new;
    }

    /**
     * @return string
     */
    public function getLogo()
    {
        return $this->logo;
    }

    /**
     * @param string $logo
     * @return ProcessorInfo
     */
    public function withLogo($logo)
    {
        $new = clone $this;
        $new->logo = $logo;

        return $new;
    }

    /**
     * @return string
     */
    public function getCurrencies()
    {
        return $this->currencies;
    }

    /**
     * @param string $currencies
     * @return ProcessorInfo
     */
    public function withCurrencies($currencies)
    {
        $new = clone $this;
        $new->currencies = $currencies;

        return $new;
    }

    /**
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param string $url
     * @return ProcessorInfo
     */
    public function withUrl($url)
    {
        $new = clone $this;
        $new->url = $url;

        return $new;
    }

    /**
     * @return bool
     */
    public function getRealTime()
    {
        return $this->realTime;
    }

    /**
     * @param bool $realTime
     * @return ProcessorInfo
     */
    public function withRealTime($realTime)
    {
        $new = clone $this;
        $new->realTime = $realTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @param string $pwd
     * @return ProcessorInfo
     */
    public function withPwd($pwd)
    {
        $new = clone $this;
        $new->pwd = $pwd;

        return $new;
    }

    /**
     * @return string
     */
    public function getDefaultBillerId()
    {
        return $this->defaultBillerId;
    }

    /**
     * @param string $defaultBillerId
     * @return ProcessorInfo
     */
    public function withDefaultBillerId($defaultBillerId)
    {
        $new = clone $this;
        $new->defaultBillerId = $defaultBillerId;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasTxnPwd()
    {
        return $this->hasTxnPwd;
    }

    /**
     * @param bool $hasTxnPwd
     * @return ProcessorInfo
     */
    public function withHasTxnPwd($hasTxnPwd)
    {
        $new = clone $this;
        $new->hasTxnPwd = $hasTxnPwd;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasManualEnrollment()
    {
        return $this->hasManualEnrollment;
    }

    /**
     * @param bool $hasManualEnrollment
     * @return ProcessorInfo
     */
    public function withHasManualEnrollment($hasManualEnrollment)
    {
        $new = clone $this;
        $new->hasManualEnrollment = $hasManualEnrollment;

        return $new;
    }

    /**
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param int $type
     * @return ProcessorInfo
     */
    public function withType($type)
    {
        $new = clone $this;
        $new->type = $type;

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
     * @return ProcessorInfo
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
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * @param string $remarks
     * @return ProcessorInfo
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
    public function getDayOfWeek()
    {
        return $this->dayOfWeek;
    }

    /**
     * @param string $dayOfWeek
     * @return ProcessorInfo
     */
    public function withDayOfWeek($dayOfWeek)
    {
        $new = clone $this;
        $new->dayOfWeek = $dayOfWeek;

        return $new;
    }

    /**
     * @return string
     */
    public function getStartTime()
    {
        return $this->startTime;
    }

    /**
     * @param string $startTime
     * @return ProcessorInfo
     */
    public function withStartTime($startTime)
    {
        $new = clone $this;
        $new->startTime = $startTime;

        return $new;
    }

    /**
     * @return string
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @param string $endTime
     * @return ProcessorInfo
     */
    public function withEndTime($endTime)
    {
        $new = clone $this;
        $new->endTime = $endTime;

        return $new;
    }

    /**
     * @return float
     */
    public function getMinAmount()
    {
        return $this->minAmount;
    }

    /**
     * @param float $minAmount
     * @return ProcessorInfo
     */
    public function withMinAmount($minAmount)
    {
        $new = clone $this;
        $new->minAmount = $minAmount;

        return $new;
    }

    /**
     * @return float
     */
    public function getMaxAmount()
    {
        return $this->maxAmount;
    }

    /**
     * @param float $maxAmount
     * @return ProcessorInfo
     */
    public function withMaxAmount($maxAmount)
    {
        $new = clone $this;
        $new->maxAmount = $maxAmount;

        return $new;
    }

    /**
     * @return bool
     */
    public function getMustRedirect()
    {
        return $this->mustRedirect;
    }

    /**
     * @param bool $mustRedirect
     * @return ProcessorInfo
     */
    public function withMustRedirect($mustRedirect)
    {
        $new = clone $this;
        $new->mustRedirect = $mustRedirect;

        return $new;
    }

    /**
     * @return float
     */
    public function getSurcharge()
    {
        return $this->surcharge;
    }

    /**
     * @param float $surcharge
     * @return ProcessorInfo
     */
    public function withSurcharge($surcharge)
    {
        $new = clone $this;
        $new->surcharge = $surcharge;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasAltRefNo()
    {
        return $this->hasAltRefNo;
    }

    /**
     * @param bool $hasAltRefNo
     * @return ProcessorInfo
     */
    public function withHasAltRefNo($hasAltRefNo)
    {
        $new = clone $this;
        $new->hasAltRefNo = $hasAltRefNo;

        return $new;
    }

    /**
     * @return float
     */
    public function getCost()
    {
        return $this->cost;
    }

    /**
     * @param float $cost
     * @return ProcessorInfo
     */
    public function withCost($cost)
    {
        $new = clone $this;
        $new->cost = $cost;

        return $new;
    }

    /**
     * @return bool
     */
    public function getHasSettlement()
    {
        return $this->hasSettlement;
    }

    /**
     * @param bool $hasSettlement
     * @return ProcessorInfo
     */
    public function withHasSettlement($hasSettlement)
    {
        $new = clone $this;
        $new->hasSettlement = $hasSettlement;

        return $new;
    }
}

