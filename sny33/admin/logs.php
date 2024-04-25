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

// Logging function
function logEvent($conn, $action, $userId, $ipAddress) {
    $sql = "INSERT INTO user_logs (action, user_id, login_time, registration_time, ip_address) VALUES (?, ?, NOW(), NOW(), ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sis", $action, $userId, $ipAddress);
    $stmt->execute();
    $stmt->close();
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'];

    if ($action === 'register') {
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
            echo "Email or Student ID already exists.";
            logEvent($conn, 'Registration attempt with existing email or student ID', null, $_SERVER['REMOTE_ADDR']);
        } else {
            // Insert the new user into the database
            $sql = "INSERT INTO users (name, email, student_id) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $name, $email, $studentId);

            if ($stmt->execute()) {
                // Redirect the user to the index.html file
                header("Location: index.html");
                exit;
            } else {
                echo "Error registering user: " . $conn->error;
                logEvent($conn, 'Error registering user', null, $_SERVER['REMOTE_ADDR']);
            }
        }

        $stmt->close();
    } elseif ($action === 'login') {
        $email = $_POST['login-email'];
        $studentId = $_POST['login-student-id'];

        // Check if the email and student ID match
        $sql = "SELECT * FROM users WHERE email = ? AND student_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $studentId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Redirect the user to the main page
            header("Location: mainpage.html");
            exit;
        } else {
            echo "Invalid email or student ID.";
            logEvent($conn, 'Login attempt with invalid email or student ID', null, $_SERVER['REMOTE_ADDR']);
        }

        $stmt->close();
    }
}

$conn->close();
?>
