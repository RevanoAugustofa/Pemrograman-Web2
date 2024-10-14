# 1. Class dan Objek

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
![alt text](/img/image.png)

# 2. Encaptulation <i>(pembungkusan)</i>

Encapsulation adalah teknik untuk menyembunyikan detail dari objek dan hanya membiarkan akses ke data melalui method. Dalam langkah ini, kita akan menjadikan properti ```nama```, ```nim```, dan ```jurusan``` sebagai <b>private</b> dan menggunakan getter dan setter untuk mengaksesnya.

### Penjelasan Kode:
- Private: Properti yang tidak dapat diakses langsung dari luar class.
- Setter: Method untuk mengubah nilai dari properti.
- Getter: Method untuk mendapatkan nilai dari properti.

## Implementasi <i></i> :

```php
<?php
// Mendefinisikan class Mahasiswa dengan encapsulation
class Mahasiswa {
    private $nama; // Properti private untuk nama
    private $nim; // Properti private untuk NIM
    private $jurusan; // Properti private untuk jurusan

    // Konstruktor untuk inisialisasi properti
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    // Method untuk mengatur nama
    public function setNama($nama) {
        $this->nama = $nama; // Mengatur nama
    }

    // Method untuk mengatur NIM
    public function setNim($nim) {
        $this->nim = $nim; // Mengatur NIM
    }

    // Method untuk mengatur jurusan
    public function setJurusan($jurusan) {
        $this->jurusan = $jurusan; // Mengatur jurusan
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
}
```
```php
// Instansiasi objek Mahasiswa
$mahasiswa1 = new Mahasiswa("","","");
// Mengatur data mahasiswa
$mahasiswa1->setNama("Arya Wiguna");
$mahasiswa1->setNim(230201038);
$mahasiswa1->setJurusan("Teknik Elektro");

// Menampilkan data mahasiswa
echo "Nama: " . $mahasiswa1->getNama() . "<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>";
?>
```
### Hasil Output:
![alt text](/img/image-3.png)




# 3. Inheritance
## Implementasi <i></i> :
```php
<?php
// Class dasar untuk Pengguna
class Pengguna {
    protected $nama; // Properti protected untuk nama

    // Konstruktor untuk inisialisasi nama
    public function __construct($nama) {
        $this->nama = $nama; // Mengatur nama
    }

    // Method untuk mendapatkan nama
    public function getNama() {
        return $this->nama; // Mengembalikan nama
    }
}

// Class Dosen yang mewarisi dari Pengguna
class Dosen extends Pengguna {
    private $mataKuliah; // Properti private untuk mata kuliah

    // Konstruktor untuk inisialisasi nama dan mata kuliah
    public function __construct($nama, $mataKuliah) {
        parent::__construct($nama); // Memanggil constructor dari class Pengguna
        $this->mataKuliah = $mataKuliah; // Mengatur mata kuliah
    }

    // Method untuk mendapatkan mata kuliah
    public function getMataKuliah() {
        return $this->mataKuliah; // Mengembalikan mata kuliah
    }
}

// Membuat objek Dosen
$dosen1 = new Dosen("Arya Abu Hurairah", "Matematika");
// Menampilkan nama dosen dan mata kuliah
echo "Nama Dosen: " . $dosen1->getNama() . "<br>";
echo "Mata Kuliah: " . $dosen1->getMataKuliah() . "<br>";
?>

```
### Hasil Output:
![alt text](/img/image-2.png)

# 4. polymorphism
```php
<?php 
// Mendefinisikan class Mahasiswa
class Mahasiswa {
    private $nama; // Properti private untuk nama
    private $nim; // Properti private untuk NIM
    private $jurusan; // Properti private untuk jurusan

    // Konstruktor untuk inisialisasi
    public function __construct($nama, $nim, $jurusan) {
        $this->nama = $nama;
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
    public function aksesFitur() {
        echo "Melihat data Mahasiswa<br>";
    }
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
class Pengguna {
    protected $nama; // Properti protected untuk nama

    public function __construct($nama) {
        $this->nama = $nama; // Mengatur nama
    }

    public function getNama() {
        return $this->nama; // Mengembalikan nama
    }
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
?>
```
### Hasil Output:

![alt text](/img/image-1.png)

# 5. Abstraction
