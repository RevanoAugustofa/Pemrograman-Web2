 # Jobsheet 1 
 
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
 ![alt text](/src/img/instruksi_kerja1-2.png)
 ________________
  
  ### <u> TUGAS </u>
  1. Implementasikan kelas Dosen dengan atribut nama, nip, dan mataKuliah.
  2. Buat metode tampilkanDosen() untuk menampilkan informasi dosen.
  3. Buat objek dari kelas Dosen, dan gunakan metode tampilkanDosen() untuk
  menampilkan informasi tersebut.
  4. Buat dokumentasi proyek dan unggah ke repository GitHub, menjelaskan proses
  pembuatan kelas, penggunaan metode, dan hasil output.
  ____________________

  
  **<u>1. Pembuatan Kelas </u>**
  ```php
  <?php
  
  //definisi kelas
  class Dosen {
      //atribut atau properti
      public $nama; // atribut nama
      public $nip; //atribut nip
      public $mataKuliah; // atribut mataKuliah
  }
  ```
- Mendefinisikan kelas baru bernama Dosen yang memiliki atribut untuk menyimpan nama, NIP, dan mata kuliah.
- Atribut atau Properti:
  - public ```$nama```: atribut untuk menyimpan nama dosen, yang dapat diakses dari luar kelas.
  - public ```$nip```: atribut untuk menyimpan Nomor Induk Pegawai (NIP), yang juga dapat diakses dari luar kelas.
  - public ```$mataKuliah```: atribut untuk menyimpan mata kuliah, yang dapat diakses dari luar kelas.

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
      //method tampil dosen
      public function tampilkanDosen(){
          return "Nama Dosen: $this->nama <br> NIP: $this->nip<br> Matakuliah : $this->mataKuliah";
      }
  }
  
  ```

- Constructor:
  - Constructor adalah metode khusus yang dipanggil saat objek dari kelas dibuat.
  - Dalam constructor ini, kita menerima tiga parameter: ```$nama```, ```$nip```, dan ```$mataKuliah```.
  - Kata kunci ```$this``` digunakan untuk merujuk ke objek saat ini. Kita menginisialisasi atribut kelas dengan nilai yang diberikan saat objek dibuat.
  

- Method ```tampilkanDosen( )```:
  - Metode ini mengembalikan string yang berisi informasi lengkap tentang dosen.
  - Dengan menggunakan interpolasi string, kita menyusun informasi tentang dosen dengan menyertakan nilai dari atribut ```$nama```, ```$nip```, dan ```$mataKuliah```.

**<u>3. Pembuatan Objek </u>**
  ```php
  <?php
  
  //definisi kelas
  class Dosen {
      ...
      ...
      ...
  }
  
  //membuat objek 
  $tampil =new Dosen("Revano","238282298","Matematika");
  //menampilkan /mencetak data dosen
  echo $tampil->tampilkanDosen();
  
  ```
- Instansiasi Objek:
  - membuat objek baru dari kelas Dosen dengan nama "Revano", NIP 238282298, dan mata kuliah "Matematika". Ini adalah data awal dari dosen
  - Objek ini disimpan dalam variabel ```$tampil```.

- Menampilkan Data Dosen:
  - Dengan menggunakan objek ```$tampil```,dengan memanggil metode ```tampilkanDosen()``` untuk mendapatkan string informasi tentang dosen.
  - Hasil dari metode ini akan ditampilkan menggunakan ```echo```, yang akan mencetak informasi dosen ke layar.

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
  
      // constructor
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
  
   //membuat objek 
  $tampil =new Dosen("Revano","238282298","Matematika");
  //menampilkan /mencetak data dosen
  echo $tampil->tampilkanDosen();
  ```
**<u>4. Output </u>**

  ![alt text](/src/img/tugas1-2.png)