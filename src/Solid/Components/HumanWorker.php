<?php

declare(strict_types=1);

namespace Pattern\Solid\Components;

use Pattern\Solid\Interfaces\ManageableInterface;
use Pattern\Solid\Interfaces\SleepableInterface;
use Pattern\Solid\Interfaces\WorkableInterface;

class HumanWorker implements WorkableInterface, SleepableInterface, ManageableInterface
{

    public function beManaged()
    {
        $this->work();
        $this->sleep();
    }

    public function work()
    {
        // TODO: Implement work() method.
    }

    public function sleep()
    {
        // TODO: Implement sleep() method.
    }
}