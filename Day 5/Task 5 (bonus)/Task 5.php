<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>Task 5 (Bonus)</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-light">
    <div class="container mt-5">
        <h2 class="mb-4 text-center">Upload Multiple photos</h2>

        <?php
    $uploadedImages = []; 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $allowedExt = ["jpg", "jpeg"];
        $allowedTypes = ["image", "wave"];
        $maxSize = 4 * 1024 * 1024; 

        $errors = [];
        $uploads = [];

        foreach ($_FILES['images']['tmp_name'] as $index => $tmpName) {
            $fileName = $_FILES['images']['name'][$index];
            $fileSize = $_FILES['images']['size'][$index];
            $fileType = $_FILES['images']['type'][$index];
            $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $mainType = explode('/', $fileType)[0];

            if (!in_array($fileExt, $allowedExt)) {
                $errors[] = "Invalid URL: $fileName";
            } elseif ($fileSize > $maxSize) {
                $errors[] = "Size greater than 4MB: $fileName";
            } elseif (!in_array($mainType, $allowedTypes)) {
                $errors[] = "Type not allowed: $fileName";
            } else {
                $uploads[] = [
                    'tmp' => $tmpName,
                    'name' => uniqid() . "_" . $fileName
                ];
            }
        }

        if (!empty($errors)) {
            echo '<div class="alert alert-danger"><ul>';
            foreach ($errors as $err) echo "<li>$err</li>";
            echo '</ul></div>';
        } else {
            $uploadDir = "uploads/";
            if (!is_dir($uploadDir)) mkdir($uploadDir);

            foreach ($uploads as $file) {
                $targetPath = $uploadDir . $file['name'];
                move_uploaded_file($file['tmp'], $targetPath);
                $uploadedImages[] = $targetPath;
            }

            echo '<div class="alert alert-success">Done (Uploaded Successfully)!</div>';
        }
    }
    ?>

        <form method="POST" enctype="multipart/form-data" class="mb-5">
            <div class="mb-3">
                <label class="form-label">Choose photo (jpg, jpeg):</label>
                <input type="file" name="images[]" class="form-control" multiple required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>

        <?php if (!empty($uploadedImages)) : ?>
        <div class="row">
            <?php foreach ($uploadedImages as $imgPath) : ?>
            <div class="col-md-3 mb-4">
                <div class="card shadow-sm">
                    <img src="<?= $imgPath ?>" class="card-img-top" alt="image">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <?php endif; ?>
    </div>
</body>
<script src="js/bootstrap.bundle.js"></script>

</html>