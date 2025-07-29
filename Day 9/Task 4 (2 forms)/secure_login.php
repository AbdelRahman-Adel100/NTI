<?php
require 'connect.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $conn = dbconnect();
    
    $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ?");
                

    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($user = $result->fetch_assoc()) {
        if (password_verify($pass, $user['password'])) {
            $_SESSION['user'] = $user['name'];
            echo "Welcome " . $_SESSION['user'];
        } else {
            echo "Wrong password!";
        }
    } else {
        echo "No user found!";
    }
}
?>

<form method="POST">
    <input name="email" placeholder="Email"><br>
    <input name="password" placeholder="Password"><br>
    <button>Login</button>
</form>
