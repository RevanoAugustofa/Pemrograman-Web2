<?php 
// Definisi kelas Mahasiswa
class Mahasiswa {
    // Atribut atau Properti
    public $nama;    // Menyimpan nama mahasiswa
    public $nim;     // Menyimpan Nomor Induk Mahasiswa (NIM)
    public $jurusan; // Menyimpan jurusan mahasiswa

    // Constructor
    public function __construct($nama, $nim, $jurusan){
        // Menginisialisasi properti dengan nilai yang diberikan saat objek dibuat
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Method untuk menampilkan data mahasiswa
    public function tampilkanData(){
        // Mengembalikan string yang berisi informasi mahasiswa
        return "Hai Nama Saya : $this->nama.<br> NIM saya : $this->nim.<br> Jurusan : $this->jurusan ";
    }

    // Method untuk memperbarui jurusan mahasiswa
    public function updateJurusan($jurusan){
        // Mengubah nilai jurusan mahasiswa
        $this->jurusan = $jurusan;
    }

    // Method untuk memperbarui NIM mahasiswa
    public function setNim($nim){
        // Mengubah nilai NIM mahasiswa
        $this->nim = $nim;
    }
}

// Membuat objek dan menampilkannya
echo "<u>Data Awal</u><br>"; // Menampilkan header untuk data awal
$tampil = new Mahasiswa("Revano Augustofa", 230102071, "Teknik Informatika"); // Membuat objek Mahasiswa
echo $tampil->tampilkanData(); // Memanggil method tampilkanData untuk menampilkan data mahasiswa
echo "<br><br>"; // Menambah jarak antar bagian output

// Menampilkan data setelah diperbarui
echo "<u>Data yang sudah diperbarui</u><br>"; // Menampilkan header untuk data yang sudah diperbarui
$tampil->updateJurusan("Teknik Mesin"); // Memperbarui jurusan mahasiswa
$tampil->setNim("230102088"); // Memperbarui NIM mahasiswa
echo $tampil->tampilkanData(); // Memanggil method tampilkanData untuk menampilkan data mahasiswa yang telah diperbarui
