<?php 
class Mahasiswa {
    // Deklarasi properti publik yang dapat diakses dari luar class
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk inisialisasi data mahasiswa
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;         // Inisialisasi properti nama
        $this->nim = $nim;           // Inisialisasi properti nim
        $this->jurusan = $jurusan;   // Inisialisasi properti jurusan
    }

    // Method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama: $this->nama<br> NIM: $this->nim<br> Jurusan: $this->jurusan.";
    }
}

// Membuat objek mahasiswa baru dengan nilai awal
$mahasiswa1 = new Mahasiswa("Revano Augustofa", 230102071, "Teknik Informatika");
// Menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();
