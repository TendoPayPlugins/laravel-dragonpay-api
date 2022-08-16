<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

class ArrayOfTransaction
{
    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\Transaction
     */
    private $Transaction;

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

