<?php require 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-light text-black">
    <?php include '../navbar.php';?>
    <div class="container mt-4">
        <h3 class="text-center text-black mb-4">Add Students</h3>

        <form method="POST" action="insert_student.php" class="was-validated">

            <div class="mt-3">
                <input type="number" name="id" class="form-control" id="id" placeholder="id" required>
            </div>

            <div class="mt-3">
                <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
            </div>

            <div class="mt-3">
                <input type="email" name="email" class="form-control" id="email" placeholder="email" required>
            </div>

            <div class="mt-3">
                <input type="number" name="phone" class="form-control" id="phone" placeholder="phone" required>
            </div>

            <div class="mt-3">
                <input type="date" name="date" class="form-control" id="date" placeholder="Date Of birth" required>
            </div>
            <br>

            <div class="mt-3">
                <div>
                    <button type="submit" name="btn_add" class="btn btn-success mt-3 d-grid gap-2">Add</button><br>
                    <a href="students.php" class="btn btn-primary mb-3"> Back </a>

                </div>
            </div>
        </form>
    </div>