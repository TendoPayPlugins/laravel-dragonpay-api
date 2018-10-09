<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CancelTransactionResponse implements ResultInterface
{

    /**
     * @var int
     */
    private $CancelTransactionResult;

    /**
     * @return int
     */
    public function getCancelTransactionResult()
    {
        return $this->CancelTransactionResult;
    }

    /**
     * @param int $CancelTransactionResult
     * @return CancelTransactionResponse
     */
    public function withCancelTransactionResult($CancelTransactionResult)
    {
        $new = clone $this;
        $new->CancelTransactionResult = $CancelTransactionResult;

        return $new;
    }


}

