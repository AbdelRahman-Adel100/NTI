<?php
session_start();

if (!isset($_SESSION['allowed_users'])) {
    $_SESSION['allowed_users'] = [];
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($username) && !empty($password)) {
        $_SESSION['allowed_users'][$username] = $password;
        $success = "User registered successfully.";
    } else {
        $error = "All fields required.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Sign Up</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-black">

    <div class="container mt-5">
        <h2 class="mb-4 text-info-emphasis">Sign Up</h2>
        <?php if (!empty($success)) echo "<p style='color:green;'>$success</p>"; ?>
        <?php if (!empty($error)) echo "<p style='color:red;'>$error</p>"; ?>

        <form class="row g-3 was-validated" method="POST" enctype="multipart/form-data">

            <div class="col-md-4">
                <label for="name" class="form-label text-light">Username</label>
                <input type="text" name="username" class="form-control" id="name" required>
                <div class="invalid-feedback">Please enter your name</div>
            </div>
            <div class="col-md-4">
                <label for="email" class="form-label text-light">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
                <div class="invalid-feedback">Please enter valid email</div>
            </div>
            <div class="col-md-4">
                <label for="pass" class="form-label text-light">Password</label>
                <input type="password" name="password" class="form-control" id="pass" required>
                <div class="invalid-feedback">Please enter password</div>
            </div>
            <div class="col-md-4">
                <label for="gender" class="form-label text-light">Gender</label>
                <select class="form-select" id="gender" required>
                    <option value="">Choose</option>
                    <option value="mail">Mail</option>
                    <option value="femail">Femail</option>
                </select>
                <div class="invalid-feedback">Choose your grender</div>
            </div>
            <div class="col-md-4">
                <label for="job" class="form-label text-light">Job</label>
                <input type="text" name="job" class="form-control" id="job" required>
                <div class="invalid-feedback">Please enter your job</div>
            </div>
            <div class="col-4">
                <label for="image" class="form-label text-light">Upload Image</label>
                <input type="file" name="image" class="form-control" id="image" required>
            </div>
            <div class="mt-3">
                <button type="submit" class="btn btn-warning">Sign Up</button>
            </div>

            <p class="text-white">Are you have an account? <a href="login.php">login</a> </p>

        </form>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>