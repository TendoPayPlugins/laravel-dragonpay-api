<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ArrayOfTransaction implements RequestInterface
{

    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\Transaction
     */
    private $Transaction;

    /**
     * Constructor
     *
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\Transaction $Transaction
     */
    public function __construct($Transaction)
    {
        $this->Transaction = $Transaction;
    }

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\Transaction
     */
    public function getTransaction()
    {
        return $this->Transaction;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\Transaction $Transaction
     * @return ArrayOfTransaction
     */
    public function withTransaction($Transaction)
    {
        $new = clone $this;
        $new->Transaction = $Transaction;

        return $new;
    }


}

