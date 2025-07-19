<?php
session_start();

$name = $_SESSION['name'] ?? '';
$desc = $_SESSION['desc'] ?? '';
$email = $_SESSION['email'] ?? '';
$images = $_SESSION['images'] ?? [];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Products</title>
    <link rel="stylesheet" href="css/bootstrap.css">
</head>
<body class="bg-dark text-light">
<div class="container mt-5">
    <h2 class="text-center mb-5">Products</h2>

    <div class="row">
        <?php foreach ($images as $img): ?>
            <div class="col-md-4 mb-4">
                <div class="card h-100">
                    <img src="<?= $img ?>" class="card-img-top" >
                    <div class="card-body">
                        <h5 class="card-title"><?= $name ?></h5>
                        <p class="card-text"><?= $desc ?></p>
                    </div>
                    <div class="card-footer text-muted">
                        added by <a href="mailto:<?= $email ?>"><?= $email ?></a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
            <a href="products.php" class="btn btn-primary mt-3">Back to products</a>

</div>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
