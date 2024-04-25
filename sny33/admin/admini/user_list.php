<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch all users
$sql = "SELECT * FROM users";
$result = $conn->query($sql);

$users = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User List</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333333;
            text-align: center;
        }
        section {
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            padding: 20px;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
        .active {
            color: green;
        }
        .inactive {
            color: orange;
        }
        .deleted {
            color: red;
        }
    </style>
</head>
<body>
    <h1>User List</h1>
    <section>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Student ID</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($users as $user): ?>
                    <tr>
                        <td><?php echo $user['id']; ?></td>
                        <td><?php echo $user['name']; ?></td>
                        <td><?php echo $user['email']; ?></td>
                        <td><?php echo $user['student_id']; ?></td>
                        <td>
                            <?php 
                            $status = isset($user['status']) ? $user['status'] : 'N/A';
                            switch ($status) {
                                case 'active':
                                    echo '<span class="active">Active</span>';
                                    break;
                                case 'inactive':
                                    echo '<span class="inactive">Inactive</span>';
                                    break;
                                case 'deleted':
                                    echo '<span class="deleted">Deleted</span>';
                                    break;
                                default:
                                    echo $status;
                            }
                            ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</body>
</html>
