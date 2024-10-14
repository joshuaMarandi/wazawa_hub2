<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start(); // Start the session only if it hasn't been started yet
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/sidebar.css">
    <link rel="stylesheet" href="css/styles.css"> <!-- Ensure this is linked as well -->
    <title>Sidebar - Wazawa Hub</title>
</head>
<body>
    <button class="openbtn">☰</button> <!-- Toggle button -->

    <div class="sidebar closed">
        <h2>Wazawa Hub</h2>
        <ul>
            <li><a href="member_dashboard.php">Dashboard</a></li>
            <li><a href="profile.php">Your Profile</a></li>
            <li><a href="events.php">Upcoming Events</a></li>
            <li><a href="projects.php">Community Projects</a></li>
            <li><a href="resources.php">Resources</a></li>
            <li><a href="announcements.php">Announcements</a></li>

            <!-- Admin-Only Links -->
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin') { ?>
                <h3>Admin Controls</h3>
                <li><a href="add_event.php">Add Event</a></li>
                <li><a href="add_project.php">Add Project</a></li>
                <li><a href="add_resource.php">Add Resource</a></li>
                <li><a href="add_announcement.php">Add Announcement</a></li>
            <?php } ?>
        </ul>
    </div>

    <div class="content">
        <!-- Your content goes here -->
    </div>

    <script src="js/sidebar.js"></script>
</body>
</html>
