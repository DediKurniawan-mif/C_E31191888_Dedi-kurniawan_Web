<?php

class Tablet {
    public $merk, $camera, $memory;

    public function getInfoProduk()
    {
        $str = "Merk : {$this->merk} <br> Camera : {$this->camera} Mp <br> Memory : {$this->memory} Gb";

        return $str;
    }

}

class Handphone extends Tablet {
    public $nama;

    public function __construct( $nama = "nama", $merk = "merk", $camera = 0, $memory = 0 ) {

        $this->nama = $nama;
        $this->merk = $merk;
        $this->camera = $camera;
        $this->memory = $memory;
    }

    public function getInfoProduk()
    {
        $str = "Nama : {$this->nama} <br>" . parent::getInfoProduk();
        return $str;
    }
}

$hp = new Handphone("Iphone 7", "Apple", 18, 64);
echo $hp->getInfoProduk();

/*
Output : 
Nama : Iphone 7
Merk : Apple
Camera : 18 Mp
Memory : 64 Gb
*/
