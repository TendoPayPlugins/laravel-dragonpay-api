<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CancelRecurringTransactionResponse implements ResultInterface
{
    /**
     * @var int
     */
    private $CancelRecurringTransactionResult;

    /**
     * @return int
     */
    public function getCancelRecurringTransactionResult()
    {
        return $this->CancelRecurringTransactionResult;
    }

    /**
     * @param int $CancelRecurringTransactionResult
     * @return CancelRecurringTransactionResponse
     */
    public function withCancelRecurringTransactionResult($CancelRecurringTransactionResult)
    {
        $new = clone $this;
        $new->CancelRecurringTransactionResult = $CancelRecurringTransactionResult;

        return $new;
    }
}

