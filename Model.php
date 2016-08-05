<?php
class Model
{
    private $attributes = [];
    protected static $table;

    public function __set($name, $value)
    {
        $this->attributes[$name] = $value;
    }

    public function __get($name)
    {
        if (!array_key_exists($name, $this->attributes)) {
            echo "Key does not exist.";
        }
        return $this->attributes[$name];
    }

    public static function getTableName() {
        return static::$table;
    }
}

$model = new Model;
$model->name = "TJ";
var_dump($model);