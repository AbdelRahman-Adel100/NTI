<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-black">
    <?php include 'navbar.php'; ?>
    <div class="text-white container mt-5">
        <h2>Welcome to your dashboard, <?= $_SESSION['username'] ?> !</h2>

        <!--
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <label>Select File Type:
            <select name="file_type">
                <option value="avatar">Avatar</option>
                <option value="product">Product</option>
            </select>
        </label><br><br>
        <input type="file" name="file"><br><br>
        <button type="submit">Upload</button>
    </form>
    <br><a href="logout.php">Logout</a> -->

</body>

</html>