<?php
session_start();

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if username and password are set
    if (isset($_POST['username']) && isset($_POST['password'])) {
        // Retrieve username and password from form
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Validate admin credentials (You should replace this with your actual authentication logic)
        $admin_username = "admin"; // Change this to your admin username
        $admin_password = "password"; // Change this to your admin password

        // Check if username and password match
        if ($username === $admin_username && $password === $admin_password) {
            // Set session variable to indicate admin is logged in
            $_SESSION['admin_logged_in'] = true;

            // Redirect to dashboard if authentication is successful
            header("Location: admin_dashboard.php");
            exit();
        } else {
            // Display error message if authentication fails
            echo "Invalid username or password. Please try again.";
        }
    } else {
        // Display error message if username or password is not set
        echo "Username and password are required.";
    }
} else {
    // Redirect to login page if accessed directly without form submission
    header("Location: admin_login.html");
    exit();
}
?>
