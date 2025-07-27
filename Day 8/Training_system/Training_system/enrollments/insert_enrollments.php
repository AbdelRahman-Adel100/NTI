<?php
require 'connect.php'; 

$id = $_POST['id'];
$students_id  = $_POST['students_id'];
$courses_id = $_POST['courses_id'];
$grade = $_POST['grade'];


$conn = dbconnect();
$sql = "INSERT INTO enrollments (ID,students_id,courses_id,grade) VALUES('$id','$students_id','$courses_id','$grade')";

   
 if($conn->query($sql)==TRUE){
        echo "New record added successfully"; 
    }
    
header("location: enrollments.php")
?>