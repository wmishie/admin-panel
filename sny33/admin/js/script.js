function toggleLeftPanel() {
    var leftPanel = document.querySelector('.left-panel');
    leftPanel.classList.toggle('hidden');
}

function toggleRightPanel() {
    var rightPanel = document.querySelector('.right-panel');
    rightPanel.classList.toggle('hidden');
}
// Function to toggle visibility of admin panel
function toggleAdminPanel() {
    var adminPanel = document.getElementById('admin-panel');
    adminPanel.classList.toggle('hidden');
}

// Function to handle adding a new user
function addUser() {
    alert("Feature: Add User - To be implemented");
}

// Function to handle deleting a user
function deleteUser() {
    alert("Feature: Delete User - To be implemented");
}

// Function to handle editing a user
function editUser() {
    alert("Feature: Edit User - To be implemented");
}

// Function to handle changing admin password
function changeAdminPassword() {
    alert("Feature: Change Admin Password - To be implemented");
}

// Function to handle managing user roles
function manageUserRoles() {
    alert("Feature: User Role Management - To be implemented");
}

// Function to handle viewing audit logs
function viewAuditLogs() {
    alert("Feature: View Audit Logs - To be implemented");
}

// Function to handle system configuration
function systemConfiguration() {
    alert("Feature: System Configuration - To be implemented");
}

// Function to handle integration settings
function integrationSettings() {
    alert("Feature: Integration Settings - To be implemented");
}

// Function to handle security settings
function securitySettings() {
    alert("Feature: Security Settings - To be implemented");
}

// Function to handle data export/import
function dataExportImport() {
    alert("Feature: Data Export/Import - To be implemented");
}

// Function to handle content moderation
function contentModeration() {
    alert("Feature: Content Moderation - To be implemented");
}

// Function to handle system maintenance
function systemMaintenance() {
    alert("Feature: System Maintenance - To be implemented");
}

// Function to handle help and support
function helpAndSupport() {
    alert("Feature: Help and Support - To be implemented");
}

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