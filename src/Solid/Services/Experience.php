<?php

declare(strict_types=1);

namespace Pattern\Solid\Services;

class Experience
{
    public function chunk(array $array, int $count): array
    {
        $results = [];
        foreach ($array as $index => $item) {
            $results[floor($index / $count)] [] = $item;
        }

        return $results;
    }

    public function chunkNew(array $array, int $count): array
    {

        $index = 0;

        return array_reduce($array, static function ($carry, $val) use (&$index, &$count) {
            $carry[floor($index / $count)][] = $val;

            $index++;

            return $carry;
        }, []);

    }

    public function map(array $array, $count): array
    {
        return array_filter(array_map(static fn($val) => array_slice($array, array_search($val, $array, true) * $count, $count),
            $array));
    }
}