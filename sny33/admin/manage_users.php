<!DOCTYPE html>
<html>
<head>
    <title>Manage Users</title>
    <style>
        /* Style for buttons */
        .button {
            display: inline-block;
            padding: 10px 20px;
            margin-right: 10px;
            cursor: pointer;
            text-decoration: none;
            color: #ffffff;
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            text-align: center;
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

<h1>Manage Users</h1>

<!-- Buttons to navigate to Add User and Delete User pages -->
<a href="add_user.php" class="button">Add User</a>
<a href="delete_user.php" class="button">Delete User</a>

</body>
</html>
