<?php

$conn = new mysqli("localhost", "root","","training system");

    if($conn -> connect_error){
        die ("Connection failed".$conn -> connect_error);
    }

      
$stmt = $conn->prepare("SELECT name FROM studentss WHERE email = ? AND id =?");

$email = "Ahmed_Ali@gmail.com";
$id = 1;

$stmt->bind_param("si", $email , $id);
$stmt->execute();
$result = $stmt->get_result();

while ($row = $result->fetch_assoc()) {
    echo "Name: " . $row['name'] . "<br>";
}

$stmt->close();
$conn->close();
?>