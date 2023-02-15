<?php

namespace Pattern\Solid\Interfaces;

use Pattern\Solid\Components\Document;

interface IScanner
{
    public function scan(Document $d);

}