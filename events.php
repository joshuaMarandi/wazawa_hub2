<?php include 'sidebar.php'; ?>
<?php include 'db.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Events</title>
</head>
<body>

<div class="content">
    <h2>Upcoming Events</h2>
    <ul>
        <?php
        $stmt = $pdo->query('SELECT title, event_date FROM events ORDER BY event_date ASC');
        while ($event = $stmt->fetch()) {
            echo '<li>' . $event['title'] . ' - ' . date('F j, Y', strtotime($event['event_date'])) . '</li>';
        }
        ?>
    </ul>
</div>
</body>
</html>