<?php 

//Menambah atribut dan metode
class Buku {
    public $judul;
    public $penulis;

    public function __construct($judul,$penulis){
        $this->judul = $judul;
        $this->penulis = $penulis;
    }

    public function tampilkanInfo(){
        return "Buku : $this->judul, Ditulis oleh $this->penulis.";
    }
}
$buku1 = new Buku("Pemograman PHP","John Doe");
echo $buku1->tampilkanInfo();