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
    $name = $_POST['name'];
    $email = $_POST['email'];
    $studentId = $_POST['student-id'];

    // Check if the email or student ID already exists
    $sql = "SELECT * FROM users WHERE email = ? OR student_id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $email, $studentId);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $message = "Email or Student ID already exists.";
    } else {
        // Insert the new user into the database with active status
        $sql = "INSERT INTO users (name, email, student_id, status) VALUES (?, ?, ?, 'active')";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $studentId);

        if ($stmt->execute()) {
            $message = "User added successfully.";
        } else {
            $message = "Error adding user: " . $conn->error;
        }
    }

    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
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
    <h1>Add User</h1>
    <section>
        <form action="" method="post">
            Name: <input type="text" name="name" required><br>
            Email: <input type="email" name="email" required><br>
            Student ID: <input type="text" name="student-id" required><br>
            <input type="submit" value="Add User">
        </form>
        <?php if ($message): ?>
            <div class="message"><?php echo $message; ?></div>
        <?php endif; ?>
    </section>
</body>
</html>
