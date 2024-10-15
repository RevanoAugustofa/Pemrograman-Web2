# Jobsheet 2 

## TUGAS
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
    - Constructor ```__construct```: Method ini diatur untuk menginisialisasi properti saat objek baru dibuat.
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
![alt text](/src/img/classobject3-4.png)

# 2. Encaptulation <i>(pembungkusan)</i>

Encapsulation adalah teknik untuk menyembunyikan detail dari objek dan hanya membiarkan akses ke data melalui method. Menjadikan properti ```nama```, ```nim```, dan ```jurusan``` sebagai <b>private</b> dan menggunakan getter dan setter untuk mengaksesnya.

### Penjelasan Kode:
- Private: Properti yang tidak dapat diakses langsung dari luar class.
- Setter: Method untuk mengubah nilai dari properti.
- Getter: Method untuk mendapatkan nilai dari properti.

### a. Mengubah atribut dalam class Mahasiswa menjadi private.
```php
private $nama; 
private $nim; 
private $jurusan;
```
- Atribut $nama, $nim, dan $jurusan dideklarasikan sebagai private, artinya atribut ini hanya dapat diakses dan dimodifikasi dari dalam class Mahasiswa. Atribut ini tidak bisa langsung diakses dari luar class.

### b. membuat metode getter dan setter untuk atribut nama, nim, dan jurusan.
```php
public function setNama($nama) {
    $this->nama = $nama; // Mengatur nama
}
public function setNim($nim) {
    $this->nim = $nim; // Mengatur NIM
}
public function setJurusan($jurusan) {
    $this->jurusan = $jurusan; // Mengatur jurusan
}

public function getNama() {
    return $this->nama; // Mengembalikan nama
}
public function getNim() {
    return $this->nim; // Mengembalikan NIM
}
public function getJurusan() {
    return $this->jurusan; // Mengembalikan jurusan
}
```
- Setter
    - ```setNama($nama)```: Mengubah nilai atribut nama.
    - ```setNim($nim)```: Mengubah nilai atribut nim.
    - ```setJurusan($jurusan)```: Mengubah nilai atribut jurusan.

- Getter
    - ```getNama()```: Mengembalikan nilai dari atribut nama.
    - ```getNim()```: Mengembalikan nilai dari atribut nim.
    - ```getJurusan()```: Mengembalikan nilai dari atribut jurusan.

### c. Mendemonstrasikan akses ke atribut menggunakan metode getter dan setter.

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

```


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
Penggunaan class Mahasiswa:
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
![alt text](/src/img/encaptulation3-4.png)


# 3. Inheritance
### a. Membuat class Pengguna dengan atribut nama dan metode ```getNama()```.
```php
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
```
- Class Pengguna adalah class dasar yang berfungsi sebagai parent class. Class ini akan diwarisi oleh class lain, dalam hal ini class Dosen.
- protected ```$nama```: Atribut ini adalah variabel yang menyimpan nama pengguna. Aksesnya bersifat protected, yang berarti hanya bisa diakses oleh class itu sendiri dan class yang mewarisinya (class turunan).
- ```__construct($nama)```: Merupakan metode khusus yang akan dipanggil secara otomatis ketika objek dibuat. Di sini, nama pengguna akan diinisialisasi saat objek diinstansiasi.
- ```getNama()```: Sebuah getter untuk mengambil nilai dari properti nama. Method ini digunakan untuk mengembalikan nama pengguna yang telah diset melalui konstruktor
### b. Membuat class Dosen yang mewarisi class Pengguna dan menambah Atribut Matakuliah

```php
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
```
- Class Dosen menggunakan sintaks extends Pengguna, yang berarti class ini mewarisi semua properti dan metode dari class Pengguna. Dengan kata lain, Dosen adalah subclass dari Pengguna.
- private ```$mataKuliah```: Atribut ini menyimpan informasi mengenai mata kuliah yang diampu oleh dosen. Bersifat private, sehingga hanya dapat diakses dari dalam class Dosen sendiri.
- ```__construct($nama, $mataKuliah)```: Konstruktor ini menerima dua parameter, nama dan mataKuliah. Di dalamnya, terdapat ```parent::__construct($nama)``` yang bertujuan untuk memanggil konstruktor dari class induk (Pengguna) guna menginisialisasi properti nama.
Properti mataKuliah juga diinisialisasi di sini.
- ```getMataKuliah()```: Method ini berfungsi sebagai getter untuk mengambil nilai dari atribut mataKuliah.

### c. Instansiasi objek dari class Dosen dan tampilkan data dosen.

```php
$dosen1 = new Dosen("Arya Abu Hurairah", "Matematika"); 
```
- objek $dosen1 dibuat dari class Dosen dengan nama "Arya Abu Hurairah" dan mata kuliah "Matematika".
- Ketika objek ini dibuat, konstruktor class Dosen dipanggil, yang juga memanggil konstruktor dari class Pengguna untuk menginisialisasi nama
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
![alt text](/src/img/inheritance3-4.png)

# 4. polymorphism

### a. Membuat class Pengguna dengan metode ```aksesFitur()```.
```php
//class pengguna
class Pengguna {
    protected $nama; // Properti protected untuk nama

    public function __construct($nama) {
        $this->nama = $nama; // Mengatur nama
    }

    // Method akses fitur 
    public function aksesFitur() {
        echo "";
    }
}
```
- Method ```aksesFitur()``` di sini adalah method default yang akan di-override di class Mahasiswa dan Dosen. Dalam class Pengguna, method ini hanya mencetak kosong (" ")

### b. Implementasi ```aksesFitur()``` dengan cara berbeda di class Dosen dan Mahasiswa.

```php
class Mahasiswa extends Pengguna {

    // Meng-overwrite method aksesFitur dari class Pengguna
    public function aksesFitur() {
        echo "Melihat data Mahasiswa<br>";
    }
}


class Dosen extends Pengguna {
    private $mataKuliah;

    // Meng-overwrite method aksesFitur dari class Pengguna
    public function aksesFitur() {
        echo "Melihat data Dosen<br>";
    }
}
```
- Mahasiswa
    - Mahasiswa mewarisi class Pengguna dan menambahkan dua properti baru: nim dan jurusan, yang bersifat private.
    - Method ```aksesFitur()``` di-override untuk menampilkan teks khusus yang relevan dengan mahasiswa, yaitu "Melihat data Mahasiswa".
- Dosen
    - Dosen juga mewarisi class Pengguna dan menambahkan properti mataKuliah yang bersifat private.
    - Method ```aksesFitur()``` di-override untuk menampilkan teks khusus yang relevan dengan dosen, yaitu "Melihat data Dosen"

### c. Instansiasi objek dari class Dosen dan Mahasiswa, lalu panggil metode
```php
// Instansiasi objek Dosen
$dosen1 = new Dosen("Arya Abu Hurairah", "Matematika");

//menampilkan data dosen
echo "Nama Dosen: " . $dosen1->getNama() . "<br>";
echo "Mata Kuliah: " . $dosen1->getMataKuliah() . "<br>";

$dosen1->aksesFitur(); //Menampilkan akses fitur data Dosen

// Instansiasi objek Mahasiswa
$mahasiswa1 = new Mahasiswa("Arya Wiguna", 230201038, "Teknik Elektro");
//menampilkan data Mahasiswa
echo "Nama: " . $mahasiswa1->getNama() . "<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>";

$mahasiswa1->aksesFitur(); //Menampilkan akses fitur data Mahasiswa
```
- Memanggil method ```aksesFitur()``` untuk menampilkan pesan "Melihat data Mahasiswa", sesuai dengan implementasi method tersebut di class Mahasiswa.
- Memanggil method ```aksesFitur()``` untuk menampilkan pesan "Melihat data Dosen", sesuai dengan implementasi method tersebut di class Dosen.

## Implementasi <i></i> :
```php
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

    // Method untuk akses fitur
    public function aksesFitur() {
        echo "";
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

![alt text](/src/img/polymorphism3-4.png)

# 5. Abstraction
Abstraction adalah konsep yang memungkinkan kita untuk menyembunyikan detail implementasi dan hanya menampilkan fungsi penting dari sebuah objek.

### a. Membuat class abstrak ```Pengguna``` dengan metode abstrak ```aksesFitur()```.
Membuat abstrak class baru dengan nama Pengguna kodenya sebagai berikut:
```php
abstract class Pengguna {
    protected $nama;

    public function __construct($nama){
        $this->nama=$nama;
    }
    
    public function getNama(){
        return $this->nama;
    }

    abstract public function aksesFitur();
}
```
- ```abstract class Pengguna```: Mendefinisikan class abstrak yang tidak dapat diinstansiasi langsung.
```protected $nama```: Properti nama bersifat protected sehingga bisa diakses oleh class turunan.
```abstract public function aksesFitur()```: Method abstrak yang harus diimplementasikan di class turunan. Tidak memiliki implementasi di class abstrak ini.

### b. Mengimplementasikan Method ```aksesFitur()```
class ```Mahasiswa``` dan ```Dosen``` yang mewarisi ```Pengguna``` akan mengimplementasikan method ```aksesFitur()```.
```php
//class Dosen
class Dosen extends Pengguna {
     // Mengakses fitur dosen dari class Pengguna
    public function aksesFitur() {
        echo "Melihat data Dosen<br>";
    }
}



//class Mahasiswa
class Mahasiswa extends Pengguna{
    // Method untuk akses fitur
    public function aksesFitur() {
        echo "Melihat data Mahasiswa<br>";
    }
}
```
- class Mahasiswa extends Pengguna: Class Mahasiswa mewarisi class Pengguna.
    - ```aksesFitur()```: Mengimplementasikan method abstrak ```aksesFitur()``` dari class Pengguna, memberikan fitur yang bisa diakses oleh mahasiswa
- class Dosen extends Pengguna: Class Dosen mewarisi class Pengguna.
    - ```aksesFitur()```: Mengimplementasikan method abstrak ```aksesFitur()``` dengan menampilkan fitur yang bisa diakses oleh dosen.

### c. Memanggil metode ```aksesFitur()``` dari objek yang diinstansiasi.

mendemonstrasikan dengan membuat objek dari class Mahasiswa dan Dosen, lalu memanggil method ```aksesFitur()``` untuk masing-masing objek
```php
// Instansiasi objek Mahasiswa
$mahasiswa1 = new Mahasiswa("Arya Wiguna", 230201038, "Teknik Elektro");

// Menampilkan data mahasiswa
echo "Nama: " . $mahasiswa1->getNama() . "<br>";
echo "NIM: " . $mahasiswa1->getNim() . "<br>";
echo "Jurusan: " . $mahasiswa1->getJurusan() . "<br>";

// Mengakses fitur mahasiswa
$mahasiswa1->aksesFitur();

// Membuat objek Dosen
$dosen1 = new Dosen("Arya Abu Hurairah", "Matematika");

// Menampilkan nama dosen dan mata kuliah
echo "<hr>";
echo "Nama Dosen: " . $dosen1->getNama() . "<br>";
echo "Mata Kuliah: " . $dosen1->getMataKuliah() . "<br>";

// Mengakses fitur dosen
$dosen1->aksesFitur();
```
- Instansiasi Objek Mahasiswa: Membuat objek mahasiswa1 dengan nama "Arya Wiguna" dan NIM "230201038".
    - Pemanggilan ```aksesFitur()``` dari Mahasiswa: Method ini akan mencetak fitur yang bisa diakses oleh mahasiswa.
    - Instansiasi Objek Dosen: Membuat objek dosen1 dengan nama "Arya Abu Hurairah" dan mata kuliah "Matematika".
    - Pemanggilan ```aksesFitur()``` dari Dosen: Method ini akan mencetak fitur yang bisa diakses oleh dosen.

## Full Code :
```php
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
?>
```

## Hasil Output:
![alt text](/src/img/abstraction3-4.png)


