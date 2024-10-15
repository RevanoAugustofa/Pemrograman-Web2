<?php 
// class person
class Person {
    protected $name;  // Properti protected untuk nama

    //construct
    public function __construct($name) {
        $this->name = $name;  // Inisialisasi properti name
    }

    // method getName
    public function getName() {
        return $this->name;  // Mengembalikan nama
    }

    //method setName
    public function setName($name) {
        return $this->name = $name;  // Mengubah nama
    }
}

//class student dengan extend class person
class Student extends Person {
    private $studentID;  // Properti private untuk ID mahasiswa

    // construct
    public function __construct($studentID, $name) {
        parent::__construct($name);  // Memanggil konstruktor Person
        $this->studentID = $studentID;  // Inisialisasi studentID
    }

    //method getStudentID
    public function getStudentID() {
        return $this->studentID;  // Mengembalikan ID mahasiswa
    }

    //method getName
    public function getName() {
        return "Haii Saya : " . $this->name;  // Override method getName dengan format khusus
    }

    //method setStudentID
    public function setStudentID($studentID) {
        return $this->studentID = $studentID;  // Mengubah studentID
    }
}

// class teacher dengan extend class person
class Teacher extends Person {
    public $teacherID;  // Properti public untuk ID guru

    //constructor
    public function __construct($name, $teacherID) {
        parent::__construct($name);  // Memanggil konstruktor Person
        $this->teacherID = $teacherID;  // Inisialisasi teacherID
    }

    //method getName ()
    public function getName() {
        return "Perkenalkan Saya : " . $this->name;  // Override method getName dengan format khusus
    }
}
