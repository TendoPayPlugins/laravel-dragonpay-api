<?php

declare(strict_types=1);

namespace TendoPay\Integration\DragonPay\Event;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use TendoPay\Integration\DragonPay\Model\DragonPayUserLifetimeId;

class DragonPayUserLifetimeIdCreated
{
    use Dispatchable;
    use InteractsWithSockets;
    use SerializesModels;


    /**
     * @var DragonPayUserLifetimeId
     */
    private $lifetimeId;

    public function __construct(DragonPayUserLifetimeId $lifetimeId)
    {
        $this->lifetimeId = $lifetimeId;
    }

    public function lifetimeId(): DragonPayUserLifetimeId
    {
        return $this->lifetimeId;
    }
}