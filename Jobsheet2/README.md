## 1. Class dan Objek

Class adalah template yang digunakan untuk membuat objek. Contoh pada kasus ini, ```Mahasiswa``` adalah class yang digunakan untuk membuat objek mahasiswa.

Objek adalah instance dari class. Contoh objek adalah ```mahasiswa1``` yang berisi informasi seorang mahasiswa.

<b><h3>Fungsi class, Method dam Constructor :</h3></b> 

- Class Mahasiswa digunakan sebagai template untuk menyimpan data mahasiswa.
- Constructor digunakan untuk menginisialisasi data mahasiswa saat objek dibuat.
- Method tampilkanData() berfungsi untuk menampilkan data mahasiswa.


<h3>Penjelasan Kode: </h3>

- Class Mahasiswa:
  - Properti:
    - public ```$nama```: untuk menyimpan nama mahasiswa.
    - public ```$nim```: untuk menyimpan NIM (Nomor Induk Mahasiswa).
    - public ```$jurusan```: untuk menyimpan jurusan mahasiswa.
    - Constructor ```(__construct)```: Method ini diatur untuk menginisialisasi properti saat objek baru dibuat.
    - Method ```tampilkanData()```: Method ini mengembalikan informasi mahasiswa dalam format string.

## Implementasi <i>Class</i> :
```php
<?php
//mendefinisikan class mahasiswa
class Mahasiswa {

    // Deklarasi properti publik yang dapat diakses dari luar class
    public $nama;
    public $nim;
    public $jurusan;

    // Constructor untuk inisialisasi data mahasiswa
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Method untuk menampilkan data mahasiswa
    public function tampilkanData() {
        return "Nama: $this->nama<br> NIM: $this->nim<br> Jurusan: $this->jurusan.";
    }
}

```
## Implementasi <i>Objek</i> :

```php
// Membuat objek mahasiswa baru dengan nilai awal
$mahasiswa1 = new Mahasiswa("Revano Augustofa", 230102071, "Teknik Informatika");

// Menampilkan data mahasiswa
echo $mahasiswa1->tampilkanData();

?>
```

<b><h3>Hasil Output:</h3></b>
![alt text](image.png)

