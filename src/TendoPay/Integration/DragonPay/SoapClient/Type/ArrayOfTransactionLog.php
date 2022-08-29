<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

class ArrayOfTransactionLog
{
    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\TransactionLog
     */
    private $TransactionLog;

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\TransactionLog
     */
    public function getTransactionLog()
    {
        return $this->TransactionLog;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\TransactionLog $TransactionLog
     * @return ArrayOfTransactionLog
     */
    public function withTransactionLog($TransactionLog)
    {
        $new = clone $this;
        $new->TransactionLog = $TransactionLog;

        return $new;
    }
}

