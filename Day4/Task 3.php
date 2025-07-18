<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 3</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-success">

    <?php
$info = [
        "Name" => "Ahmed Omar",
        "Jop Title" => "FullStack Dev",
        "Department" => "Development",
        "Salary" => "15,000 EGP"
    ];
       ?>
    <div class="container mt-5">
        <h2 class="text-black">Employee's Information</h2>
         <div class="border border-primary border-4">
            <ul class="list-group">
                <?php foreach ($info as $key => $value): ?>

                <li  class="list-group-item list-group-item-action">
                    <strong><?= $key ?>:</strong> <?= $value ?>
                </li>

                <?php endforeach; ?>
            </ul>
                </div>
    </div>

</body>

</html>