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
          $folder = 'uploads/' . date('Y-m-d') . '/';

          if (!file_exists($folder)) mkdir($folder, 0777, true);
            $fileName = basename($_FILES['image']['name']);
            $ext = pathinfo($fileName, PATHINFO_EXTENSION);
            $new_name = uniqid('img_' , true) . '.' . $ext;
            $target = $folder . time() . "_" . $new_name;
            $allowed = ['image/jpeg', 'image/png'];

            if (in_array($_FILES['image']['type'], $allowed)) {
            move_uploaded_file($_FILES['image']['tmp_name'], $target);

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