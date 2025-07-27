<?php
require 'connect.php'; 

$id = $_GET['id'] ?? '';

if (!empty($id)) {
    $conn = dbconnect();
    $sql = "DELETE FROM `studentss` WHERE id = '$id'";
    mysqli_query($conn, $sql);
}

header("location: students.php");
exit;
?>