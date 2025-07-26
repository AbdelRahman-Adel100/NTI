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
}
    }
}


$images = array_diff(scandir($uploadDir), ['.', '..']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Gallery</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-black text-white">
    <?php include 'navbar.php'; ?>


    <div class="container py-4">

        <h2 class="text-center text-white mb-4">Gallery</h2>


        <?= $alert ?>
        <table class="table table-bordered table-striped bg-white">
            <thead class="table-secondary">
                <tr>
                    <th>Image</th>
                    <th>Image Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($images as $img): ?>

                <tr>
                    <td><img src="<?= $uploadDir . $img ?>" class="card-img-top" style="height: 50px; width: 50px ;">
                    </td>
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