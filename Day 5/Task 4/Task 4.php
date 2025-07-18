<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <title>Task 4 (Upload photo)</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center mb-4">Upload photo</h2>

        <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
            $allowed = ['image/jpeg', 'image/png'];
            $fileType = $_FILES["image"]["type"];

            if (in_array($fileType, $allowed)) {
                $fileName = basename($_FILES["image"]["name"]);
                $targetDir = "uploads/";
                $targetFile = $targetDir . $fileName;

                if (!is_dir($targetDir)) {
                    mkdir($targetDir, 0777, true);
                }

                move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

                echo '<div class="alert alert-success"> Done (Uploaded Successfully) </div>';
                echo '<img src="' . $targetFile . '" class="img-fluid rounded shadow mt-3" style="max-width:400px;">';
            } else {
                echo '<div class="alert alert-danger">Type of URL not allowed </div>';
            }
        } 
    }
    ?>

        <form action="" method="POST" enctype="multipart/form-data" class="mt-4">
            <div class="mb-3">
                <label for="image" class="form-label">Choose photo (JPG or PNG Only):</label>
                <input class="form-control" type="file" name="image" id="image" required>
            </div>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>

</body>

</html>