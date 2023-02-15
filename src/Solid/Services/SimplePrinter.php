<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

use Pattern\Solid\Components\Document;
use Pattern\Solid\Interfaces\IPrinter;

class SimplePrinter implements IPrinter
{
    public function print(Document $d){
        echo "Print document";
    }
}