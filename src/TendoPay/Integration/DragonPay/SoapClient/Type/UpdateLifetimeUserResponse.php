<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class UpdateLifetimeUserResponse implements ResultInterface
{
    /**
     * @var int
     */
    private $UpdateLifetimeUserResult;

    /**
     * @return int
     */
    public function getUpdateLifetimeUserResult()
    {
        return $this->UpdateLifetimeUserResult;
    }

    /**
     * @param int $UpdateLifetimeUserResult
     * @return UpdateLifetimeUserResponse
     */
    public function withUpdateLifetimeUserResult($UpdateLifetimeUserResult)
    {
        $new = clone $this;
        $new->UpdateLifetimeUserResult = $UpdateLifetimeUserResult;

        return $new;
    }
}

