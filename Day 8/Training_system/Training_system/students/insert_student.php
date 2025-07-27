<?php
require 'connect.php'; 

$id= $_POST['id'];
$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$date= $_POST['date'];

$conn = dbconnect();
$sql = "INSERT INTO studentss (ID,name,email,phone,date_of_birth) VALUES('$id','$name','$email','$phone','$date')";

   
 if($conn->query($sql)==TRUE){
        echo "New record added successfully"; 
    }
    
header("location: students.php")
?>