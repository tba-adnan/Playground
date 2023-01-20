<?php

use Student as GlobalStudent;


interface SchoolManagement_interface {
 public function Add();
 public function Delete();


}


class SchoolManagement implements SchoolManagement_interface {
  public function Add() {
    echo "This is the add.";
  }

  public function Delete() {
    echo "This is the delete";
    
  }

  public function count() {
    echo "Count :";
  }

  public function list() {
    echo "Students list :";
  }

}


class School {
  public $name;
  public $nickname;

  public static function totalStudents($name) {
    echo "<br>";
    echo "Total Students : $name";
    
  }
  public function __construct(){

  }

}


class Student extends School{
   public function Display_student() {
    echo "- Available Students : ";
   }
   

}

class Teacher extends School {
  public function Display_teacher() {
    echo "<br>";
    echo "- Available Teachers : ";
  }
  

}


$displayStudents = new Student();
$displayTeachers = new Teacher();

$displayStudents->Display_student();
$displayTeachers->Display_teacher();

?>