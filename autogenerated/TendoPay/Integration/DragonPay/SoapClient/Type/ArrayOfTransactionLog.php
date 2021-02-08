<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class ArrayOfTransactionLog implements RequestInterface
{

    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\TransactionLog
     */
    private $TransactionLog;

    /**
     * Constructor
     *
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\TransactionLog
     * $TransactionLog
     */
    public function __construct($TransactionLog)
    {
        $this->TransactionLog = $TransactionLog;
    }

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\TransactionLog
     */
    public function getTransactionLog()
    {
        return $this->TransactionLog;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\TransactionLog
     * $TransactionLog
     * @return ArrayOfTransactionLog
     */
    public function withTransactionLog($TransactionLog)
    {
        $new = clone $this;
        $new->TransactionLog = $TransactionLog;

        return $new;
    }


}

