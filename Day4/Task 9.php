<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task 9</title>
    <link href="css\bootstrap.css" rel="stylesheet">
</head>

<body class="bg-success">
    <div class="container mt-5">
        <h2 class="text-center mb-4 text-light">Products</h2>

        <table class="table table-bordered table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>Name</th>
                    <th>Course</th>
                    <th>Grade</th>
                    <th>Status</th>
                    <th>Details</th>
                </tr>
            </thead>
            <tbody>
                <?php
              $info = [
                ["Name" => "Ahmed", "Course" => "HTML", "Grade" => "75%", "Status" => "Passed",],
                ["Name" => "Omar", "Course" => "JS", "Grade" => "90%", "Status" => "Passed",],
                ["Name" => "Hazem", "Course" => "OOP", "Grade" => "25%", "Status" => "Failed",],
                ["Name" => "Salma", "Course" => "CSS", "Grade" => "66%", "Status" => "Passed",],
                ["Name" => "Ahmed", "Course" => "PHP", "Grade" => "82%", "Status" => "Passed",],
                ["Name" => "Jana", "Course" => "JAVA", "Grade" => "53%", "Status" => "Failed",],
                 ];
                 ?>

                <?php foreach ($info as $key => $inf): ?>
                <tr class="<?php
    if ($inf['Grade'] < 60) {
        echo 'table-danger';
    } elseif ($inf['Grade'] >= 80) {
        echo 'table-success';
    } else {
        echo 'table-warning';
    }
?>">
                    <td><?= $inf['Name'] ?></td>
                    <td><?= $inf['Course'] ?></td>
                    <td><?= $inf['Grade'] ?></td>
                    <td><?= $inf['Status'] ?></td>

                    <td>
                        <button class="btn btn-info btn-sm" data-bs-toggle="modal"
                            data-bs-target="#infoModal<?= $key ?>">
                            View
                        </button>
                    </td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>

        <?php foreach ($info as $key => $inf): ?>
        <div class="modal fade" id="infoModal<?= $key ?>" tabindex="-1" aria-labelledby="modalLabel<?= $key ?>"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalLabel<?= $key ?>">Student Detalis</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="close"></button>
                    </div>
                    <div class="modal-body">
                        <p><strong>Name :</strong> <?= $inf['Name'] ?></p>
                        <p><strong>Course :</strong> <?= $inf['Course'] ?></p>
                        <p><strong>Grade :</strong> <?= $inf['Grade'] ?></p>
                    </div>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <script src="js/bootstrap.bundle.js"></script>

</body>

</html>