<?php 

// Abstract class 'Person1' sebagai class dasar untuk menyimpan informasi dasar tentang seseorang (name).
abstract class Person1{
    private $name;

    // Konstruktor untuk menginisialisasi atribut 'name'.
    public function __construct($name){
        $this->name = $name;
    }

    // Getter untuk mendapatkan nilai 'name'.
    public function getNama(){
        return $this->name;
    }

    // Setter untuk mengubah nilai 'name'.
    public function setNama($name){
        $this->name = $name;
    }

    // Abstract method 'getRole' yang harus diimplementasikan oleh subclass.
    abstract public function getRole();
}


// Class 'Dosen' yang merupakan subclass dari 'Person1'. Menyimpan informasi tambahan berupa 'nidn'.
class Dosen extends Person1{
    private $nidn;

    // Konstruktor untuk menginisialisasi atribut 'name' (dari parent) dan 'nidn'.
    public function __construct($name,$nidn){
        parent::__construct($name);
        $this->nidn=$nidn;
    }

    // Getter untuk mendapatkan nilai 'nidn'.
    public function getNidn(){
        return $this->nidn;
    }

    // Implementasi dari abstract method 'getRole', mengembalikan peran sebagai 'Dosen'.
    public function getRole(){
        echo " Role : Dosen";
    }
}

// Class 'Mahasiswa' yang merupakan subclass dari 'Person1'. Menyimpan informasi tambahan berupa 'nim'.
class Mahasiswa extends Person1{
    private $nim;

    // Konstruktor untuk menginisialisasi atribut 'name' (dari parent) dan 'nim'.
    public function __construct($name,$nim){
        parent::__construct($name);
        $this->nim = $nim;
    }

    // Getter untuk mendapatkan nilai 'nim'.
    public function getNim(){
        return $this->nim;
    }

    // Implementasi dari abstract method 'getRole', mengembalikan peran sebagai 'Mahasiswa'.
    public function getRole(){
        echo "Role : Mahasiswa";
    }
}

// Abstract class 'jurnal' untuk mencetak jurnal. Method abstract harus diimplementasikan di subclass.
abstract class jurnal{
    abstract public function cetak_jurnal();
}

// Subclass 'JurnalDosen' yang mengimplementasikan method cetak_jurnal khusus untuk Dosen.
class JurnalDosen extends jurnal{
    public function cetak_jurnal(){
        echo "Pengajuan jurnal Dosen";
    }
}

// Subclass 'JurnalMahasiswa' yang mengimplementasikan method cetak_jurnal khusus untuk Mahasiswa.
class JurnalMahasiswa extends jurnal{
    public function cetak_jurnal(){
        echo "Pengajuan jurnal Mahasiswa";
    }
}

// Membuat objek Dosen dengan nama "Raharjo" dan nidn "123456".
$dosen = new Dosen("Raharjo","123456");

// Mengubah nama dosen menjadi "Medikar".
$dosen->setNama("Medikar");

// Menampilkan peran dosen, nama dosen, dan NIDN.
echo $dosen->getRole()."<br>";
echo "Nama : ".$dosen->getNama()."<br>";
echo "Nidn : ".$dosen->getNidn()."<br>";

// Membuat objek jurnal untuk dosen dan mencetak jurnal.
$jurnaldosen = new JurnalDosen();
$jurnaldosen->cetak_jurnal();

echo "<hr>";

// Membuat objek Mahasiswa dengan nama "Jordi" dan NIM "2345678".
$dosen =new Mahasiswa("Jordi","2345678");

// Mengubah nama mahasiswa menjadi "Josindo".
$dosen->setNama("Josindo");

// Menampilkan peran mahasiswa, nama mahasiswa, dan NIM.
echo $dosen->getRole()."<br>";
echo "Nama : ".$dosen->getNama()."<br>";
echo "Nim : ".$dosen->getNim()."<br>";

// Membuat objek jurnal untuk mahasiswa dan mencetak jurnal.
$jurnaldosen = new JurnalMahasiswa();
$jurnaldosen->cetak_jurnal();


