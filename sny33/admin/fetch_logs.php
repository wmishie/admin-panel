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

// Fetch user logs from the database
$sql = "SELECT * FROM user_logs ORDER BY id DESC LIMIT 10";  // Fetch last 10 logs
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['action'] . "</td>";
        echo "<td>" . $row['user_id'] . "</td>";
        echo "<td>" . $row['login_time'] . "</td>";
        echo "<td>" . $row['registration_time'] . "</td>";
        echo "<td>" . $row['ip_address'] . "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No logs found</td></tr>";
}

$conn->close();
?>
