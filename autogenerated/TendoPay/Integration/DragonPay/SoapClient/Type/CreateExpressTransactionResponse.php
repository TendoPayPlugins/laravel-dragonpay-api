<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateExpressTransactionResponse implements ResultInterface
{

    /**
     * @var string
     */
    private $CreateExpressTransactionResult;

    /**
     * @return string
     */
    public function getCreateExpressTransactionResult()
    {
        return $this->CreateExpressTransactionResult;
    }

    /**
     * @param string $CreateExpressTransactionResult
     * @return CreateExpressTransactionResponse
     */
    public function withCreateExpressTransactionResult($CreateExpressTransactionResult)
    {
        $new = clone $this;
        $new->CreateExpressTransactionResult = $CreateExpressTransactionResult;

        return $new;
    }


}

