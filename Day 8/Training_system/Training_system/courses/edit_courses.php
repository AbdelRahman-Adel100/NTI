<?php
require 'connect.php';

$id = $_GET['id'] ;
$conn = dbconnect();
$row = [];

    if (!empty($id)) {
        $sql = "SELECT * FROM courses WHERE id = '$id'";
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
    <title>Courses</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-light text-black">
    <?php include '../navbar.php';?>
    <div class="container mt-4">
        <h3 class="mb-3">Edit Courses</h3>

        <form method="POST" action="update_courses.php" class="was-validated">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">

            <div class="mt-3">
                <input type="text" name="title" class="form-control" placeholder="Title" required
                    value="<?= $row['title'] ?>">
            </div>

            <div class="mt-3">
                <input type="text" name="description" class="form-control" placeholder="Description" required
                    value="<?= $row['description'] ?>">
            </div>

            <div class="mt-3">
                <input type="number" name="hours" class="form-control" placeholder="hours" required
                    value="<?= $row['hours'] ?>">
            </div>

            <div class="mt-3">
                <input type="float" name="price" class="form-control" placeholder="Price" required
                    value="<?= $row['price'] ?>">
            </div>

            <div class="mt-4 d-grid gap-2">
                <button type="submit" class="btn btn-warning">Update</button>
                <a href="courses.php" class="btn btn-primary"> Back </a>

            </div>
        </form>
    </div>
</body>

</html>