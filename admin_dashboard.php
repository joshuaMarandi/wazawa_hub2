<?php include 'header.php';
include 'sidebar.php';

include 'db.php';

// Fetch total users
$stmt_users = $pdo->prepare('SELECT COUNT(*) AS total_users FROM users');
$stmt_users->execute();
$total_users = $stmt_users->fetch(PDO::FETCH_ASSOC)['total_users'];

// Fetch total projects
$stmt_projects = $pdo->prepare('SELECT COUNT(*) AS total_projects FROM projects');
$stmt_projects->execute();
$total_projects = $stmt_projects->fetch(PDO::FETCH_ASSOC)['total_projects'];

// Fetch total money collected
$stmt_money = $pdo->prepare('SELECT SUM(amount) AS total_money FROM transactions');
$result_money = $stmt_money->fetch(PDO::FETCH_ASSOC);
$total_money = $result_money['total_money'] ?? 0

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/sidebar.css">
    <title>Admin Dashboard - Wazawa Hub</title>
    <style>
        .dashboard-boxes {
            display: flex;
            justify-content: space-between;
            margin-top: 50px;
        }

        .box {
            background-color: #2196F3;
            color: white;
            padding: 20px;
            width: 30%;
            border-radius: 8px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 20px;
        }

        .box h3 {
            margin-bottom: 15px;
        }

        .box p {
            font-size: 24px;
            margin: 0;
        }

        .view-button {
            margin-top: 15px;
        }

        .view-button a {
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            display: inline-block;
        }

        /* Different colors for each button */
        .view-users {
            background-color: #4CAF50;
        }

        .view-projects {
            background-color: #FFC107;
        }

        .view-money {
            background-color: #F44336;
        }

        /* Money statistics section */
        .statistics {
            margin-top: 40px;
        }

        .statistics h3 {
            margin-bottom: 20px;
        }

        .progress-bar {
            background-color: #f1f1f1;
            border-radius: 10px;
            margin-bottom: 10px;
            width: 100%;
            height: 30px;
            overflow: hidden;
        }

        .progress {
            background-color: #4CAF50;
            height: 100%;
            width: <?= $money_progress ?>%; /* Dynamically set based on collected money */
            border-radius:10px;
        }
/* Responsive Styles */
@media screen and (max-width: 1024px) {
    .box {
        width: 45%; /* Adjust box size for medium screens */
    }
}


@media screen and (max-width: 768px) {
    .dashboard-boxes {
        flex-direction: column; /* Stack boxes vertically on smaller screens */
        align-items: center;
    }

    .box {
        width: 80%; /* Full width on smaller screens */
    }



    .statistics {
        width: 90%;
        margin: 20px auto;
    }
}

@media screen and (max-width: 480px) {
    .box {
        width: 100%; /* Take full width on very small screens */
    }


    .view-button a {
        font-size: 14px; /* Adjust button text size */
        padding: 8px 15px; /* Smaller padding for smaller screens */
    }

    .box p {
        font-size: 18px; /* Reduce text size on smaller screens */
    }
}

.btn-view {
    background-color: #4CAF50; /* Primary button color */
    color: white; /* Text color */
    padding: 10px 20px; /* Top and bottom padding, left and right padding */
    text-decoration: none; /* Remove underline */
    border-radius: 5px; /* Rounded corners */
    font-weight: bold; /* Make text bold */
    transition: background-color 0.3s, transform 0.2s; /* Smooth transition for hover effects */
}


.btn-view:hover {
    background-color: #45a049; /* Darker shade on hover */
    transform: translateY(-2px); /* Slightly lift the button on hover */
}


    </style>
</head>
<body>

<?php // include 'sidebar.php'; ?>


<div class="content">
    <h2>Admin Dashboard</h2>

    <div class="dashboard-boxes">
        <!-- Total Users -->
        <div class="box" style="background-color: #4CAF50;">
            <h3>Total Users</h3>
            <p><?php echo $total_users; ?></p>
            <a href="view_users.php" class="btn-view">View Users</a>
        </div>

        <!-- Total Projects -->
        <div class="box" style="background-color: #2196F3;">
            <h3>Total Projects</h3>
            <p><?php echo $total_projects; ?></p>
            <a href="view_projects.php" class="btn-view">View Projects</a>
        </div>

        <!-- Total Money Collected -->
        <div class="box" style="background-color: #333;">
            <h3>Money Collected</h3>
            <p><?php echo $total_money; ?></p>
            <a href="view_transactions.php" class="btn-view">View Transactions</a>
        </div>
    </div>
</div>
<script src="js/sidebar.js"></script>
</body>
</html>