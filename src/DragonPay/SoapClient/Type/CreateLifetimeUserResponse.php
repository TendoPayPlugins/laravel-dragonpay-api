<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class CreateLifetimeUserResponse implements ResultInterface
{

    /**
     * @var string
     */
    private $CreateLifetimeUserResult;

    /**
     * @return string
     */
    public function getCreateLifetimeUserResult()
    {
        return $this->CreateLifetimeUserResult;
    }

    /**
     * @param string $CreateLifetimeUserResult
     * @return CreateLifetimeUserResponse
     */
    public function withCreateLifetimeUserResult($CreateLifetimeUserResult)
    {
        $new = clone $this;
        $new->CreateLifetimeUserResult = $CreateLifetimeUserResult;

        return $new;
    }


}

