<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $em = $_POST['emaill'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($em === 'admin@nti.com' && $password === '1234') {
        $_SESSION['logged_in'] = true;
        header("Location: welcome.php");
        exit();
    } else {
        $error = "Wrong Email or Password";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-dark d-flex justify-content-center align-items-center vh=100">
    <div class="container mt-5">
        <h2 class="mb-4  text-light">Login</h2>

        <?php if (isset($error)): ?>
        <div class="alert alert-danger"><?= $error ?></div>
        <?php endif; ?>

        <form method="POST" class="was-validated">

            <div class="mt-3">
                <label for="email" class="form-label text-light">Email</label>
                <input type="email" name="emaill" class="form-control" id="email" required>
                <div class="invalid-feedback">Please enter valid email</div>
            </div>

            <div class="mt-3">
                <label for="password" class="form-label text-light">PASSWORD</label>
                <input type="password" name="password" class="form-control" id="password" required>
                <div class="invalid-feedback">Please enter password</div>
            </div> <br>

            <div class="mt-3">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="createAccount.php" class="btn btn-warning mt-3">Sign Up</a>

                </div>
            </div>
        </form>
    </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>