<?php
class Course {
    private $title;
    private $instructor;

     function __construct($title, $instructor) {
        $this->title = $title;
        $this->instructor = $instructor;
         }
    
 public function describe() {
        echo "Course info : $this->title - $this->instructor";
        }
    }
 
        $c = new Course("OOP", "Eng.Ahmed");
        $c->describe();


 ?>