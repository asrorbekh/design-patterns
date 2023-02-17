<?php

declare(strict_types=1);

namespace Pattern\Solid\Pdp\Modal;

use Pattern\Solid\Pdp\Interrfaces\MobileDev;

class Android implements MobileDev
{

    public function developerApp()
    {
        return "andr";
    }
}