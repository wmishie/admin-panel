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
            <label for="system_name">System Name:</label>
            <input type="text" id="system_name" name="system_name" required><br>

            <label for="timezone">Timezone:</label>
            <select id="timezone" name="timezone">
                <option value="America/New_York">America/New_York</option>
                <option value="Europe/London">Europe/London</option>
            </select><br>

            <label for="default_language">Default Language:</label>
            <input type="text" id="default_language" name="default_language" required><br>

            <label for="default_currency">Default Currency:</label>
            <input type="text" id="default_currency" name="default_currency" required><br>

            <!-- System Updates -->
            <h3>System Updates</h3>
            <label for="update_notification">Update Notification:</label>
            <input type="checkbox" id="update_notification" name="update_notification"><br>

            <label for="auto_update">Auto Update:</label>
            <input type="checkbox" id="auto_update" name="auto_update"><br>

            <!-- Backup and Restore -->
            <h3>Backup and Restore</h3>
            <label for="backup_frequency">Backup Frequency:</label>
            <select id="backup_frequency" name="backup_frequency">
                <option value="daily">Daily</option>
                <option value="weekly">Weekly</option>
                <option value="monthly">Monthly</option>
            </select><br>

            <label for="backup_storage">Backup Storage Location:</label>
            <input type="text" id="backup_storage" name="backup_storage" required><br>

            <!-- Customization Options -->
            <h3>Customization Options</h3>
            <label for="logo">Logo:</label>
            <input type="file" id="logo" name="logo"><br>

            <label for="custom_css">Custom CSS:</label>
            <textarea id="custom_css" name="custom_css"></textarea><br>

            <!-- API Keys and Integration -->
            <h3>API Keys and Integration</h3>
            <label for="payment_gateway_key">Payment Gateway API Key:</label>
            <input type="text" id="payment_gateway_key" name="payment_gateway_key"><br>

            <label for="social_media_key">Social Media API Key:</label>
            <input type="text" id="social_media_key" name="social_media_key"><br>

            <!-- Database Configuration -->
            <h3>Database Configuration</h3>
            <label for="db_host">Database Host:</label>
            <input type="text" id="db_host" name="db_host" required><br>

            <label for="db_port">Database Port:</label>
            <input type="text" id="db_port" name="db_port" required><br>

            <!-- Cache and Session Management -->
            <h3>Cache and Session Management</h3>
            <label for="cache_type">Cache Type:</label>
            <select id="cache_type" name="cache_type">
                <option value="file">File-based</option>
                <option value="database">Database</option>
                <option value="redis">Redis</option>
            </select><br>

            <!-- Security Settings -->
            <h3>Security Settings</h3>
            <label for="captcha_enabled">CAPTCHA Enabled:</label>
            <input type="checkbox" id="captcha_enabled" name="captcha_enabled"><br>

            <label for="two_factor_auth">Two-Factor Authentication:</label>
            <input type="checkbox" id="two_factor_auth" name="two_factor_auth"><br>

            <!-- Email Configuration -->
            <h3>Email Configuration</h3>
            <label for="smtp_server">SMTP Server:</label>
            <input type="text" id="smtp_server" name="smtp_server" required><br>

            <label for="smtp_port">SMTP Port:</label>
            <input type="text" id="smtp_port" name="smtp_port" required><br>

            <!-- Add more settings fields as needed -->

            <button type="submit">Save Configuration</button>
        </form>
    </div>
</body>
</html>
