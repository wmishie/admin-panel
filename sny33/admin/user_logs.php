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
function logEvent($conn, $action, $userId = null, $ipAddress) {
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
        $ipAddress = $_SERVER['REMOTE_ADDR'];

        // Check if the email or student ID already exists
        $sql = "SELECT * FROM users WHERE email = ? OR student_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $studentId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            echo "Email or Student ID already exists.";
            logEvent($conn, 'Registration attempt with existing email or student ID', null, $ipAddress);
        } else {
            // Insert the new user into the database
            $sql = "INSERT INTO users (name, email, student_id) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("sss", $name, $email, $studentId);

            if ($stmt->execute()) {
                $userId = $stmt->insert_id;  // Get the ID of the inserted user
                // Redirect the user to the index.html file
                header("Location: index.html");
                logEvent($conn, 'User registered successfully', $userId, $ipAddress);
                exit;
            } else {
                echo "Error registering user: " . $conn->error;
                logEvent($conn, 'Error registering user', null, $ipAddress);
            }
        }

        $stmt->close();
    } elseif ($action === 'login') {
        $email = $_POST['login-email'];
        $studentId = $_POST['login-student-id'];
        $ipAddress = $_SERVER['REMOTE_ADDR'];

        // Check if the email and student ID match
        $sql = "SELECT * FROM users WHERE email = ? AND student_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $email, $studentId);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            $userId = $user['id'];
            // Redirect the user to the main page
            header("Location: mainpage.html");
            logEvent($conn, 'User logged in successfully', $userId, $ipAddress);
            exit;
        } else {
            echo "Invalid email or student ID.";
            logEvent($conn, 'Login attempt with invalid email or student ID', null, $ipAddress);
        }

        $stmt->close();
    }
}

$conn->close();
?>
