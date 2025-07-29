 <?php

class Vehicle {
    public $make = "China";
    public $model = "MG";
    
    public function info() {
    echo " Model : $this->model & Make from : $this->make";
    }
}
 class Car extends Vehicle {
    public $fuelType = "90";
 
    public function info() {
    echo "Model : $this->model & Make from : $this->make  & Fuel type : $this->fuelType ";
    }
}
$v= new Vehicle();
$v->info(); 
echo"<br> <br>";

$c = new Car();
$c->make = "Germany";
$c->model = "BMW";
$c->info();
 
echo "<hr> <hr><br>"; 
?>




<?php

class BankAccount {
    private $balance = 0;
    
    public function deposit($amount) {
    $this->balance += $amount;
    }
     
    public function withd($mon) {
    $this->balance-=$mon;
    }

    public function getBalance() {
    echo"Your Balance : $this->balance";
    }
       
}

$account = new BankAccount();
$account->deposit(1000);
$account->withd(200);

$account->deposit(5000);
$account->withd(300);

echo $account->getBalance();

echo "<hr> <hr><br>"; 
?>




<?php

abstract class Employee {
    protected $name;

    public function __construct($name) {
            $this->name = $name;
    }
    
    abstract public function calcSalary();
}

class HourlyEmployee extends Employee {
 
        public function __construct($name , $salary , $hours) {
                parent::__construct($name);

            $this->salary = $salary;
            $this->hours = $hours;

    }
    
    public function calcSalary() {
        return $this->salary * $this->hours;
    }

    public function getSalary() {

        $total =  $this->calcSalary();
        echo"Mr/$this->name ,Your Total Salary is : $total EGP";
    }

 }

 $h=new HourlyEmployee("Ahmed Ali" , 3000,7);
 $h->calcSalary();
 $h->getSalary();

 echo "<hr> <hr><br>"; 
 ?>




<?php

class Shape{
    public function draw(){
        echo "Drawing a Shape <br>";
}
}

class Circle extends Shape{
    public function draw(){
        echo "Drawing a Circle <br>";
}
}

class Rectangle extends Shape{
    public function draw(){
        echo "Drawing a Rectangle";
}
}

$shapes = [
    new Shape(),
    new Circle(),
    new Rectangle()
];

foreach ($shapes as $s) {
    $s->draw(); 
}
?>

