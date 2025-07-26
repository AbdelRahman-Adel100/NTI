<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload</title>
    <link href="css/bootstrap.css" rel="stylesheet">

</head>


<body class="bg-black text-white">
    <?php include 'navbar.php'; ?>
    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
    $file_type = $_POST['file_type'] ?? 'unknown';
    $username = $_SESSION['username'];
    $file = $_FILES["file"];
    $upload_dir = "uploads/";
    
    if (!is_dir($upload_dir)) mkdir($upload_dir);

    if ($file["error"] == 0) {
        $newName = time() . "_" . basename($file["name"]);
        $full_path = $upload_dir . $newName;
        $mime = mime_content_type($file["tmp_name"]);

        if (move_uploaded_file($file["tmp_name"], $full_path)) {

            $logLine = "$username | " . date("Y-m-d H:i:s") . " | $file_type | $full_path | $mime\n";
            file_put_contents("logs/uploads.log", $logLine, FILE_APPEND);
            $success = "File uploaded successfully.";
        } else {
            $error = "Failed to move file.";
        }
    }
}
?>


    <div class="container mt-5">
        <h2 class="text-center mb-4">Upload Image</h2>

        <?php
if (!empty($success)) echo "<div class='alert alert-success'>$success</div>";
if (!empty($error)) echo "<div class='alert alert-danger'>$error</div>";
?>



        <form action="" method="POST" enctype="multipart/form-data" class="mt-4">
            <div class="md-4">
                <input class="form-control" type="file" name="file" id="image" required>
                <br>
                <select class="form-select" name="file_type" id="type" required>
                    <option value="">Select type</option>
                    <option value="avatar">Avatar</option>
                    <option value="product">Product</option>
                </select>
            </div><br>
            <button type="submit" class="btn btn-primary">Upload</button>
        </form>
    </div>

</body>

</html>