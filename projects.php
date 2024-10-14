<?php include 'sidebar.php'; ?>
<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/styles.css">
    <title>Projects</title>
</head>
<body>


<div class="content">
    <h2>Community Projects</h2>
    <ul>
        <?php
        $stmt = $pdo->query('SELECT title, status FROM projects ORDER BY created_at DESC');
        while ($project = $stmt->fetch()) {
            echo '<li>' . $project['title'] . ' (' . ucfirst($project['status']) . ')</li>';
        }
        ?>
    </ul>
</div>

</body>
</html>