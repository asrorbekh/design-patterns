<?php

declare(strict_types=1);

namespace Pattern\Solid\New;

use Pattern\Solid\New\Interfaces\Shape;

class AreaCalculate
{
    public function calculate(Shape $shapes): float|int
    {
        $area = [];

        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}