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
            <h3>Integration Settings</h3>
            <!-- API keys -->
            <label for="google_api_key">Google API Key:</label>
            <input type="text" id="google_api_key" name="google_api_key"><br>

            <label for="stripe_api_key">Stripe API Key:</label>
            <input type="text" id="stripe_api_key" name="stripe_api_key"><br>

            <!-- Webhook URLs -->
            <label for="webhook_url">Webhook URL:</label>
            <input type="text" id="webhook_url" name="webhook_url"><br>

            <!-- External Service URLs -->
            <label for="external_service_url">External Service URL:</label>
            <input type="text" id="external_service_url" name="external_service_url"><br>

            <!-- Add more integration settings fields as needed -->

            <!-- Database Configuration -->
            <!-- Database configuration fields here -->

            <!-- Security Settings -->
            <!-- Security settings fields here -->

            <!-- Email Configuration -->
            <!-- Email configuration fields here -->

            <!-- Add more settings fields as needed -->

            <button type="submit">Save Configuration</button>
        </form>
    </div>
</body>
</html>
