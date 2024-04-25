<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Add User</title>
    <style>
        /* Global styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        /* Form container styles */
        .form-container {
            max-width: 500px;
            margin: 50px auto;
            padding: 30px;
            background-color: #ffffff;
            border: 1px solid #e0e0e0;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Input field styles */
        .form-container label {
            display: block;
            margin-bottom: 15px;
        }

        .form-container input[type="text"],
        .form-container input[type="email"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        /* Button styles */
        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #0056b3;
        }
    
    /* Navigation Panel styles */
    .navigation-panel {
        background-color: #333;
        overflow: hidden;
    }

    .nav-link {
        float: left;
        display: block;
        color: white;
        text-align: center;
        padding: 14px 16px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .nav-link:hover {
        background-color: #555;
    }
</style>

</head>
<body>

<div class="navigation-panel">
    <a href="admin_dashboard.php" class="nav-link">Admin Dashboard</a>
    <a href="manage_users.php" class="nav-link">Manage Users</a>
    <a href="user_list.php" class="nav-link">User Lists</a>
</div>


<div class="form-container">
    <h1>Add User</h1>

    <!-- Add User Form -->
    <form method="post" action="">
        <label for="name">
            <input type="text" id="name" name="name" placeholder="Full Name" required>
        </label>
        
        <label for="email">
            <input type="email" id="email" name="email" placeholder="user@example.com" required>
        </label>
        
        <label for="student_id">
            <input type="text" id="student_id" name="student_id" placeholder="123456" required>
        </label>
        
        <input type="submit" name="add_user" value="Add User" class="button">
    </form>

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

    // Handle add user form submission
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['add_user'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $student_id = $_POST['student_id'];

        // Insert user into the database
        $sql = "INSERT INTO users (name, email, student_id) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $name, $email, $student_id);

        if ($stmt->execute()) {
            echo "<p style='color: green;'>Registration successful!</p>";
            // Redirect to Manage Users page
            header("Location: manage_users.php");
            exit;  // Ensure no further code is executed after redirection
        } else {
            echo "<p>Error: " . $stmt->error . "</p>";
        }

        $stmt->close();
    }

    // Close connection
    $conn->close();
    ?>

</div>

</body>
</html>
