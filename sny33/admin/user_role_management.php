<!-- admin_interface.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Role Management</title>
</head>
<body>
    <h2>User Role Management</h2>
    <table>
        <tr>
            <th>Username</th>
            <th>Role</th>
            <th>Action</th>
        </tr>
        <?php
        // Fetch users and their roles from the database
        $users = []; // Retrieve users from the database

        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>{$user['username']}</td>";
            echo "<td>{$user['role_name']}</td>";
            echo "<td><a href='edit_user.php?id={$user['id']}'>Edit</a></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
