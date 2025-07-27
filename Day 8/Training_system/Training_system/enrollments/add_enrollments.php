<?php require 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enrollments</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-light text-black">
    <?php include '../navbar.php';?>
    <div class="container mt-4">
        <h3 class="text-center text-black mb-4">Add Enrollments</h3>

        <form method="POST" action="insert_enrollments.php" class="was-validated">

            <div class="mt-3">
                <input type="number" name="id" class="form-control" id="id" placeholder="Id" required>
            </div>

            <div class="mt-3">
                <input type="number" name="students_id" class="form-control" id="students_id" placeholder="Students_Id" required>
            </div>

            <div class="mt-3">
                <input type="number" name="courses_id" class="form-control" id="courses_id" placeholder="Courses_Id" required>
            </div>

            <div class="mt-3">
                <input type="float" name="grade" class="form-control" id="grade" placeholder="Grade" required>
            </div>
            <br>

            <div class="mt-3">
                <div>
                    <button type="submit" name="btn_add" class="btn btn-success mt-3 d-grid gap-2">Add</button><br>
                    <a href="enrollments.php" class="btn btn-primary mb-3"> Back </a>

                </div>
            </div>
        </form>
    </div>