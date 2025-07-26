<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 1</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-danger">

    <?php
$books = ["Clean Code", "The Pragmatic Programmer", "Design Patterns", "You 
Don't Know JS", "Eloquent JavaScript"];
?>
    <div class="container mt-5">
        <h2 class="text-light mb-4">Book Titles</h2>
        <ul class="list-group">
            <?php foreach ($books as $book): ?>
            <li class="list-group-item"><?= $book ?></li>
            <?php endforeach; ?>
        </ul>
    </div>

</body>

</html>