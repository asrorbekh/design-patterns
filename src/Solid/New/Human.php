<?php

declare(strict_types=1);

namespace Pattern\Solid\New;

use Pattern\Solid\New\Intfrs\Toilet;

class Human
{
    public function donePooping(Toilet $toilet)
    {
        $toilet->flush();
    }
}