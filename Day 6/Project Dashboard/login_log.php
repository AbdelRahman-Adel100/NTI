<?php

$log_file = "logs/login.log";
$logs = [];

if (file_exists($log_file)) {
    $lines = file($log_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $parts = explode(" | ", $line);
        if (count($parts) === 3) {
            $logs[] = [
                'username' => $parts[0],
                'datetime' => $parts[1],
                'status' => $parts[2]
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Logs</title>
    <link href="css/bootstrap.css" rel="stylesheet">
</head>

<body class="bg-black text-white">
    <?php include 'navbar.php'; ?>

    <div class="container mt-4">
        <h2 class="text-center text-white mb-4">Login Logs</h2>
        <?php if (!empty($logs)): ?>
        <table class="table table-striped table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Username</th>
                    <th>Date & Time</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($logs as $log): ?>
                <tr>
                    <td><?= $log['username'] ?></td>
                    <td><?= $log['datetime'] ?></td>
                    <td>
                        <?php
            $status = strtolower(trim($log['status']));

                    if (strpos($status, 'success') !== false) {
                        echo '<span class="text-success fw-bold">Login Successful</span>';
                    } else {
                        echo '<span class="text-danger fw-bold">Login Failed</span>';
                    }
  ?>
                    </td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
        <?php else: ?>
        <p>No login logs available.</p>
        <?php endif; ?>
    </div>
</body>

</html>