<?php include 'sidebar.php'; ?>
<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Announcements</title>
</head>
<body>

<div class="content">
    <h2>Announcements</h2>
    <ul>
        <?php
        $stmt = $pdo->query('SELECT title, content, created_at FROM announcements ORDER BY created_at DESC');
        while ($announcement = $stmt->fetch()) {
            echo '<li><strong>' . $announcement['title'] . '</strong> - ' . date('F j, Y', strtotime($announcement['created_at'])) . '<br>' . $announcement['content'] . '</li>';
        }
        ?>
    </ul>
</div>

</body>
</html>
