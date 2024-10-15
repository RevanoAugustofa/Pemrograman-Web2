<?php 

class Person{
    protected $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
    public function setName($name){
        return $this->name=$name;
    }

}

class Student extends Person{
    
    private $studentID;

    public function __construct($studentID,$name){
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID(){
        return $this->studentID;
    }

    public function getName(){
        return "Haii Saya : ".$this->name;
    }

    public function setStudentID($studentID){
        return $this->studentID=$studentID;
    }
}

class Teacher extends Person{
    public $teacherID;

    public function __construct($name,$teacherID){
        parent::__construct($name);
        $this->teacherID = $teacherID;
    }
    public function getName(){
        return "Perkenalkan Saya : ".$this->name;
    }
}