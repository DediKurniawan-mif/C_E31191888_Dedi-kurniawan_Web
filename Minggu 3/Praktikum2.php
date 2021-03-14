<?php
class Car {
    //private
    private $model;
    public function getModel()
    {
        return "The car model is " . $this->model;
    }

    //perbaikan 'menambahkan fungsi setter untuk mengakses Property dengan Visibility Private'
    public function setModel($model){
        $this->model = $model;
    }
}

$mercedes = new Car();

////akses property dari luar class.

// $mercedes->model = "Mercedes benz"; //jika mengakses dari luar kelas akan terjadi error

//perbaikan
$mercedes->setModel("Mercedes benz");

echo $mercedes->getModel();
