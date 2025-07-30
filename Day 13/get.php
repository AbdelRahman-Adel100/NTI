<?php
header("Content-Type: application/json");
include "connect.php";

$conn = dbconnect();

if (isset($_GET["id"])) {
    $id = intval($_GET['id']); 
    $sql = "SELECT * FROM studentss WHERE id = $id";
    $result = mysqli_query($conn , $sql);
    $course = $result->fetch_assoc();

    echo json_encode($course);
    exit;
}

$sql = "SELECT * FROM studentss";
$result = mysqli_query($conn , $sql);
$studentss = [];

while ($row = $result->fetch_assoc()) {
    $studentss[] = $row;
}

echo json_encode($studentss);
?>