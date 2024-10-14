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