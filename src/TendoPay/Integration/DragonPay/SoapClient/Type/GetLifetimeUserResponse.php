<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\ResultInterface;

class GetLifetimeUserResponse implements ResultInterface
{
    /**
     * @var \TendoPay\Integration\DragonPay\SoapClient\Type\LifetimeUser
     */
    private $GetLifetimeUserResult;

    /**
     * @return \TendoPay\Integration\DragonPay\SoapClient\Type\LifetimeUser
     */
    public function getGetLifetimeUserResult()
    {
        return $this->GetLifetimeUserResult;
    }

    /**
     * @param \TendoPay\Integration\DragonPay\SoapClient\Type\LifetimeUser $GetLifetimeUserResult
     * @return GetLifetimeUserResponse
     */
    public function withGetLifetimeUserResult($GetLifetimeUserResult)
    {
        $new = clone $this;
        $new->GetLifetimeUserResult = $GetLifetimeUserResult;

        return $new;
    }
}

