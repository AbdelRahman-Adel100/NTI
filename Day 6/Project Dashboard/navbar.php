<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit;
}?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <span class="navbar-text"> <a class="nav-link" href="dashboard.php"><strong>Dashboard</strong> </a> </span>
            <div class="collapse navbar-collapse" id="navbarText">
                <div class="navbar-nav">
                    <a class="nav-link" href="upload.php">Upload Product</a>
                    <a class="nav-link" href="gallery.php">Gallery</a>
                    <a class="nav-link" href="upload_log.php">Upload log</a>
                    <a class="nav-link" href="login_log.php">Login log</a>
                </div>
                <ul class="navbar-nav ms-auto">
                    <div class="text-black">
                        <p><strong>Welcome <?= $_SESSION['username'] ?>!</strong></p>
                    </div>
                    <li class="nav-item">
                        <a href="logout.php" class="btn btn-danger ">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>