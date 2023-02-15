<?php

namespace Pattern\Solid\Test;

use Pattern\Solid\Services\Experience;
use PHPUnit\Framework\TestCase;

class ExperienceTest extends TestCase
{
    private Experience $experience;

    public function testChunkMethod(): void
    {
        $array = [1, 2, 3, 4, 5, 6, 7];
        $count = 3;

        $expected = [[1, 2, 3], [4, 5, 6], [7]];
        $actual = $this->experience->chunk($array, $count);

        $this->assertEquals($expected, $actual);
    }

    public function testChunkNewMethod(): void
    {
        $array = [1, 2, 3, 4, 5, 6, 7];
        $count = 3;

        $expected = [[1, 2, 3], [4, 5, 6], [7]];
        $actual = $this->experience->chunkNew($array, $count);

        $this->assertEquals($expected, $actual);
    }

    public function testMapMethod(): void
    {
        $array = [1, 2, 3, 4, 5, 6, 7];
        $count = 3;

        $expected = [[1, 2, 3], [4, 5, 6], [7]];
        $actual = $this->experience->map($array, $count);

        $this->assertEquals($expected, $actual);
    }

    protected function setUp(): void
    {
        $this->experience = new Experience();
    }

}
