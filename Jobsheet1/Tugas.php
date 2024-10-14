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