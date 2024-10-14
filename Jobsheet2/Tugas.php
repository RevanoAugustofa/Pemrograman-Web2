<?php 
//mendefinisikan class mahasiswa
class Mahasiswa{

    private $nama;
    private $nim;
    private $jurusan;

    //membuat construct 
    public function __construct($nama, $nim,$jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //method setNama
    public function setNama($nama){
        $this->nama=$nama;
    }

    //method setNim
    public function setNim($nim){
        $this->nim=$nim;
    }

    //method setJurusan
    public function setJurusan($jurusan){
        $this->jurusan=$jurusan;
    }

    //method getNama
    public function getNama(){
        return $this->nama;
    }

    //method getNim
    public function getNim(){
        return $this->nim;
    }

    //method getJurusan
    public function getJurusan(){
        return $this->jurusan;
    }

    public function aksesFitur(){
        echo "Melihat data Mahasiswa<br>";
    }
}
//instansiasi objek 
$mahasiswa1=new Mahasiswa("","","");
//menampilkan objek
$mahasiswa1->setNama("Arya Wiguna");
$mahasiswa1->setNim(230201038);
$mahasiswa1->setJurusan("Teknik Elektro");

echo "Nama :".$mahasiswa1->getNama()."<br>";
echo "NIM :".$mahasiswa1->getNim()."<br>";
echo "Jurusan :".$mahasiswa1->getJurusan()."<br>";

$mahasiswa1->aksesFitur();

class Pengguna {
    protected $nama;

    public function __construct($nama){
        $this->nama=$nama;
    }
    
    public function getNama(){
        return $this->nama;
    }
}

 class Dosen extends Pengguna{
    private $mataKuliah;

    public function __construct($nama,$mataKuliah){
        parent::__construct($nama);
        $this->mataKuliah=$mataKuliah;
    }

    public function getmatakuliah(){
        return $this->mataKuliah;
    }

    public function aksesFitur(){
        echo "Melihat data dosen<br>";
    }
}
echo "<hr>";
$mahasiswa2 = new Dosen ("Arya Abu Hurairah", "Matematika");
echo $mahasiswa2->getNama()."<br>";
echo $mahasiswa2->getmataKuliah();
$mahasiswa2->aksesFitur();
