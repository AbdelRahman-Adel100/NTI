<?php
$name = '';
$grade = '';
$nameError = '';
$gradeError = '';
$success = false;

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = trim($_POST['name'] ?? '');
    $grade = trim($_POST['grade'] ?? '');

    // Validation
    if (empty($name)) {
        $nameError = "Required";
    }

    if (!is_numeric($grade) || $grade < 10 || $grade > 100) {
        $gradeError = "stu‌ent grade min=10 & max =100";
    }

    if (empty($nameError) && empty($gradeError)) {
        $success = true;

        // Save to CSV file
        $file = fopen("students.csv", "a"); // "a" = append
        $date = date("Y-m-d H:i:s");
        fputcsv($file, [$name, $grade, $date]);
        fclose($file);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>PHP Grade Form</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-dark text-white">

    <div class="container mt-5">
        <h2 class="text-center mb-4">PHP Grade Form</h2>

        <form method="post" action="" class="bg-black p-4 rounded shadow">
            <div class="mb-3">
                <div class="input-group">

                    <input type="text" name="name"
                        class="form-control <?= $nameError ? 'is-invalid' : ($name ? 'is-valid' : '') ?>"
                        placeholder="student name" value="<?= htmlspecialchars($name) ?>">


                    <input type="text" name="grade"
                        class="form-control <?= $gradeError ? 'is-invalid' : ($grade ? 'is-valid' : '') ?>"
                        placeholder="student grade min=10 & max =100" value="<?= htmlspecialchars($grade) ?>">


                    <button type="submit"
                        class="btn <?= $success ? 'btn-success' : ($nameError || $gradeError ? 'btn-danger' : 'btn-primary') ?>">
                        <?= $success ? '✔ sent' : 'send' ?>
                    </button>
                </div>

                <?php if ($nameError): ?>
                <div class="invalid-feedback"><?= $nameError ?></div>
                <?php endif; ?>

                <?php if ($gradeError): ?>
                <div class="invalid-feedback"><?= $gradeError ?></div>
                <?php endif; ?>

                <?php if ($success): ?>
                <div class="alert alert-success mt-3">✔ Data saved to students.csv!</div>
                <?php endif; ?>
        </form>
    
    <div class="text-center mt-4">
        <a href="File.php" class="btn btn-primary">Go to File</a>
    </div>

    </div>

</body>

</html>