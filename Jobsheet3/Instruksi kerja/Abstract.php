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

    // Method untuk mengatur nama
    public function setName($name) {
        return $this->name = $name; // Mengatur nilai baru untuk properti $name
    }
}

// Mendefinisikan class Student yang mewarisi dari Person
class Student extends Person {
    
    private $studentID; // Properti private untuk menyimpan ID siswa

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

    // Method untuk mengatur ID siswa
    public function setStudentID($studentID) {
        return $this->studentID = $studentID; // Mengatur nilai baru untuk $studentID
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

// Mendefinisikan class Course sebagai abstract
abstract class Course {
    abstract public function getCourseDetails(); // Method abstract untuk mendapatkan detail kursus
}

// Mendefinisikan class OnlineCourse yang mewarisi dari Course
class OnlineCourse extends Course {
    // Implementasi dari method abstract
    public function getCourseDetails() {
        echo "Online Course<br>"; // Mengembalikan detail kursus online
    }
}

// Mendefinisikan class OfflineCourse yang mewarisi dari Course
class OfflineCourse extends Course {
    // Implementasi dari method abstract
    public function getCourseDetails() {
        echo "Offline Course"; // Mengembalikan detail kursus offline
    }
}
//Membuat objek baru Onlinecourse
$tampil = new OnlineCourse();
//menampilkan course destail
$tampil->getCourseDetails();

//Membuat objek baru Offlinecorse
$tampil = new OfflineCourse();
//menampilkan course destail
$tampil->getCourseDetails();
