<?php 
// Mendefinisikan class Mahasiswa
class Mahasiswa extends Pengguna{

    private $nim; // Properti private untuk NIM
    private $jurusan; // Properti private untuk jurusan

    // Konstruktor untuk inisialisasi
    public function __construct($nama, $nim, $jurusan) {
        parent::__construct($nama); // Memanggil constructor dari class Pengguna
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Method untuk mendapatkan nama
    public function getNama() {
        return $this->nama; // Mengembalikan nama
    }

    // Method untuk mendapatkan NIM
    public function getNim() {
        return $this->nim; // Mengembalikan NIM
    }

    // Method untuk mendapatkan jurusan
    public function getJurusan() {
        return $this->jurusan; // Mengembalikan jurusan
    }

    // Method untuk akses fitur
    
    // public function aksesFitur() {
    //     echo "Melihat data Mahasiswa<br>";
    // }
}

// Instansiasi objek Mahasiswa
$mahasiswa1 = new Mahasiswa("Arya Wiguna", 230201038, "Teknik Elektro");

// Menampilkan data mahasiswa
echo "Nama: " . $mahasiswa1->getNama() . "<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>";

// Mengakses fitur mahasiswa
$mahasiswa1->aksesFitur();

// Class Pengguna
abstract class Pengguna {
    protected $nama; // Properti protected untuk nama

    public function __construct($nama) {
        $this->nama = $nama; // Mengatur nama
    }

    public function getNama() {
        return $this->nama; // Mengembalikan nama
    }

    // Method untuk akses fitur
    abstract public function aksesFitur();
}

// Class Dosen yang mewarisi dari Pengguna
class Dosen extends Pengguna {
    private $mataKuliah; // Properti private untuk mata kuliah

    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama); // Memanggil constructor dari class Pengguna
        $this->mataKuliah = $mataKuliah; // Mengatur mata kuliah
    }

    public function getMataKuliah() {
        return $this->mataKuliah; // Mengembalikan mata kuliah
    }

    public function aksesFitur() {
        echo "Melihat data Dosen<br>"; // Mengakses fitur dosen
    }
}

// Membuat objek Dosen
$dosen1 = new Dosen("Arya Abu Hurairah", "Matematika");
// Menampilkan nama dosen dan mata kuliah
echo "<hr>";
echo "Nama Dosen: " . $dosen1->getNama() . "<br>";
echo "Mata Kuliah: " . $dosen1->getMataKuliah() . "<br>";
// Mengakses fitur dosen
$dosen1->aksesFitur();