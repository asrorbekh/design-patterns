<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

use Pattern\Solid\Components\Document;
use Pattern\Solid\Interfaces\IPrinter;
use Pattern\Solid\Interfaces\IScanner;
use Pattern\Solid\Interfaces\IXerox;

class AdvancePrinter implements IPrinter, IScanner, IXerox
{
    public function print(Document $d)
    {
        echo "Print document";
    }

    public function scan(Document $d)
    {
        echo "Scan document";
    }

    public function xerox(Document $d)
    {
        echo "Take xerox copy of document";
    }
}