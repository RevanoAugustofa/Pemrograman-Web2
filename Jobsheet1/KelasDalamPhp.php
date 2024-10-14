<?php

//Definisi kelas
class Mobil {
    //Atribut atau Properti
    public $merk;
    public $warna;

    //Constructor
    public function __construct($merk, $warna){
        $this->merk =$merk;
        $this->warna =$warna;
    }

    //Metode atau function
    public function deskripsi(){
        return "Mobil ini adalah $this->merk bewarna $this->warna";
    }
}
//Membuat objek
$mobil1 = new Mobil("Toyota", "Hitam");
echo $mobil1->deskripsi();

