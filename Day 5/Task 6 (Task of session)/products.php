<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST['pName'] ?? '';
    $desc = $_POST['des'] ?? '';
 
    $uploaded = [];

    if (!empty($_FILES['images']['name'][0])) {
        foreach ($_FILES['images']['tmp_name'] as $key => $tmp_name) {
            $type = $_FILES['images']['type'][$key];
            $size = $_FILES['images']['size'][$key];
            $fileName = time() . "_" . basename($_FILES['images']['name'][$key]);
            $uploadDir = "uploads/";
            $uploadPath = $uploadDir . $fileName;

            if (!is_dir($uploadDir)) mkdir($uploadDir);

            $allowed = ['image/jpeg', 'image/jpg', 'image/png'];
            if (in_array($type, $allowed) && $size <= 4 * 1024 * 1024) {
                if (move_uploaded_file($tmp_name, $uploadPath)) {
                    $uploaded[] = $uploadPath;
                }
            }
        }
    }
    $_SESSION['name'] = $name;
    $_SESSION['desc'] = $desc;
    $_SESSION['images'] = $uploaded;

    header("Location: displayProducts.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-dark d-flex justify-content-center align-items-center vh=100">
    <div class="container mt-5">
        <h2 class="mb-4  text-light">Products</h2>
        <form action="" method="POST" enctype="multipart/form-data" class="mt-4">
            <div class="row">
                <div class="col">
                    <label for="name" class="form-label text-light">Product Name</label>
                    <input type="text" name="pName" class="form-control">
                </div>
                <div class="col">
                    <label for="name" class="form-label text-light">Description</label>
                    <input type="text" name="des" class="form-control">
                </div>


                <div class="mb-3">
                    <label>Product Images</label>
                    <input type="file" name="images[]" class="form-control" multiple required>
                </div>

            </div>
        <a href="login.php" class="btn btn-primary mt-3">Back to Login</a>
        <a href="welcome.php" class="btn btn-primary mt-3">Back to Welcome</a>
        <button type="submit" class="btn btn-primary mt-3">Add Product</button>

        </form>
           </div>
    <script src="js/bootstrap.bundle.js"></script>
</body>

</html>