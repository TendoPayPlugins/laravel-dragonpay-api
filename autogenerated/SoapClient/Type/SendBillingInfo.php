<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendBillingInfo implements RequestInterface
{

    /**
     * @var string
     */
    private $merchantId;

    /**
     * @var string
     */
    private $merchantTxnId;

    /**
     * @var string
     */
    private $firstName;

    /**
     * @var string
     */
    private $lastName;

    /**
     * @var string
     */
    private $address1;

    /**
     * @var string
     */
    private $address2;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $state;

    /**
     * @var string
     */
    private $country;

    /**
     * @var string
     */
    private $zipCode;

    /**
     * @var string
     */
    private $telNo;

    /**
     * @var string
     */
    private $email;

    /**
     * Constructor
     *
     * @var string $merchantId
     * @var string $merchantTxnId
     * @var string $firstName
     * @var string $lastName
     * @var string $address1
     * @var string $address2
     * @var string $city
     * @var string $state
     * @var string $country
     * @var string $zipCode
     * @var string $telNo
     * @var string $email
     */
    public function __construct($merchantId, $merchantTxnId, $firstName, $lastName, $address1, $address2, $city, $state, $country, $zipCode, $telNo, $email)
    {
        $this->merchantId = $merchantId;
        $this->merchantTxnId = $merchantTxnId;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->city = $city;
        $this->state = $state;
        $this->country = $country;
        $this->zipCode = $zipCode;
        $this->telNo = $telNo;
        $this->email = $email;
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
     * @return SendBillingInfo
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
     * @return SendBillingInfo
     */
    public function withMerchantTxnId($merchantTxnId)
    {
        $new = clone $this;
        $new->merchantTxnId = $merchantTxnId;

        return $new;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     * @return SendBillingInfo
     */
    public function withFirstName($firstName)
    {
        $new = clone $this;
        $new->firstName = $firstName;

        return $new;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     * @return SendBillingInfo
     */
    public function withLastName($lastName)
    {
        $new = clone $this;
        $new->lastName = $lastName;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param string $address1
     * @return SendBillingInfo
     */
    public function withAddress1($address1)
    {
        $new = clone $this;
        $new->address1 = $address1;

        return $new;
    }

    /**
     * @return string
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param string $address2
     * @return SendBillingInfo
     */
    public function withAddress2($address2)
    {
        $new = clone $this;
        $new->address2 = $address2;

        return $new;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     * @return SendBillingInfo
     */
    public function withCity($city)
    {
        $new = clone $this;
        $new->city = $city;

        return $new;
    }

    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param string $state
     * @return SendBillingInfo
     */
    public function withState($state)
    {
        $new = clone $this;
        $new->state = $state;

        return $new;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     * @return SendBillingInfo
     */
    public function withCountry($country)
    {
        $new = clone $this;
        $new->country = $country;

        return $new;
    }

    /**
     * @return string
     */
    public function getZipCode()
    {
        return $this->zipCode;
    }

    /**
     * @param string $zipCode
     * @return SendBillingInfo
     */
    public function withZipCode($zipCode)
    {
        $new = clone $this;
        $new->zipCode = $zipCode;

        return $new;
    }

    /**
     * @return string
     */
    public function getTelNo()
    {
        return $this->telNo;
    }

    /**
     * @param string $telNo
     * @return SendBillingInfo
     */
    public function withTelNo($telNo)
    {
        $new = clone $this;
        $new->telNo = $telNo;

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
     * @return SendBillingInfo
     */
    public function withEmail($email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }


}

