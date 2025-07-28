<?php
require 'connect.php'; 
$msg = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'] ?? '';
    $email    = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    $role= $_POST['role'] ?? 'user'; 

    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    $conn = dbconnect();

    $stmt = $conn->prepare("INSERT INTO admin (name, email, password, role) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $hashedPassword ,$role);

    if ($stmt->execute()) {
        $msg = "Registration successful. You can login now";
    } else {
        $msg = "Error: " . $stmt->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>
<body class="bg-light">
<div class="container mt-5">
    <?php if ($msg): ?>
        <div class="alert alert-info"><?= $msg ?></div>
    <?php endif; ?>
    <form method="POST">
        <h3>Register</h3>
        <div class="mb-3">
            <input type="text" name="name" class="form-control" required placeholder="Name">
        </div>
        <div class="mb-3">
            <input type="email" name="email" class="form-control" required placeholder="Email">
        </div>
        <div class="mb-3">
            <input type="password" name="password" class="form-control" required placeholder="Password">
        </div>

        <div class="mb-3">
            <label for="role">Choose Role:</label>
            <select name="role" class="form-select" required>
                <option value="user" selected>User</option>
                <option value="admin">Admin</option>
            </select>
        </div>

        <button class="btn btn-primary">Register</button> <br>
                <a href="login.php">back</a>

    </form>
</div>
</body>
</html>
