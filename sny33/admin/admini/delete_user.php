<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$database = "user_management";

$message = "";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $userId = $_POST['user-id'];

    // Update user status to 'deleted'
    $sql = "UPDATE users SET status = 'deleted' WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $userId);

    if ($stmt->execute()) {
        $message = "User deleted successfully.";
    } else {
        $message = "Error deleting user: " . $conn->error;
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete User</title>
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
        .message {
            color: red;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <h1>Delete User</h1>
    <section>
        <form action="" method="post">
            User ID: <input type="number" name="user-id" required><br>
            <input type="submit" value="Delete User">
        </form>
        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
    </section>
</body>
</html>
