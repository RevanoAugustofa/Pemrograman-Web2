<?php 

class Person{
    private $name;

    public function __construct($name){
        $this->name = $name;
    }

    public function getName(){
        return $this->name;
    }
}

class Struktur extends Person{
    
    public $studentID;

    public function __construct($studentID,$name){
        parent::__construct($name);
        $this->studentID = $studentID;
    }

    public function getStudentID(){
        return $this->studentID;
    }
}
$tampil = new Struktur("2332938928","Ibnu Salsah");
echo $tampil->getName()."<br>";
echo $tampil->getStudentID();