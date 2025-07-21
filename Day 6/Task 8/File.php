<?php
$students = [];

if (file_exists("students.csv")) {
    $file = fopen("students.csv", "r");
    while (($data = fgetcsv($file)) !== false) {
        $students[] = $data; 
    }
    fclose($file);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Grades</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body class="bg-dark text-white">

<div class="container mt-5">
    <h2 class="text-center mb-4">Saved Student Grades</h2>

    <?php if (count($students) > 0): ?>
        <table class="table table-bordered table-striped table-dark">
            <thead class="table-light text-dark">
                <tr>
                    <th>#</th>
                    <th>Student Name</th>
                    <th>Grade</th>
                    <th>Submitted At</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($students as $index => $student): ?>
                    <tr>
                        <td><?= $index + 1 ?></td>
                        <td><?= htmlspecialchars($student[0]) ?></td>
                        <td><?= htmlspecialchars($student[1]) ?></td>
                        <td><?= htmlspecialchars($student[2]) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <div class="alert alert-warning text-center">No student data found.</div>
    <?php endif; ?>

    <div class="text-center mt-4">
        <a href="Task 8 (File system).php" class="btn btn-primary"> Back to Form</a>
    </div>
</div>

</body>
</html>
