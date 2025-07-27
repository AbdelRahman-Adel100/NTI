<?php
require 'connect.php';

$id = $_GET['id'] ;
$conn = dbconnect();

$row = [];

    if (!empty($id)) {
        $sql = "SELECT * FROM studentss WHERE id = '$id'";
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
        <h3 class="mb-3">Edit Student</h3>

        <form method="POST" action="update_student.php" class="was-validated">
            <input type="hidden" name="id" value="<?= $row['id'] ?>">

            <div class="mt-3">
                <input type="text" name="name" class="form-control" placeholder="Name" required
                    value="<?= $row['name'] ?>">
            </div>

            <div class="mt-3">
                <input type="email" name="email" class="form-control" placeholder="Email" required
                    value="<?= $row['email'] ?>">
            </div>

            <div class="mt-3">
                <input type="number" name="phone" class="form-control" placeholder="Phone" required
                    value="<?= $row['phone'] ?>">
            </div>

            <div class="mt-3">
                <input type="date" name="date" class="form-control" placeholder="Date of Birth" required
                    value="<?= $row['date_of_birth'] ?>">
            </div>

            <div>
                <button type="submit" class="btn btn-warning mt-3 d-grid gap-2">Update</button><br>
                <a href="students.php" class="btn btn-primary mt-3"> Back </a>

            </div>
        </form>
    </div>
</body>

</html>