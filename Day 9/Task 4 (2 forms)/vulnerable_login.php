<?php
require 'connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $sql = "SELECT * FROM admin WHERE email = '$email' AND password = '$pass'";
            $conn = dbconnect();

    $result = $conn->query($sql);

    if ($user = $result->fetch_assoc()) {
        $_SESSION['user'] = $user['name'];
        echo "Welcome " . $_SESSION['user'];
    } else {
        echo "Login failed!";
    }
}
?>

<form method="POST">
    <input name="email" placeholder="Email"><br>
    <input name="password" placeholder="Password"><br>
    <button>Login</button>
</form>