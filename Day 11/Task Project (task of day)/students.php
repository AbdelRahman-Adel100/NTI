<?php
class Student {
  public $name,$age;
  protected $email;
  private $isActive = false;

    function __construct($name , $email , $age){
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    public function active(){
        $this->isActive = true ;
    }

    public function getStatus(){
     return $this->isActive;
    }

    public function welcome() {
        return "Welcome, " . $this->name;
    }
}


    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        $name  = $_POST['name']  ?? '';
        $email = $_POST['email'] ?? '';
        $age   = $_POST['age']   ?? 0;

$student = new Student($name, $email, $age);
$student->active();

    $response = [
        'Status' => $student->getStatus(),
        'welcome' => $student->welcome()
    ];

    header('Content-Type: application/json');
    echo json_encode($response);
}






?>