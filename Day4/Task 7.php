<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 7</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-dark">

    <?php
$keys = ["Monitor" => 1200, "Chair" => 1000, "Headset" => 400, "Keyboard"
=> 300, "Mouse" => 150];

asort($keys);
?>
    <div class="container mt-4">
        <h4 class="text-white">Prouduct Prices</h4>
        <ul class="list-group">
            <?php foreach ($keys as $k => $values): ?>
            <li class="list-group-item d-flex justify-content-between">
                <span><strong><?= strtoupper($k) ?></strong></span>
                <span class="badge bg-primary rounded-pill"><?= 
$values ?> EGP</span>
            </li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>