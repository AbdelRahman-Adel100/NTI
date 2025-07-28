<?php session_start(); ?>
<?php if (!isset($_SESSION['user'])) header("Location: login.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">

        <div class="alert alert-success">Welcome <?= $_SESSION['user'] ?> (<?= $_SESSION['role'] ?>)</div>

        <?php if ($_SESSION['role'] === 'admin'): ?>
        <div class="card bg-danger text-white mb-3">
            <div class="card-body">
                <h5 class="card-title">Admin Dashboard</h5>
                <p class="card-text">You have full access to user management.</p>
            </div>
        </div>
        <?php else: ?>
        <div class="card bg-info text-white mb-3">
            <div class="card-body">
                <h5 class="card-title">User Dashboard</h5>
                <p class="card-text">Welcome to your dashboard. Limited access granted.</p>
            </div>
        </div>
        <?php endif; ?>

        <a href="logout.php" class="btn btn-dark">Logout</a>
    </div>
</body>

</html>