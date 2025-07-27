<?php
require 'connect.php'; 

$id= $_POST['id'];
$title= $_POST['title'];
$description= $_POST['description'];
$hours= $_POST['hours'];
$price= $_POST['price'];

$conn = dbconnect();
$sql = "INSERT INTO courses (ID,title,description,hours,price) VALUES('$id','$title','$description','$hours','$price')";

    if($conn->query($sql)==TRUE){
        echo "New record added successfully"; 
    }
    
    header("location: courses.php")
?>
