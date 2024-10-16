<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $title = $_POST['title'];
    $content = $_POST['content'];

    $stmt = $pdo->prepare("INSERT INTO announcements (title, content) VALUES (?, ?)");
    $stmt->execute([$title, $content]);

    header('Location: admin_dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
       <title> Add Announcement</title>
       <style></style>
</head>
<body>
      <!-- Add Announcement -->
      <div class="admin-section">
        <h3>Add Announcement</h3>
        <form action="add_announcement.php" method="post">
            <input type="text" name="title" placeholder="Announcement Title" required>
            <textarea name="content" placeholder="Announcement Content" required></textarea>
            <button type="submit">Add Announcement</button>
        </form>
    </div>
</div>

</body>
</html>