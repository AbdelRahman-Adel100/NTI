<?php
$name = $_POST['namee'] ?? '';
$email = $_POST['emaill'] ?? '';
$pass = $_POST['pass'] ?? '';
$imgPath = '';
$showModal = false;

if ($_SERVER["REQUEST_METHOD"] == 'POST') {
    $showModal = true;

    if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
        $allowed = ['image/jpeg', 'image/png', 'image/jpg'];
        $fileType = $_FILES["image"]["type"];

        if (in_array($fileType, $allowed)) {
            $fileName = time() . "_" . basename($_FILES["image"]["name"]);
            $targetDir = "uploads/";
            $targetFile = $targetDir . $fileName;

            if (!is_dir($targetDir)) {
                mkdir($targetDir, 0777, true);
            }

            if (move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile)) {
                $imgPath = $targetFile;
            }
        }
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

<body class="bg-dark">

    <div class="container mt-5">
        <h2 class="mb-4 text-info-emphasis">Sign Up</h2>

        <form class="was-validated" method="POST" enctype="multipart/form-data">
            <div class="mt-3">
                <label for="name" class="form-label text-light">Name</label>
                <input type="text" name="namee" class="form-control" id="name" required>
                <div class="invalid-feedback">Please enter name</div>
            </div>

            <div class="mt-3">
                <label for="email" class="form-label text-light">Email</label>
                <input type="email" name="emaill" class="form-control" id="email" required>
                <div class="invalid-feedback">Please enter valid email</div>
            </div>

            <div class="mt-3">
                <label for="pass" class="form-label text-light">Password</label>
                <input type="password" name="pass" class="form-control" id="pass" required>
                <div class="invalid-feedback">Please enter password</div>
            </div>

            <div class="mt-3">
                <label for="image" class="form-label text-light">Upload Image</label>
                <input type="file" name="image" class="form-control" id="image" required>
            </div>

            <div class="mt-3">
                <button type="submit" class="btn btn-warning">Sign Up</button>
            </div>
        </form>
    </div>

    <?php if ($showModal): ?>
    <div class="modal fade show d-block" id="exampleModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                <h5 class="modal-title m-3">User Data</h5>
                <div class="modal-header">
                    <div class="alert alert-success w-100 text-center">Account Created Successfully</div>
                    <button type="button" class="btn-close"
                        onclick="window.location.href=window.location.pathname;"></button>
                </div>
                <div class="modal-body">
                    <?php if (!empty($imgPath)): ?>
                    <img src="<?= $imgPath ?>" class="img-fluid img-thumbnail" style="max-width: 200px;">
                    <?php else: ?>
                    <p class="text-muted">No image uploaded</p>
                    <?php endif; ?>

                    <p><strong><?= $name; ?></strong></p>
                    <p><?= $email ?></p>
                    <p><strong>Password:</strong> Private info****</p>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>

    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>