# Jobsheet 3 <hr>
## Instruksi Kerja 
 ## 1. Inheritance
```php
class Person{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

class Student extends Person{
    
    public $studentID;

    public function __construct($studentID,$name){
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID(){
        return $this->studentID;
    }
}
$tampil = new Student("2332938928","Ibnu Salsah");
echo "Nama : ".$tampil->getName()."<br>";
echo "ID : ".$tampil->getStudentID();
```

![alt text](/src/img/inheritance5-6.png)

 ## 2. Polymorphism

 ## 3. Encaptulation

 ## 4. Abstraction 


## TUGAS

1. Encapsulation<br>
Dalam kode ini, atribut ```name```, ```nidn```, dan ```nim``` disimpan dalam modifier private. Atribut-atribut tersebut tidak dapat diakses langsung dari luar class, hanya bisa diakses atau dimodifikasi melalui method getter dan setter seperti ```getNama()```, ```setNama()```, ```getNidn()```, dan ```getNim()```. Unutuk membantu melindungi data agar tidak dimanipulasi langsung secara tidak benar.

```php
private $name; // Atribut hanya bisa diakses dari dalam class
```
Untuk mengakses atau mengubahnya digunakan method seperti ini:
```php
public function getNama(){
    return $this->name;
}

public function setNama($name){
    $this->name = $name;
}
```
2. Inheritance (Pewarisan)<br>
Dalam kode ini, Dosen dan Mahasiswa adalah subclass yang mewarisi dari superclass Person1. Mereka mewarisi atribut name dan method ```getNama()```, ```setNama()```, serta method abstrak ```getRole()```, yang diimplementasikan secara berbeda dalam subclass.

```php
class Dosen extends Person1 {
    private $nidn;
    // Dosen mewarisi atribut dan method dari Person1
}

class Mahasiswa extends Person1 {
    private $nim;
    // Mahasiswa mewarisi atribut dan method dari Person1
}
```
Manfaat inheritance adalah menghindari pengulangan kode dan memungkinkan penggunaan kembali kode yang ada.

3. Polymorphism <br>
 Di sini, method ```getRole()``` adalah abstract method di Person1 yang diimplementasikan berbeda dalam class Dosen dan Mahasiswa. Kedua class tersebut memiliki method ```getRole()```, tetapi outputnya berbeda ketika dipanggil.

```php
public function getRole(){
    echo "Role : Dosen";
}

// Implementasi berbeda di Mahasiswa
public function getRole(){
    echo "Role : Mahasiswa";
}
```
meskipun method ```getRole()``` dipanggil dari objek Dosen dan Mahasiswa, hasilnya akan berbeda.

4. Abstraction<br>
Dalam kode ini, class Person1 adalah abstract class yang mengandung method abstract ```getRole()```. Abstract class tidak dapat diinstansiasi langsung dan membutuhkan subclass untuk mengimplementasikan method abstract tersebut. Ini memberikan kerangka dasar (template) yang harus diikuti oleh subclass seperti Dosen dan Mahasiswa.

```php
abstract class Person1 {
    // Method abstract
    abstract public function getRole();
}
```
class jurnal juga bersifat abstrak dengan method abstract ```cetak_jurnal()```, di mana subclass seperti JurnalDosen dan JurnalMahasiswa mengimplementasikan method ini sesuai dengan kebutuhan masing-masing.

5. Constructor<br>
Constructor digunakan untuk menginisialisasi atribut ```name```, ```nidn```, atau ```nim``` saat objek dari class Dosen atau Mahasiswa dibuat.

```php
public function __construct($name, $nidn){
    parent::__construct($name); // Memanggil constructor dari parent class
    $this->nidn = $nidn;
}
```

6. Method Overriding<br>
Dalam kode ini, Dosen dan Mahasiswa melakukan override terhadap method abstract ```getRole()``` yang diwariskan dari Person1.

```php
public function getRole() {
    echo "Role : Dosen";
}

public function getRole() {
    echo "Role : Mahasiswa";
}
```
7. Object (Pembuatan Objek)<br>
Setelah class didefinisikan, objek dibuat dengan menggunakan ```new``` keyword. Objek Dosen dan Mahasiswa dibuat, dan constructor digunakan untuk memberikan nilai awal bagi atribut-atribut objek tersebut.

```php
$dosen = new Dosen("Raharjo", "123456");
$mahasiswa = new Mahasiswa("Jordi", "2345678");
```
## Full Code:
```php
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

?>
```
## Hasil Output :
![alt text](/src/img/tugas5-6.png)

Penjelasan Struktur:
- Abstract Class Person1: Digunakan untuk mendefinisikan struktur umum dari seseorang, baik itu Dosen atau Mahasiswa, dengan atribut ```name``` dan method abstrak ```getRole()```.

Class Dosen & Mahasiswa:
- Kelas ini merupakan turunan dari Person1 yang menambahkan atribut khusus untuk dosen (```nidn```) dan mahasiswa (```nim```). Mereka juga mengimplementasikan method getRole untuk menunjukkan peran masing-masing.

Abstract Class Jurnal:
- Mewakili pengajuan jurnal yang bersifat abstrak dan harus diimplementasikan oleh subclass seperti JurnalDosen dan JurnalMahasiswa.

Polymorphism:
- Class Dosen dan Mahasiswa mengimplementasikan metode getRole dengan hasil yang berbeda, menunjukkan konsep polymorphism. Begitu juga dengan JurnalDosen dan JurnalMahasiswa.

Object Creation:
- Setelah objek Dosen dan Mahasiswa dibuat, ada modifikasi nama menggunakan setter, dan method untuk menampilkan peran serta atribut spesifik (NIDN dan NIM).

Output:
- Menampilkan peran Dosen, nama, NIDN, dan mencetak jurnal dosen.
Menampilkan peran Mahasiswa, nama, NIM, dan mencetak jurnal mahasiswa.

