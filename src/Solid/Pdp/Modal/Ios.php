<?php

declare(strict_types=1);

namespace Pattern\Solid\Pdp\Modal;

use Pattern\Solid\Pdp\Component\Serv;
use Pattern\Solid\Pdp\Interrfaces\MobileDev;

class Ios implements MobileDev
{


    public function developerApp()
    {
        return "Ios apps";

    }

}