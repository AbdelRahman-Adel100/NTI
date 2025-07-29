 <?php

class Animal {
    public $name = "animalName";
    public function makeSound() {
    echo "$this->name ";
    }
}

 class Dog extends Animal {
//function __construct($name) {}
    public function makeSound() {
     echo "$this->name , woof ";
        }
}
$a= new Animal();
//$a->name = "animalName";
$a->makeSound(); 

echo "<hr>";

$d = new Dog();
$d->name = "dogName";
$d->makeSound();
 
 
 ?>