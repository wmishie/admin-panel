<?php
session_start();

// Unset all session variables
session_unset();

// Destroy the session
session_destroy();

// Redirect to login page after logout
header("Location: admin_login.html");
exit();
?>
