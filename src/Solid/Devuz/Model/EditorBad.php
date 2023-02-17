<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Model;

class EditorBad
{
    public function draw(ShapeBad $shapeBad)
    {
        if ($shapeBad instanceof RectangleBad) {
            return 'Rectangle';
        } elseif ($shapeBad instanceof CircleBad) {
            return 'Circle';
        } else {
            return 'Not supported';
        }
    }
}