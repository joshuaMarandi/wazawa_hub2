<?php include 'header.php';
 include 'member_sidebar.php'; 


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/header.css">
    <title>Document</title>
</head>
<body>
<?php include 'db.php'; ?>

<div class="content">
    <h2 style="margin-top: 40px;">Member Dashboard</h2>
    <p>Welcome, member! Here's what's happening in the Wazawa Hub:</p>

    <!-- Profile Section -->
    <div class="activity-card">
        <h3>Your Profile</h3>
        <p>View or update your profile information</p>
        <a href="profile.php" class="btn">View Profile</a>
    </div>

    <!-- Events Section -->
    <div class="activity-card">
        <h3>Upcoming Events</h3>
        <ul>
            <?php
            $stmt = $pdo->query('SELECT title, event_date FROM events ORDER BY event_date ASC LIMIT 3');
            while ($event = $stmt->fetch()) {
                echo '<li>' . $event['title'] . ' - ' . date('F j, Y', strtotime($event['event_date'])) . '</li>';
            }
            ?>
        </ul>
        <a href="events.php" class="btn">View All Events</a>
    </div>

    <!-- Projects Section -->
    <div class="activity-card">
        <h3>Community Projects</h3>
        <p>Join ongoing projects or start your own!</p>
        <a href="projects.php" class="btn">Explore Projects</a>
    </div>

    <!-- Resources Section -->
    <div class="activity-card">
        <h3>Resources</h3>
        <p>Access educational articles, e-books, and tools to improve your skills.</p>
        <a href="resources.php" class="btn">Access Resources</a>
    </div>

    <!-- Announcements Section -->
    <div class="activity-card">
        <h3>Announcements</h3>
        <ul>
            <?php
            $stmt = $pdo->query('SELECT title, created_at FROM announcements ORDER BY created_at DESC LIMIT 3');
            while ($announcement = $stmt->fetch()) {
                echo '<li>' . $announcement['title'] . ' - ' . date('F j, Y', strtotime($announcement['created_at'])) . '</li>';
            }
            ?>
        </ul>
        <a href="announcements.php" class="btn">View All Announcements</a>
    </div>
</div>

</body>
</html>