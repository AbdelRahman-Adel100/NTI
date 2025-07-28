<?php session_start(); ?>
<?php if (!isset($_SESSION['user'])) header("Location: login.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>
<body>
<div class="container mt-5">

    <?php if (isset($_GET['success'])): ?>
        <div class="alert alert-success">
            Logged in as "<?= $_SESSION['user'] ?>" at <?= $_SESSION['login_time'] ?>
        </div>
    <?php endif; ?>

    <?php if (isset($_SESSION['login_time'])): ?>
    <div class="alert alert-success">
        Welcome! Logged in at <?= $_SESSION['login_time'] ?>
    </div>
<?php endif; ?>




    <h2>Welcome, <?= $_SESSION['user'] ?>!</h2>
    <p>Your Role: <?= $_SESSION['role'] ?></p>
    <a href="logout.php" class="btn btn-danger">Logout</a>
</div>
</body>
</html>
