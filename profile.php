<?php
session_start(); // Start the session at the beginning of the script
include 'db.php';

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php'); // Redirect to login if not logged in
    exit();
}

// Fetch user information
$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare('SELECT * FROM users WHERE id = ?');
$stmt->execute([$user_id]);
$user = $stmt->fetch();

// Handle profile update
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];

    // Update user information in the database
    $update_stmt = $pdo->prepare('UPDATE users SET username = ?, email = ? WHERE id = ?');
    $update_stmt->execute([$username, $email, $user_id]);

    // Fetch the updated user information
    $stmt->execute([$user_id]);
    $user = $stmt->fetch();

    $success_message = "Profile updated successfully!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css"> <!-- Your CSS file -->
    <title>Your Profile - Wazawa Hub</title>
</head>
<body>
    <?php  include 'sidebar.php'; ?> 
    
    <div class="content">
        <h2>Your Profile</h2>

        <?php if (isset($success_message)) { ?>
            <div class="success"><?php echo $success_message; ?></div>
        <?php } ?>

        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" value="<?php echo htmlspecialchars($user['username']); ?>" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($user['email']); ?>" required>

            <button type="submit">Update Profile</button>
        </form>
    </div>

    <script src="js/script.js"></script> <!-- Your JavaScript file -->
</body>
</html>
