<?php

namespace Pattern\Solid\Interfaces;

interface LessonRepoInterface
{

    /**
     * @return array
     */
    public function getAll(): array;
}