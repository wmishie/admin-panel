<?php
// admin_view_logs.php

session_start();

// Check if admin is logged in
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.html");
    exit();
}

// Retrieve audit logs from the database (assuming $logs is an array of logs)
$logs = []; // Retrieve logs from the database

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Audit Logs</title>
</head>
<body>
    <h2>Audit Logs</h2>
    <table>
        <tr>
            <th>User</th>
            <th>Action</th>
            <th>Timestamp</th>
        </tr>
        <?php foreach ($logs as $log): ?>
            <tr>
                <td><?= $log['user_id']; ?></td>
                <td><?= $log['action']; ?></td>
                <td><?= $log['timestamp']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
