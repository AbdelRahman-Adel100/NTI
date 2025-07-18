<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 8</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-black">

<?php
$emp = [
"Ali" => 7500,
"Omar" => 2500,
"Khaled" => 10000,
"Adam" => 4800,
"Jana" => 5010
];
$arr = array_filter($emp, function($sal) {
return $sal >= 5000;
});
?>
<div class="container mt-4">
<h4 class="text-light">High Salary</h4>
<ul class="list-group">
<?php foreach ($arr as $name => $sal): ?>
<li class="list-group-item d-flex justify-content-between">
<strong><?= $name ?></strong>
<span class="badge bg-primary"><?= $sal ?>EGP</span>
</li>
<?php endforeach; ?>
</ul>
</div>

</body>

</html>