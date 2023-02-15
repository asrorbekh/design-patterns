<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

use DateTime;

class Shipment
{
    public int $deliveryTime = 4;

    public function calculateDeliveryDays(): DateTime
    {
        return new DateTime("now +$this->deliveryTime day");
    }
}