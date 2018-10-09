<?php

namespace TendoPay\Integration\DragonPay\SoapClient\Type;

use Phpro\SoapClient\Type\RequestInterface;

class RefundStatus implements RequestInterface
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
     * Constructor
     *
     * @var int $result
     * @var string $message
     */
    public function __construct($result, $message)
    {
        $this->result = $result;
        $this->message = $message;
    }

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

