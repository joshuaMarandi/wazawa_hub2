<?php

session_start();
if ($_SESSION['role'] != 'admin') {
    header('Location: admin_dashboard.php');
    exit();
}

include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $description = $_POST['description'];

    $stmt = $pdo->prepare("INSERT INTO projects (title, description) VALUES (?, ?)");
    $stmt->execute([$title, $description]);

    header('Location: admin_dashboard.php');
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Projects - Wazawa Hub</title>
</head>
<body>
     <!-- Add Project -->
     <div class="admin-section">
        <h3>Add Project</h3>
        <form action="add_project.php" method="post">
            <input type="text" name="title" placeholder="Project Title" required>
            <textarea name="description" placeholder="Project Description" required></textarea>
            <button type="submit">Add Project</button>
        </form>
    </div>

</body>
</html>