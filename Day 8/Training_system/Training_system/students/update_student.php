<?php
require 'connect.php';

$conn = dbconnect();

$id    = $_POST['id'];
$name  = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$date  = $_POST['date'];

if (!empty($id) && !empty($name) && !empty($email) && !empty($phone) && !empty($date)) {

    $sql = "UPDATE studentss SET name = '$name', email = '$email', phone = '$phone', date_of_birth = '$date' 
            WHERE id = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: students.php?msg=updated");
        exit;
    } else {
        die("Something Wrong " . mysqli_error($conn));
    }

} else {
    die("Empty->Wrong");
}
?>