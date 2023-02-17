<?php

declare(strict_types=1);

namespace Pattern\Solid\New;

use Pattern\Solid\New\Intfrs\Toilet;

class OrangeToilet implements Toilet
{

    public function flush()
    {
        echo "d";
    }
}