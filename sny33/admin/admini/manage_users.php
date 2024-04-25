<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Manage Users</title>
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
            text-align: center;
        }
        form {
            display: inline-block;
            margin-top: 10px;
        }
        input[type="submit"] {
            background-color: #007bff;
            border: none;
            border-radius: 4px;
            color: #ffffff;
            cursor: pointer;
            font-size: 16px;
            margin: 0 10px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1>Manage Users</h1>
    <section>
        <form action="add_user.php" method="get">
            <input type="submit" value="Add User">
        </form>
        <form action="delete_user.php" method="get">
            <input type="submit" value="Delete User">
        </form>
    </section>
</body>
</html>
