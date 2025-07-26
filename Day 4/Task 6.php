<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 6</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-success">
    <?php
$course = ["HTML", "CSS", "JS", "PHP"];
array_push($course, "MySQL");
array_unshift($course, "Git");
array_pop($course);
array_shift($course);
?>
    <div class="container mt-4">
        <h3 class="mb-3">Available Courses</h3>
        <ul class="list-group">
            <?php foreach ($course as $co): ?>
            <li class="list-group-item"><?= $co ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>