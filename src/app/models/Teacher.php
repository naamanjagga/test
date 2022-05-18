<?php 
namespace MyApp\Models;

use Phalcon\Mvc\Model;
Class Teacher extends Resourcemodel {

	public $table = 'teacher';
	public $primaryKey = 'id';
	public $connection = false;
	public function onConstruct($connection){
		$this->connection = $connection;
	}
    public function __set($name, $value)
    {
        $name = $value;

        return $name;
    }
}