<?php 

class Mahasiswa {
    public $nama;
    public $nim;
    public $jurusan;

    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    public function tampilkanData(){
         return "Hai Nama Saya : $this->nama.<br> Npm saya : $this->nim.<br> Jurusan : $this->jurusan ";
    }

    //Method update jurusan
    public function updateJurusan($jurusan){
        $this->jurusan = $jurusan;
    }

    //Method setNim
    public function setNim($nim){
        $this->nim = $nim;
    }
}

//Membuat objek
echo "<u>Data Awal</u><br>";
$tampil = new Mahasiswa ("Revano Augustofa",230102071,"Teknik Informatika");
echo $tampil->tampilkanData();
echo "<br><br>";
echo "<u>Data yang sudah diperbarui</u><br>";
$tampil->updateJurusan("Teknik Mesin");
$tampil->setNim("230102088");
echo $tampil->tampilkanData();
