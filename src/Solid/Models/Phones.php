<?php

declare(strict_types=1);

namespace Pattern\Solid\Models;

use Pattern\Solid\Core\Model;
use Pattern\Solid\Interfaces\LogRepositoryInterface;

class Phones implements LogRepositoryInterface
{
    public static function getById(int $id)
    {
        $sql = "SELECT * FROM phones WHERE phones.id = :id";
        $data = [
            ":id" => $id
        ];

        $model = new Model();
        $model->query($sql, $data);

        return $model->record();
    }

    public static function getAll()
    {
        $sql = "SELECT * FROM phones";

        $model = new Model();
        $model->query($sql);

        return $model->records();
    }
}