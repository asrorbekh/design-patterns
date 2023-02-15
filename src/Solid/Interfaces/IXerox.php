<?php

namespace Pattern\Solid\Interfaces;

use Pattern\Solid\Components\Document;

interface IXerox
{
    public function xerox(Document $d);

}