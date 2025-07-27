<?php
require 'connect.php';

$id = $_GET['id'] ;
$conn = dbconnect();

$row = [];

    if (!empty($id)) {
        $sql = "SELECT * FROM enrollments WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);
    } else {
             die("No ID provided");
            }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-light text-black">
    <?php include '../navbar.php';?>
    <div class="container mt-4">
        <h3 class="mb-3">Edit Enrollments</h3>

        <form method="POST" action="update_enrollments.php" class="was-validated">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">

            <div class="mt-3">
                <input type="number" name="students_id" class="form-control" placeholder="Student_Id" required
                    value="<?= $row['students_id'] ?>">
            </div>

            <div class="mt-3">
                <input type="number" name="courses_id" class="form-control" placeholder="Courses_Id" required
                    value="<?= $row['courses_id'] ?>">
            </div>

            <div class="mt-3">
                <input type="float" name="grade" class="form-control" placeholder="grade" required
                    value="<?= $row['grade'] ?>">
            </div>

            <div>
                <button type="submit" class="btn btn-warning mt-3 d-grid gap-2">Update</button><br>
                <a href="enrollments.php" class="btn btn-primary mt-3"> Back </a>

            </div>
        </form>
    </div>
</body>

</html>