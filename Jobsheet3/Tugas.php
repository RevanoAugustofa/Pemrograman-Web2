<?php 

class Person{
    private $name;

}



class Dosen extends Person{

}

class Mahasiswa extends Person{

}

abstract class jurnal{
    abstract public function cetak_jurnal();
}

class JurnalDosen extends jurnal{
    public function cetak_jurnal(){
        echo "Pengajuan jurnal Dosen";
    }
}

class JurnalMahasiswa extends jurnal{
    public function cetak_jurnal(){
        echo "Pengajuan jurnal Mahasiswa";
    }
}