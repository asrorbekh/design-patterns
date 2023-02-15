<?php

declare(strict_types=1);

namespace Pattern\Solid\Models;

use Pattern\Solid\Core\Model;
use Pattern\Solid\Interfaces\LogRepositoryInterface;

class Phones implements LogRepositoryInterface
{
    public static function getPhone(int $id)
    {
        $sql = "SELECT * FROM phones WHERE phones.id = :id";
        $data = [
            ":id" => $id
        ];

        $model = new Model();
        $model->query($sql, $data);

        return $model->record();
    }

    public static function getPhones()
    {
        $sql = "SELECT * FROM phones";

        $model = new Model();
        $model->query($sql);

        return $model->records();
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
    }
}