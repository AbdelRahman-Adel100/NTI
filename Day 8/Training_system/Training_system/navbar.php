<?php
//$goto = (pathinfo(getcwd())["basename"] == "training_system" ? '' : '../');
$goto = (strtolower(pathinfo(getcwd())["basename"]) == "training_system" ? '' : '../');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>
    <link href="css/bootstrap.css" rel="stylesheet">

</head>

<body>
    <nav class="navbar navbar-expand-lg bg-black">
        <div class="container-fluid">
            <span class="navbar-text  text-white"><strong>Training System</strong> </span>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-primary"
                            href="<?= $goto ?>students/students.php">Students</a></li>
                    <li class="nav-item"><a class="nav-link text-primary"
                            href="<?= $goto ?>courses/courses.php">Courses</a></li>
                    <li class="nav-item"><a class="nav-link text-primary "
                            href="<?= $goto ?>enrollments/enrollments.php">Enrollments</a></li>
                </ul>
            </div>
        </div>
    </nav>
</body>

</html>