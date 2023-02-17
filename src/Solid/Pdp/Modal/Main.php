<?php

declare(strict_types=1);

namespace Pattern\Solid\Pdp\Modal;

use Pattern\Solid\Pdp\Interrfaces\MobileDev;

class Main
{
    public function top(MobileDev $mobileDev)
    {
        $a = [];
        foreach ($mobileDev as $value) {
            $a[] = $value;
        }

        return $a;
    }
}