<?php
session_start();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Clear session
    if (isset($_POST['clear'])) {
        $_SESSION['users'] = [];
    }

    // Remove last user
    elseif (isset($_POST['remove'])) {
        array_pop($_SESSION['users']);
    }

    // Save user
    elseif (isset($_POST['save'])) {
        $name = $_POST['name'] ?? '';
        $email = $_POST['email'] ?? '';

        if (!empty($name) && !empty($email)) {
            $_SESSION['users'][] = [
                'name' => $name,
                'email' => $email
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Task 3</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-dark d-flex justify-content-center align-items-center vh-100">
    <div class="container mt-5">
        <h2 class="mb-4 text-light">Form</h2>

        <form method="POST" class="was-validated">
            <div class="mt-3">
                <label for="name" class="form-label text-light">Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
            </div>

            <div class="mt-3">
                <label for="email" class="form-label text-light">Email</label>
                <input type="email" name="email" class="form-control" id="email" required>
            </div>

         <div class="mt-3">
                <div class="d-grid gap-2">
                    <button type="submit" name="save" class="btn btn-success">Save</button>
                </div>
            </div><br>
            <div class="d-grid gap-2 d-md-block">
                <button type="submit" name="clear" class="btn btn-warning">Clear session</button>
                <button type="submit" name="remove" class="btn btn-danger">Remove last</button>
            </div>
           </form>

        <?php if (!empty($_SESSION['users'])): ?>
            <div class="mt-5">
                <h4 class="text-light">Saved Users:</h4>
                <ul class="list-group">
                    <?php foreach ($_SESSION['users'] as $user): ?>
                        <li class="list-group-item">
                            <p> user name : <?= htmlspecialchars($user['name']) ?> - user email : <?= htmlspecialchars($user['email']) ?> </p>
                            
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>
    </div>

    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>
