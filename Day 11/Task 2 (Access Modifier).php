<?php
class Employee{
    public $name ="Ali";
    protected $salary="2500";
    private $bonus="100";
    
    public function show(){
        echo  $this->name ;
        echo  $this->salary ;
        echo  $this->bonus ;
    }
}
$emp= new Employee();
echo $emp->name;
//echo $emp->salary;
//echo $emp->bonus;
echo "<br>";
$emp->show();

?>