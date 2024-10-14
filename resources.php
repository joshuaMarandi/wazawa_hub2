<?php include 'sidebar.php'; ?>
<?php include 'db.php'; ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Resources</title>
</head>
<body>

<div class="content">
    <h2>Resources</h2>
    <ul>
        <?php
        $stmt = $pdo->query('SELECT title, url FROM resources ORDER BY created_at DESC');
        while ($resource = $stmt->fetch()) {
            echo '<li><a href="' . $resource['url'] . '" target="_blank">' . $resource['title'] . '</a></li>';
        }
        ?>
    </ul>
</div>

</body>
</html>