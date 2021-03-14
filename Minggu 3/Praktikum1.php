<?php
class Car {
    //private
    public $model;
    public function getModel()
    {
        return "The car model is " . $this->model;
    }
}

$mercedes = new Car();

////akses property dari luar class.
$mercedes->model = "Mercedes benz";

echo $mercedes->getModel();
