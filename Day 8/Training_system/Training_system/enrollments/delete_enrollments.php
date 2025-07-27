<?php
require 'connect.php'; 

$id = $_GET['id'] ?? '';

if (!empty($id)) {
    $conn = dbconnect();
    $sql = "DELETE FROM `enrollments` WHERE id = '$id'";
    mysqli_query($conn, $sql);
}

header("location: enrollments.php");
exit;
?>