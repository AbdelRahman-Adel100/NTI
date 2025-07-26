<?php
session_start();

$allowed_users = ['admin' => '1234', 'user' => 'abcd'];
$_SESSION['allowed_users'] = $allowed_users;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    $log_entry = "$username | " . date("Y-m-d H:i:s") . " | ";

    if (isset($allowed_users[$username]) && $allowed_users[$username] === $password) {
        $_SESSION['username'] = $username;
        $log_entry .= "Login successful\n";
        file_put_contents("logs/login.log", $log_entry, FILE_APPEND);
        header("Location: dashboard.php");
        exit;
    } else {
        $log_entry .= "Login failed\n";
        file_put_contents("logs/login.log", $log_entry, FILE_APPEND);
        $error = "Login failed.";
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

<!--  d-flex justify-content-center align-items-center vh-100 -->

<body class="bg-black">
    <div class="container mt-5">
        <h2 class="mb-4  text-light">Login</h2>

        <?php if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>"; ?>

        <form method="POST" class="was-validated">

            <div class="mt-3">
                <label for="name" class="form-label text-light">Username</label>
                <input type="text" name="username" class="form-control" id="name" required>
                <div class="invalid-feedback">Please enter username</div>
            </div>

            <div class="mt-3">
                <label for="password" class="form-label text-light">PASSWORD</label>
                <input type="password" name="password" class="form-control" id="password" required>
                <div class="invalid-feedback">Please enter password</div>
            </div> <br>

            <div class="mt-3">
                <div class="d-grid gap-2">
                    <button type="submit" class="btn btn-primary">Login</button>
                    <a href="signup.php" class="btn btn-warning mt-3">Sign Up</a>
                </div>
            </div>
        </form> <br>

        <div class="card bg-black  text-light-emphasis   d-flex justify-content-center align-items-center ">
            <div class="card-body">
                <p> admin => 1234 </p>
                <p>user => abcd </p>
            </div>
        </div>

    </div>
</body>

</html>