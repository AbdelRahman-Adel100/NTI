<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Task 5</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">

    <div class="container mt-5">
        <h2 class="text-center mb-4">Upload photo</h2>

        <?php
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
            $allowed = ['image/jpeg', 'image/png'];
            $fileType = $_FILES["image"]["type"];

            if (in_array($fileType, $allowed)) {
                $fileName = basename($_FILES["image"]["name"]);

            $dotPosition = strrpos($fileName, '.');
            $nameOnly = substr($fileName, 0, $dotPosition);
            $extension = substr($fileName, $dotPosition + 1);
            
            $today = date("Y-m-d");

            $newFileName = $nameOnly . "__" . $today . "." . $extension;

            $targetDir = "uploads/";
            $targetFile = $targetDir . $newFileName;

                if (!is_dir($targetDir)) {
                    mkdir($targetDir, 0777, true);
                }

                move_uploaded_file($_FILES["image"]["tmp_name"], $targetFile);

                echo '<div class="alert alert-success"> Done (Uploaded Successfully) </div>';
            } else {
                echo '<div class="alert alert-danger">Type of URL not allowed </div>';
            }
        } 
    }
    ?>



        <form action="" method="POST" enctype="multipart/form-data" class="was-validated mt-4">

            <div class="input-group mb-3">
                <input type="file" name="image" class="form-control" id="inputGroupFile02" required>
                <label class="input-group-text" for="inputGroupFile02"></label>
                <button class="btn btn-outline-primary" type="submit" id="button-addon2">send</button>
            </div>
        </form>
    </div>

</body>

</html>