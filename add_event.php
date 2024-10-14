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
    $event_date = $_POST['event_date'];

    $stmt = $pdo->prepare("INSERT INTO events (title, description, event_date) VALUES (?, ?, ?)");
    $stmt->execute([$title, $description, $event_date]);

    header('Location: admin_dashboard.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <title>Events - Wazawa Hub</title>
</head>
<body>
     <!-- Add Event -->
     <div class="admin-section">
        <h3>Add Event</h3>
        <form action="add_event.php" method="post">
            <input type="text" name="title" placeholder="Event Title" required>
            <textarea name="description" placeholder="Event Description" required></textarea>
            <input type="date" name="event_date" required>
            <button type="submit">Add Event</button>
        </form>
    </div>

</body>
</html>
