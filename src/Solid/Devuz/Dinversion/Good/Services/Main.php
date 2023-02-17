<?php

declare(strict_types=1);

namespace Pattern\Solid\Devuz\Dinversion\Good\Services;

use Pattern\Solid\Devuz\Dinversion\Good\Models\LedMonitor;
use Pattern\Solid\Devuz\Dinversion\Good\Models\SimpleKeyboard;
use Pattern\Solid\Devuz\Dinversion\Good\Models\SimpleMonitor;

class Main
{
    public function run(): void
    {
        $keyboard = new SimpleKeyboard();
        $monitorS = new SimpleMonitor();
        $monitorL = new LedMonitor();

        $pc = new PersonalComputer($monitorS, $keyboard);
        $pc->start();

        $ps = new PersonalComputer($monitorL, $keyboard);
        $ps->start();
    }
}