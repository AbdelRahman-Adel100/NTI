<?php
require 'connect.php';

$conn = dbconnect();

$id    = $_POST['id'];
$title  = $_POST['title'];
$description = $_POST['description'];
$hours = $_POST['hours'];
$price  = $_POST['price'];

if (!empty($id) && !empty($title) && !empty($description) && !empty($hours) && !empty($price)) {

    $sql = "UPDATE courses SET title = '$title', description = '$description', hours = '$hours', price = '$price' 
            WHERE id = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: courses.php?msg=updated");
        exit;
    } else {
        die("Something Wrong " . mysqli_error($conn));
    }

} else {
    die("Empty->Wrong");
}
?>