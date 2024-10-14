<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];
    $url = $_POST['url'];

    $stmt = $pdo->prepare("INSERT INTO resources (title, description, url) VALUES (?, ?, ?)");
    $stmt->execute([$title, $description, $url]);

    header('Location: admin_dashboard.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Resources - Wazawa Hub</title>
</head>
<body>
     <!-- Add Resource -->
     <div class="admin-section">
        <h3>Add Resource</h3>
        <form action="add_resource.php" method="post">
            <input type="text" name="title" placeholder="Resource Title" required>
            <textarea name="description" placeholder="Resource Description" required></textarea>
            <input type="text" name="url" placeholder="Resource URL" required>
            <button type="submit">Add Resource</button>
        </form>
    </div>
</body>
</html>