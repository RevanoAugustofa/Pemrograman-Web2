 # Jobsheet 1 
  
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
      //method fungsi tampil dosen
      public function tampilkanDosen(){
          return "Nama Dosen: $this->nama <br> NIP: $this->nip<br> Matakuliah : $this->mataKuliah";
      }
  }
  
  ```

- Constructor:
  - Metode __construct() dipanggil ketika objek baru dari kelas Dosen dibuat. Metode ini menerima tiga parameter (```$nama```, ```$nip```, dan ```$mataKuliah```) dan menginisialisasi atribut kelas dengan nilai yang diberikan.

- Method ```tampilkanDosen( )```:

  - Metode ini mengembalikan string yang berisi informasi lengkap tentang dosen. String ini mencakup nama, NIP, dan mata kuliah dosen.

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
  - Objek Dosen baru diciptakan dengan nama "Revano", NIP 238282298, dan mata kuliah "Matematika". Ini adalah data awal dari dosen.

- Menampilkan Data Dosen:
  - Output menampilkan informasi dari objek dosen dengan memanggil metode tampilkanDosen(). Hasilnya adalah string yang menunjukkan informasi dosen.
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
  
   //membuat objek 
  $tampil =new Dosen("Revano","238282298","Matematika");
  //menampilkan /mencetak data dosen
  echo $tampil->tampilkanDosen();
  ```
  **<u>4. Output </u>**
  ![alt text](/src/img/tugas1-2.png)