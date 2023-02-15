<?php

namespace Pattern\Solid\Test;

use Pattern\Solid\Services\AreaTester;
use Pattern\Solid\Services\Rectangle;
use PHPUnit\Framework\TestCase;

class AreaTesterTest extends TestCase
{
    public function testTestArea(): void
    {
        // Create a new Rectangle object
        $rectangle = new Rectangle();

        // Create a new AreaTester object and pass in the Rectangle object.
        $areaTester = new AreaTester($rectangle);

        // Test that the area of the rectangle is calculated correctly
        $this->assertEquals(200, $areaTester->testArea(10, 20));
    }
}
