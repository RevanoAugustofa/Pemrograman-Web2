<?php 

abstract class Person1{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getNama(){
        return $this->name;
    }

    public function setNama($name){
        $this->name = $name;
    }

     abstract public function getRole();

}



class Dosen extends Person1{
    private $nidn;

    public function __construct($nidn,$name){
        parent::__construct($name);
        $this->nidn=$nidn;
    }

    public function getNidn(){
        return $this->nidn;
    }

    public function stNidn($nidn){
        $this->nidn=$nidn;
    }

    public function getRole(){
        echo "Dosen";
    }

}

class Mahasiswa extends Person1{

    private $nim;

    public function __construct($nim,$name){
        parent::__construct($name);
        $this->nim = $nim;
    }

    public function getNim(){
        return $this->nim;
    }

    public function setNim($nim){
        $this->nim = $nim;
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