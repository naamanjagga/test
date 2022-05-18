<?php

namespace MyApp\Models;

use Phalcon\Mvc\Model;

class Resourcemodel extends Model
{

    public $primaryKey = 'id';
    public $connection = false;
    public $table = '';
    public $db;

    public function load($column, $value)
    {
        $find = $this->find("$column = $value");
        return $find;
    }
    public function saveStudent($connection): bool
    {
        $array = explode(",", $connection);
        $inputarray = [
            'roll_no' => $array[0],
            'name' => $array[1],
            'address' => $array[2],
        ];
        $add = $this->assign(
            $inputarray,
            [
                'roll_no',
                'name',
                'address',
            ]
        );
        $success = $add->save();
        if ($success) {
            return true;
        } else {
            return false;
        }
    }
    public function saveTeacher(): bool
    {
    }

    public function deleted($column, $value): bool
    {
        $find = $this->find("$column = $value");
        $find->delete();
        return true;
    }


    // create required magic methods for achieving required features.
}
