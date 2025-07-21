<?php
$uploadDir = "uploads/";
$alert = '';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['delete'])) {
    $fileToDelete = $_POST['delete'];

    if (!empty($fileToDelete)) {
        $filePath = $uploadDir . basename($fileToDelete);
        if (file_exists($filePath)) {
            unlink($filePath);
            $alert = '<div class="alert alert-success">Deleted successfully</div>';
        } else {
            $alert = '<div class="alert alert-danger">File not found</div>';
        }
    } else {
        $alert = '<div class="alert alert-warning">No data sent</div>';
    }
}

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_FILES['images'])) {
    foreach ($_FILES['images']['tmp_name'] as $index => $tmpName) {
        $name = $_FILES['images']['name'][$index];
        $type = $_FILES['images']['type'][$index];
        $allowed = ['image/jpeg', 'image/png', 'image/jpg'];

        if (in_array($type, $allowed)) {
            move_uploaded_file($tmpName, $uploadDir . basename($name));
        }
    }
}

$images = array_diff(scandir($uploadDir), ['.', '..']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Task 7 and 8</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body class="bg-dark">

<div class="container py-4">

    <h2 class="text-center text-success mb-4">Images Gallery</h2>


    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-4 mb-4">
        <?php foreach ($images as $img): ?>
            <div class="col">
                <div class="card shadow">
                    <img src="<?= $uploadDir . $img ?>" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body text-center">
                        <p class="card-text"><?= $img ?></p>
                        <form method="POST">
                            <input type="hidden" name="delete" value="<?= $img ?>">
                        </form>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <hr>

    <h3 class="text-success mb-3">Upload Images</h3>
    <form method="POST" enctype="multipart/form-data" class="mb-4">
        <div class="input-group">
            <input type="file" name="images[]" multiple class="form-control" required>
            <button type="submit" class="btn btn-primary">Upload</button>
        </div>
    </form>
    <?= $alert ?>

    <h3 class="text-success mb-3">Images List</h3>
    <table class="table table-bordered table-striped bg-white">
        <thead class="table-secondary">
            <tr>
                <th>#</th>
                <th>Image Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?= $i=1 ?>
        <?php foreach ($images as $img): ?>
            
            <tr>
                <td><?= $i++ ?></td> 
                <td><?= $img ?></td>
                <td>
                    <form method="POST" class="d-inline">
                        <input type="hidden" name="delete" value="<?= $img ?>">
                        <button class="btn btn-danger btn-sm">Delete</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

</div>

</body>
</html>
