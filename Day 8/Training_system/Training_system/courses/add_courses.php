<?php require 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-light text-black">
    <?php include '../navbar.php'; ?>
    <div class="container mt-4">
        <h3 class="mb-3">Add Course</h3>

        <form method="POST" action="insert_courses.php" class="was-validated">

            <div class="mt-3">
                <input type="number" name="id" class="form-control" id="id" placeholder="id" required>
            </div>

            <div class="mt-3">
                <input type="text" name="title" class="form-control" id="title" placeholder="title" required>
            </div>

            <div class="mt-3">
                <input type="text" name="description" class="form-control" id="description" placeholder="description" required>
            </div>

            <div class="mt-3">
                <input type="number" name="hours" class="form-control" id="hours" placeholder="hours" required>
            </div>

            <div class="mt-3">
                <input type="float" name="price" class="form-control" id="price" placeholder="price" required>
            </div>
            <br>

            <div class="mt-3">
                <div>
                    <button type="submit" name="btn_add" class="btn btn-success d-grid gap-2">Add</button>
                    <a href="courses.php" class="btn btn-primary mt-3"> Back </a>

                </div>
            </div>
        </form>
    </div>