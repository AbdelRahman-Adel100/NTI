<?php
require 'connect.php';

$conn = dbconnect();

$id= $_POST['id'];
$students_id  = $_POST['students_id'];
$courses_id = $_POST['courses_id'];
$grade = $_POST['grade'];

if (!empty($id) && !empty($students_id) && !empty($courses_id) && !empty($grade)) {

    $sql = "UPDATE enrollments SET students_id = '$students_id', courses_id = '$courses_id', grade = '$grade' 
            WHERE id = '$id'";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: enrollments.php?msg=updated");
        exit;
    } else {
        die("Something Wrong " . mysqli_error($conn));
    }

} else {
    die("Empty->Wrong");
}
?>