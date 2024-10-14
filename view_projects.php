<?php
// Include database connection
include 'db.php';

// Fetch projects from the database
$stmt = $pdo->prepare('SELECT * FROM projects'); // Adjust the table name as needed
$stmt->execute();
$projects = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css"> <!-- Your main CSS file -->
    <link rel="stylesheet" href="css/header.css"> <!-- Header CSS -->
    <link rel="stylesheet" href="css/sidebar.css"> <!-- Sidebar CSS -->
    <link rel="stylesheet" href="css/view_projects.css"> <!-- Specific styles for this page -->
    <title>View Projects - Wazawa Hub</title>
    <style>
        .content {
            padding: 20px;
        }

        .project-list {
            display: flex;
            flex-direction: column;
            margin-top: 30px;
        }

        .project-item {
            background-color: #f9f9f9;
            padding: 15px;
            margin: 10px 0;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .project-item h3 {
            margin: 0;
        }

        .project-item p {
            margin: 5px 0;
        }

        .view-button {
            margin-top: 10px;
        }

        .view-button a {
            background-color: #2196F3;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }

        /* Responsive Styles */
        @media screen and (max-width: 768px) {
            .project-list {
                margin-top: 20px;
            }

            .project-item {
                padding: 10px;
            }

            .view-button a {
                padding: 8px 10px;
            }
        }
    </style>
</head>
<body>
    <?php include 'header.php'; ?> <!-- Include header -->
    <?php include 'sidebar.php'; ?> <!-- Include sidebar -->

    <div class="content">
        <h2>Projects List</h2>

        <div class="project-list">
            <?php foreach ($projects as $project) { ?>
                <div class="project-item">
                    <h3><?php echo htmlspecialchars($project['title']); ?></h3>
                    <p>Description: <?php echo htmlspecialchars($project['description']); ?></p>
                    <p>Status: <?php echo htmlspecialchars($project['status']); ?></p>
                    <div class="view-button">
                        <a href="project_detail.php?id=<?php echo $project['id']; ?>">View Details</a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>

    <script src="js/script.js"></script> <!-- Your JavaScript file -->
</body>
</html>
