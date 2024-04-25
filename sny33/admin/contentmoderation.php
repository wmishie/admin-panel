<!-- system_configuration.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System Configuration</title>
    <style>
        /* Basic CSS styles */
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            background-color: #f9f9f9;
        }
        h2 {
            color: #333;
        }
        label {
            font-weight: bold;
        }
        input[type="text"], input[type="password"], select {
            width: 100%;
            padding: 8px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>System Configuration</h2>
        <form action="save_configuration.php" method="POST">
            <!-- General Settings -->
            <!-- General settings fields here -->

            <!-- Integration Settings -->
            <!-- Integration settings fields here -->

            <!-- Security Settings -->
            <!-- Security settings fields here -->

            <!-- Data Import/Export Settings -->
            <!-- Data import/export settings fields here -->

            <!-- Content Moderation Settings -->
            <h3>Content Moderation Settings</h3>
            <!-- Review Posts -->
            <label for="post_review">Review Posts:</label>
            <input type="checkbox" id="post_review" name="post_review"><br>

            <!-- Flagged Content -->
            <label for="flagged_content">Flagged Content:</label>
            <input type="checkbox" id="flagged_content" name="flagged_content"><br>

            <!-- Add more content moderation settings fields as needed -->

            <!-- Email Configuration -->
            <!-- Email configuration fields here -->

            <!-- Add more settings fields as needed -->

            <button type="submit">Save Configuration</button>
        </form>
    </div>
</body>
</html>
