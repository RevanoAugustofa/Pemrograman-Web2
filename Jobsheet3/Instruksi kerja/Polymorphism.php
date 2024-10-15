<?php 

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

    public function getName(){
        return "Haii Saya : ".$this->name;
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