<?php
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sidebar.css">
    <title>Sidebar- wazawa_hub</title>
    <script></script>
</head>
<body>
<div class="sidebar">
    <h2>Wazawa Hub</h2>
    <ul>
        <li><a href="admin_dashboard.php">Dashboard</a></li>

        <!-- Common Links for All Users -->
        <li><a href="profile.php">Your Profile</a></li>
        <li><a href="events.php">Upcoming Events</a></li>
        <li><a href="projects.php">Community Projects</a></li>
        <li><a href="resources.php">Resources</a></li>
        <li><a href="announcements.php">Announcements</a></li>

        <!-- Admin-Only Links -->
        <?php if ($_SESSION['role'] == 'admin') { ?>
            <h3>Admin Controls</h3>
            <li><a href="add_event.php">Add Event</a></li>
            <li><a href="add_project.php">Add Project</a></li>
            <li><a href="add_resource.php">Add Resource</a></li>
            <li><a href="add_announcement.php">Add Announcement</a></li>
        <?php } ?>
    </ul>
</div>
<script src="js/sidebar.js"></script>
</body>
</html>