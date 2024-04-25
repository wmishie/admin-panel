<?php
session_start();

// Check if admin is logged in, otherwise redirect to login page
if (!isset($_SESSION['admin_logged_in'])) {
    header("Location: admin_login.html");
    exit();
}

// Connect to database and retrieve admin password (Replace with your database connection code)
$admin_password = "current_password_from_database"; // Example: Fetch admin password from database

// Get form data
$current_password = $_POST['current-password'];
$new_password = $_POST['new-password'];
$confirm_password = $_POST['confirm-password'];

// Validate current password
if ($current_password === $admin_password) {
    // Validate new password
    if ($new_password === $confirm_password) {
        // Update password in the database (Replace with your database update code)
        // Example: Update admin password in the database
        // $new_password_hash = password_hash($new_password, PASSWORD_DEFAULT);
        // Your database update query here

        echo "Password changed successfully!";
    } else {
        echo "New password and confirm password do not match.";
    }
} else {
    echo "Incorrect current password.";
}
?>
