<?php

// Mendefinisikan kelas abstrak Pengguna
abstract class Pengguna {
    // Properti untuk menyimpan nama pengguna
    protected $nama;

    // Constructor untuk menginisialisasi nama pengguna
    public function __construct($nama) {
        $this->nama = $nama;
    }
    
    // Method untuk mendapatkan nama pengguna
    public function getNama() {
        return $this->nama;
    }

    // Method abstrak yang harus diimplementasikan oleh kelas turunan
    abstract public function aksesFitur();
}

// Kelas Mahasiswa yang mewarisi Pengguna
class Mahasiswa extends Pengguna {
    // Properti untuk menyimpan NIM dan jurusan mahasiswa
    private $nim;
    private $jurusan;

    // Constructor untuk menginisialisasi nama, NIM, dan jurusan
    public function __construct($nama, $nim, $jurusan) {
        parent::__construct($nama); // Memanggil constructor dari kelas induk
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Method untuk mendapatkan NIM mahasiswa
    public function getNim() {
        return $this->nim;
    }

    // Method untuk mendapatkan jurusan mahasiswa
    public function getJurusan() {
        return $this->jurusan;
    }

    // Implementasi aksesFitur untuk kelas Mahasiswa
    public function aksesFitur() {
        echo "<i>Mahasiswa {$this->nama} dapat mengakses data Mahasiswa</i>.<br>";
    }
}

// Kelas Dosen yang mewarisi Pengguna
class Dosen extends Pengguna {
    // Properti untuk menyimpan mata kuliah dosen
    private $mataKuliah;

    // Constructor untuk menginisialisasi nama dan mata kuliah
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama); // Memanggil constructor dari kelas induk
        $this->mataKuliah = $mataKuliah;
    }

    // Method untuk mendapatkan mata kuliah dosen
    public function getMataKuliah() {
        return $this->mataKuliah;
    }

    // Implementasi aksesFitur untuk kelas Dosen
    public function aksesFitur() {
        echo "<i>Dosen {$this->nama} dapat mengakses data Dosen</i>.<br>";
    }
}

// Instansiasi objek dari kelas Mahasiswa
$mahasiswa = new Mahasiswa("Arya Wiguna", "230201038", "Teknik Elektro");
echo "Nama : " . $mahasiswa->getNama() . "<br>"; // Menampilkan nama mahasiswa
echo "NIM : " . $mahasiswa->getNim() . "<br>"; // Menampilkan NIM mahasiswa
echo "Jurusan : " . $mahasiswa->getJurusan() . "<br>"; // Menampilkan jurusan mahasiswa
$mahasiswa->aksesFitur(); // Memanggil metode aksesFitur untuk mahasiswa

echo "<hr>";

// Instansiasi objek dari kelas Dosen
$dosen = new Dosen("Arya Abu Hurairah", "Matematika");
echo "Nama : " . $dosen->getNama() . "<br>"; // Menampilkan nama dosen
echo "Mata Kuliah : " . $dosen->getMataKuliah() . "<br>"; // Menampilkan mata kuliah dosen
$dosen->aksesFitur(); // Memanggil metode aksesFitur untuk dosen
