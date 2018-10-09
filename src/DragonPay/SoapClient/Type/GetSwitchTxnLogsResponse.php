<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetSwitchTxnLogsResponse implements ResultInterface
{

    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfTransactionLog
     */
    private $GetSwitchTxnLogsResult;

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfTransactionLog
     */
    public function getGetSwitchTxnLogsResult()
    {
        return $this->GetSwitchTxnLogsResult;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\ArrayOfTransactionLog
     * $GetSwitchTxnLogsResult
     * @return GetSwitchTxnLogsResponse
     */
    public function withGetSwitchTxnLogsResult($GetSwitchTxnLogsResult)
    {
        $new = clone $this;
        $new->GetSwitchTxnLogsResult = $GetSwitchTxnLogsResult;

        return $new;
    }


}

