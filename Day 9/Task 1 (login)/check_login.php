    <?php
    session_start();
    require 'connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';
        
        $conn = dbconnect();

        $stmt = $conn->prepare("SELECT * FROM admin WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($user = $result->fetch_assoc()) {

          

            if (password_verify($password, $user['password'])) {
                $_SESSION['user'] = $user['name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['role'] = $user['role'];
                $_SESSION['login_time'] = date("Y-m-d H:i:s");
                header("Location: welcome.php?success=1");
                exit;
            }
        }

        header("Location: login.php?error=Invalid credentials");
        exit;
    }
