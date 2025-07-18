<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 2</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-light">
<?php
//if($_SERVER['HTTP_HOST'] == 'localhost'){
if($_SERVER['REMOTE_ADDR'] == '127.0.0.1'){
      header("Location: denied.php");
exit;
}else{
      header("Location: valid.php");

}
?>
</body>
</html>