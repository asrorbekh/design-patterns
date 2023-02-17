<?php

declare(strict_types=1);

namespace Pattern\Solid\Pdp\Modal;

use Pattern\Solid\Pdp\Interrfaces\ShapeInterface;

class AreaCalc
{
    public function calculateArea(ShapeInterface $shapes)
    {
        $area = [];
        foreach ($shapes as $shape){
            $area[] = $shape->area();
        }

        return $area;
    }
}