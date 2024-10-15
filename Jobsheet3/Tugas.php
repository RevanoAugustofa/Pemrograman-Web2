<?php 

class Person{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getNama(){
        return $this->name;
    }

    public function getRole(){
        echo "";
    }

}



class Dosen extends Person{
    private $nidn;

    public function __construct($nidn,$name){
        parent::__construct($name);
        $this->nidn=$nidn;
    }

    public function getNama(){
        return $this->name;
    }

    public function getRole(){
        echo "Dosen";
    }

    public function setNama($name){
        $this->name=$name;
    }
}

class Mahasiswa extends Person{

    private $nim;

    public function __construct($nim,$name){
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function getNama(){
        return $this->name;
    }

    public function getRole(){
        echo "Mahasiswa";
    }
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