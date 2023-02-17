<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Dinversion;

class Main
{
    public function main(): void
    {
        $k = new SimpleKeyBoard();
        $m = new SimpleMonitor();

        $p = new PersonalComputer($k, $m);
        $p->start();
    }
}