<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">

        <?php if (isset($_GET['error'])): ?>
        <div class="alert alert-danger"><?= $_GET['error'] ?></div>
        <?php endif; ?>

        <form method="POST" action="check_login.php">
            <h3>Login</h3>
            <div class="mb-3">
                <input type="email" name="email" class="form-control" required placeholder="Email">
            </div>
            <div class="mb-3">
                <input type="password" name="password" class="form-control" required placeholder="Password">
            </div>
            <button class="btn btn-success">Login</button>
            <p>you don't have an account? <a href="register_2roles.php"> register</a></p>

        </form>
    </div>
</body>

</html>