# Object Oriented Programing

__Pengertian OOP__
Pemrograman Berorientasi Objek (OOP), juga dikenal sebagai Pemrograman Berorientasi Objek (PBO) dalam bahasa Indonesia, adalah paradigma atau pendekatan pengembangan perangkat lunak atau program yang memiliki struktur berbasis objek serta fitur dan teknik yang dapat berinteraksi satu sama lain untuk mencapai tujuan tertentu.Prinsip-prinsip dasar OOP termasuk Encapsulation, Inheritance, Polymorphism, dan Abstraction yang memungkinkan pengembang untuk membuat kode yang lebih modular, fleksibel dan mudah dipelihara.

**Konsep Dasar OOP**
*Class dan Object:*
- Class: Blueprint atau template untuk menciptakan objek.
- Object: Instance dari class yang memiliki atribut (properties) dan perilaku(methods).


**Prinsip OOP**
- Encapsulation: Menyembunyikan detail implementasi dan hanya memberikan
akses melalui metode tertentu.

- Inheritance: Mewarisi sifat dan perilaku dari class lain.
- Polymorphism: Metode yang sama dapat memiliki implementasi berbeda
dalam class yang berbeda (Kemampuan untuk mengubah bentuk suatu objek).
- Abstraction: Menggambarkan sifat dan perilaku suatu objek tanpa menggambarkan detail implementasinya.


## Jobsheet 1 
<i>Menggunakan Konsep Kelas dan Objek dalam PHP</i>

### <u> Instruksi Kerja </u>
1. Membuat Class dan Object
- Buat class Mahasiswa yang memiliki atribut nama, nim, dan jurusan.
- Buat metode tampilkanData() dalam class Mahasiswa.
- Instansiasi objek dari class Mahasiswa dan tampilkan data mahasiswa tersebut.
```php
<?php 
//Definisi kelas mahasiswa
class Mahasiswa {

    //Atribut atau Properti
    public $nama;
    public $nim;
    public $jurusan;

    ...
    ...

    //Method fungsi tampil data
    public function tampilkanData(){
         return "Hai Nama Saya : $this->nama.<br> Npm saya : $this->nim.<br> Jurusan : $this->jurusan ";
    }
}

//membuat objek dan menampilkannya
$tampil = new Mahasiswa ("Revano Augustofa",230102071,"Teknik Informatika");
echo $tampil->tampilkanData();
?>
```

2. Implementasi Constructor
- Tambahkan constructor pada kelas Mahasiswa yang akan menginisialisasi
atribut nama, nim, dan jurusan.
```php
<?php 
//Definisi kelas mahasiswa
class Mahasiswa {
    ...

    //constructor 
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
}
    ...
```
- Gunakan constructor ini untuk mengatur nilai awal dari atribut saat objek dibuat.
```php
<?php 
//Definisi kelas mahasiswa
class Mahasiswa {
   ...
    //constructor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }
}

//membuat objek 
$tampil = new Mahasiswa ("Revano Augustofa",230102071,"Teknik Informatika");


```
3. Membuat Metode Tambahan
- Buat metode updateJurusan() dalam kelas Mahasiswa yang memungkinkan
perubahan jurusan.
```php
<?php 
//Definisi kelas mahasiswa
class Mahasiswa {

    ...
    ...

    //Method update jurusan
    public function updateJurusan($jurusan){
        $this->jurusan = $jurusan;
    }
}
    ...

```

- Gunakan metode ini untuk mengubah jurusan dari objek yang sudah dibuat.

```php
<?php 
//Definisi kelas mahasiswa
class Mahasiswa {
    ...
    ...
    ...

    //Method update jurusan
    public function updateJurusan($jurusan){
        $this->jurusan = $jurusan;
    }

}

//membuat objek

//data awal
$tampil = new Mahasiswa ("Revano Augustofa",230102071,"Teknik Informatika");

echo "<br><br>";

//mengupdate data jurusan menjadi teknik mesin
$tampil->updateJurusan("Teknik Mesin");


```

4. Penggunaan Atribut dan Metode
- Ubah nilai atribut nim dari objek Mahasiswa menggunakan metode setter.
```php
<?php 
//Definisi kelas mahasiswa
class Mahasiswa {
   ...
   ...
   ...
   ...
    //Method setNim
    public function setNim($nim){
        $this->nim = $nim;
    }
}

//membuat objek

//data awal
echo "<u>Data Awal</u><br>";
$tampil = new Mahasiswa ("Revano Augustofa",230102071,"Teknik Informatika");

echo "<br><br>";

//mengubah nilai atribut nim
$tampil->setNim("230102088");



```
- Tampilkan data mahasiswa yang sudah diperbarui dengan memanggil metode
tampilkanData().

```php
<?php 
//Definisi kelas mahasiswa
class Mahasiswa {
   ...
   ...
   ...
   ...
   ...
}

//membuat objek dan menampilkannya
    ...
    ...
//menampilkan semua data awal
echo $tampil->tampilkanData();
echo "<br><br>";
    ...
    ...
//menampilkan semua data yang sudah di perbaharui
echo $tampil->tampilkanData();

```

_______

### <i>Full Code :</i>

jika dalam pengaplikasiannya akan tampak seperti ini.
```php
<?php 
//Definisi kelas mahasiswa
class Mahasiswa {
    //Atribut atau Properti
    public $nama;
    public $nim;
    public $jurusan;

    //constructor
    public function __construct($nama, $nim, $jurusan){
        $this->nama = $nama;
        $this->nim = $nim;
        $this->jurusan = $jurusan;
    }

    //Method fungsi tampil data
    public function tampilkanData(){
         return "Hai Nama Saya : $this->nama.<br> Npm saya : $this->nim.<br> Jurusan : $this->jurusan ";
    }

    //Method update jurusan
    public function updateJurusan($jurusan){
        $this->jurusan = $jurusan;
    }

    //Method setNim
    public function setNim($nim){
        $this->nim = $nim;
    }
}

//membuat objek dan menampilkannya

//data awal
echo "<u>Data Awal</u><br>";
$tampil = new Mahasiswa ("Revano Augustofa",230102071,"Teknik Informatika");
//menampilkan semua data awal
echo $tampil->tampilkanData();
echo "<br><br>";

//perbaharui isi data jurusan
echo "<u>Data yang sudah diperbarui</u><br>";
$tampil->updateJurusan("Teknik Mesin");
//mengubah nilai atribut nim
$tampil->setNim("230102088");
//menampilkan semua data yang sudah di perbaharui
echo $tampil->tampilkanData();

```
### <i>Hasil Output:</i>
![alt text](image-1.png)
________________

### <u> TUGAS </u>
1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk
menampilkan informasi tersebut.
4. Buat dokumentasi proyek dan unggah ke repository GitHub, menjelaskan proses
pembuatan kelas, penggunaan metode, dan hasil output.


**<u>1. Pembuatan Kelas </u>**
```php
<?php

//definisi kelas
class Dosen {
    //atribut atau properti
    public $nama; // membuat variabel nama
    public $nip; // membuat variabel nip
    public $mataKuliah; // membuat variabel mataKuliah
}
```
**<u>2. Pembuatan Metode </u>**
```php
class Dosen {
    ...

    //constructor
    public function __construct($nama,$nip,$mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    //method fungsi tampil dosen
    public function tampilkanDosen(){
        return "Nama Dosen: $this->nama <br> NIP: $this->nip<br> Matakuliah : $this->mataKuliah";
    }
}

```
**<u>3. Pembuatan Objek </u>**
```php
<?php

//definisi kelas
class Dosen {
    ...
    ...
    ...
}

//membuat objek dan menampilkannya
$tampil =new Dosen("Revano","238282298","Matematika");
echo $tampil->tampilkanDosen();

```

### <i>Full Code :</i>

jika dalam pengaplikasiannya akan tampak seperti ini.
```php
<?php

//definisi kelas
class Dosen {
    //atribut atau properti
    public $nama;
    public $nip;
    public $mataKuliah;

    //constructor
    public function __construct($nama,$nip,$mataKuliah){
        $this->nama = $nama;
        $this->nip = $nip;
        $this->mataKuliah = $mataKuliah;
    }
    //method fungsi tampil dosen
    public function tampilkanDosen(){
        return "Nama Dosen: $this->nama <br> NIP: $this->nip<br> Matakuliah : $this->mataKuliah";
    }
}

//membuat objek dan menampilkannya
$tampil =new Dosen("Revano","238282298","Matematika");
echo $tampil->tampilkanDosen();
```
**<u>4. Output </u>**
![alt text](image-2.png)
## Jobsheet 2

## Jobsheet 3