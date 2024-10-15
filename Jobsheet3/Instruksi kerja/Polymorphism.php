<?php 
// Mendefinisikan class Person
class Person {
    protected $name; // Properti protected untuk menyimpan nama

    // Konstruktor untuk menginisialisasi nama
    public function __construct($name) {
        $this->name = $name; // Mengatur properti $name dengan nilai yang diberikan
    }

    // Method untuk mendapatkan nama
    public function getName() {
        return $this->name; // Mengembalikan nilai dari properti $name
    }
}

// Mendefinisikan class Student yang mewarisi dari Person
class Student extends Person {
    public $studentID; // Properti public untuk menyimpan ID siswa

    // Konstruktor untuk menginisialisasi nama dan studentID
    public function __construct($studentID, $name) {
        parent::__construct($name); // Memanggil konstruktor dari class Person
        $this->studentID = $studentID; // Mengatur properti $studentID dengan nilai yang diberikan
    }

    // Method untuk mendapatkan ID siswa
    public function getStudentID() {
        return $this->studentID; // Mengembalikan nilai dari properti $studentID
    }

    // Method untuk mendapatkan nama, di-overridden dengan format khusus
    public function getName() {
        return "Haii Saya : " . $this->name; // Mengembalikan nama dengan format khusus untuk siswa
    }
}

// Mendefinisikan class Teacher yang mewarisi dari Person
class Teacher extends Person {
    public $teacherID; // Properti public untuk menyimpan ID guru

    // Konstruktor untuk menginisialisasi nama dan teacherID
    public function __construct($name, $teacherID) {
        parent::__construct($name); // Memanggil konstruktor dari class Person
        $this->teacherID = $teacherID; // Mengatur properti $teacherID dengan nilai yang diberikan
    }

    // Method untuk mendapatkan nama, di-overridden dengan format khusus
    public function getName() {
        return "Perkenalkan Saya : " . $this->name; // Mengembalikan nama dengan format khusus untuk guru
    }
}
