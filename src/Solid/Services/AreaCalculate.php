<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

class AreaCalculate
{
    public function calculate(array $shapes): float|int
    {
        $area = [];
        foreach ($shapes as $shape) {
            $area[] = $shape->area();
        }

        return array_sum($area);
    }
}