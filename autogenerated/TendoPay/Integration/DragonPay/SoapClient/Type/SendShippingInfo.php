<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class SendShippingInfo implements RequestInterface
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
    private $middleName;

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
    private $barangay;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $province;

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
    private $landmark;

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
     * @var string $middleName
     * @var string $lastName
     * @var string $address1
     * @var string $address2
     * @var string $barangay
     * @var string $city
     * @var string $province
     * @var string $country
     * @var string $zipCode
     * @var string $landmark
     * @var string $telNo
     * @var string $email
     */
    public function __construct($merchantId, $merchantTxnId, $firstName, $middleName, $lastName, $address1, $address2, $barangay, $city, $province, $country, $zipCode, $landmark, $telNo, $email)
    {
        $this->merchantId = $merchantId;
        $this->merchantTxnId = $merchantTxnId;
        $this->firstName = $firstName;
        $this->middleName = $middleName;
        $this->lastName = $lastName;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->barangay = $barangay;
        $this->city = $city;
        $this->province = $province;
        $this->country = $country;
        $this->zipCode = $zipCode;
        $this->landmark = $landmark;
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
     * @return SendShippingInfo
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
     * @return SendShippingInfo
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
     * @return SendShippingInfo
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
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @param string $middleName
     * @return SendShippingInfo
     */
    public function withMiddleName($middleName)
    {
        $new = clone $this;
        $new->middleName = $middleName;

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
     * @return SendShippingInfo
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
     * @return SendShippingInfo
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
     * @return SendShippingInfo
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
    public function getBarangay()
    {
        return $this->barangay;
    }

    /**
     * @param string $barangay
     * @return SendShippingInfo
     */
    public function withBarangay($barangay)
    {
        $new = clone $this;
        $new->barangay = $barangay;

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
     * @return SendShippingInfo
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
    public function getProvince()
    {
        return $this->province;
    }

    /**
     * @param string $province
     * @return SendShippingInfo
     */
    public function withProvince($province)
    {
        $new = clone $this;
        $new->province = $province;

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
     * @return SendShippingInfo
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
     * @return SendShippingInfo
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
    public function getLandmark()
    {
        return $this->landmark;
    }

    /**
     * @param string $landmark
     * @return SendShippingInfo
     */
    public function withLandmark($landmark)
    {
        $new = clone $this;
        $new->landmark = $landmark;

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
     * @return SendShippingInfo
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
     * @return SendShippingInfo
     */
    public function withEmail($email)
    {
        $new = clone $this;
        $new->email = $email;

        return $new;
    }


}

