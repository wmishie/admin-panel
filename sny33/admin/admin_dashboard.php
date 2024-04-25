<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/styles.css"> <!-- Link to your CSS file -->
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            overflow: hidden; /* Prevent page scrolling */
        }
        .container {
            display: flex;
            height: 100%;
        }
        .left-panel {
            flex: 1;
            padding: 20px;
            overflow-y: auto; /* Allow vertical scrolling if needed */
            display: flex;
            flex-direction: column;
        }
        .columns {
            display: flex;
            flex-wrap: wrap;
            gap: 20px; /* Adjust the gap between columns */
            margin-bottom: 20px;
        }
        .column {
            flex: 1;
        }
        .component-container {
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
        }
        .component-container h3 {
            margin-top: 0;
        }
        @media (max-width: 768px) {
            .right-panel {
                display: none; /* Hide right panel on smaller screens */
            }
            .left-panel {
                flex: 1; /* Ensure left panel stretches to fill page */
            }
        }
        .dropdown-container {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }
        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
            z-index: 1;
            left: 0;
        }
        .dropdown-container:hover .dropdown-content {
            display: block;
        }
        .dropdown-button {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            cursor: pointer;
        }
        .dropdown-button:hover {
            background-color: #0056b3;
        }
        .dropdown-content a {
            color: black;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
        }
        .dropdown-content a:hover {
            background-color: #f1f1f1;
        }
        .active-dashboard {
            flex: 2;
        }
        /* Style for the smaller hamburger icon */
        .hamburger {
            display: inline-block;
            cursor: pointer;
            padding: 5px;
            background-color: #ddd;
            border: 1px solid #999;
            border-radius: 5px;
            position: absolute;
            top: 20px;
            left: 20px;
        }
        /* Style for the lines of the smaller hamburger icon */
        .hamburger .line {
            width: 20px;
            height: 2px;
            background-color: #333;
            margin: 4px 0;
        }
        /* Style for the dropdown menu */
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 30px;
            left: 0;
            background-color: #fff;
            border: 1px solid #999;
            border-radius: 5px;
            padding: 10px;
            z-index: 1;
        }
        /* Style to show the dropdown menu */
        .show {
            display: block;
        }
    </style>
</head>
<body>
<!-- Smaller Hamburger icon -->
<div class="hamburger" onclick="toggleDropdown()">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
</div>

<!-- Dropdown menu -->
<div class="dropdown-menu" id="dropdownMenu">
    <ul>
        <li><a href="#">Add User</a></li>
        <li><a href="#">Delete User</a></li>
        <li><a href="edit-user.html">Edit User</a></li>
        <li><a href="changeadminpassword.html">Change Admin Password</a></li> 
        <li><a href="user_role_management.php">User Role Management</a></li> 
        <li><a href="admin_view_logs.php">View Audit Logs</a></li> 
        <li><a href="system_configuration.php">System Configuration</a></li>
        <li><a href="systemconfiguration.php">Integration Settings</a></li>
        <li><a href="securitysettings.php">Security Settings</a></li> 
        <li><a href="datatransfermanagement.php">Data Export/Import</a></li>
        <li><a href="contentmoderation.php">Content Moderation</a></li> 
        <li><a href="systemmaitenance.php">System Maintenance</a></li> 
        <li><a href="support.php">Help and Support</a></li> 
    </ul>
</div>

<div class="container">
    <div class="left-panel" id="left-panel">
        <h2>Admin Dashboard</h2>
        <div class="columns">
            <div class="column">
                <div class="component-container">
                    <!-- Content Publishing Workflow -->
                    <h3>Content Publishing Workflow</h3>
                    <!-- Content publishing workflow features here -->
                </div>

                <div class="component-container">
                    <!-- User Feedback -->
                    <h3>User Feedback</h3>
                    <!-- User feedback features here -->
                </div>
            </div>
            <div class="column">
                <div class="component-container">
                    <!-- Notifications and Alerts -->
                    <h3>Notifications and Alerts</h3>
                    <!-- Notifications and alerts features here -->
                </div>

                <div class="component-container">
                    <!-- Analytics and Reporting -->
                    <h3>Analytics and Reporting</h3>
                    <!-- Analytics and reporting features here -->
                </div>
            </div>
            <div class="column">
                <div class="component-container">
                    <!-- Content Management -->
                    <h3>Content Management</h3>
                    <!-- Content management features here -->
                </div>

                <div class="component-container">
                    <!-- User Management -->
                    <h3>User Management</h3>
                    <!-- User management features here -->
                </div>
            </div>
        </div>
    </div>
</div>

<script>
   // Function to toggle the dropdown menu
   function toggleDropdown() {
        var dropdownMenu = document.getElementById("dropdownMenu");
        dropdownMenu.classList.toggle("show");
    }

    // Close the dropdown menu if clicked outside of it
    window.onclick = function(event) {
        var dropdownMenu = document.getElementById("dropdownMenu");
        if (!event.target.matches('.hamburger') && !event.target.matches('.dropdown-menu')) {
            dropdownMenu.classList.remove('show');
        }
    }

</script>

</body>
</html>
