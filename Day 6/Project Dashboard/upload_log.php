<?php

$log_file = "logs/uploads.log";
$logs = [];

if (file_exists($log_file)) {
    $lines = file($log_file, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    foreach ($lines as $line) {
        $parts = explode(" | ", $line);
        if (count($parts) === 5) {
            $logs[] = [
                'username' => $parts[0],
                'datetime' => $parts[1],
                'file_type' => $parts[2],
                'file_path' => $parts[3],
                'mime_type' => $parts[4]
            ];
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Upload Logs</title>
        <link href="css/bootstrap.css" rel="stylesheet">
</head>
<body class="bg-black text-white">
<?php include 'navbar.php'; ?>

<div class="container mt-4">
    <h2 class="text-center text-white mb-4">Upload Logs</h2>
    <?php if (!empty($logs)): ?>
        <table class="table table-striped table-bordered mt-3">
            <thead class="table-dark">
                <tr>
                    <th>Username</th>
                    <th>Date & Time</th>
                    <th>File Type</th>
                    <th>File Path</th>
                    <th>MIME Type</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($logs as $log): ?>
                    <tr>
                        <td><?= htmlspecialchars($log['username']) ?></td>
                        <td><?= htmlspecialchars($log['datetime']) ?></td>
                        <td><?= htmlspecialchars($log['file_type']) ?></td>
                        <td><?= htmlspecialchars($log['file_path']) ?></td>
                        <td><?= htmlspecialchars($log['mime_type']) ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php else: ?>
        <p>No upload logs available.</p>
    <?php endif; ?>
</div>
</body>
</html>
