<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

class RefundStatus
{
    /**
     * @var int
     */
    private $result;

    /**
     * @var string
     */
    private $message;

    /**
     * @return int
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param int $result
     * @return RefundStatus
     */
    public function withResult($result)
    {
        $new = clone $this;
        $new->result = $result;

        return $new;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param string $message
     * @return RefundStatus
     */
    public function withMessage($message)
    {
        $new = clone $this;
        $new->message = $message;

        return $new;
    }
}

