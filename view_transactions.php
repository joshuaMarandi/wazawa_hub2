<?php
// Include database connection
include 'db.php';

// Fetch transactions from the database
$stmt = $pdo->prepare('SELECT * FROM transactions'); // Make sure 'transactions' table exists
$stmt->execute();
$transactions = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/styles.css"> <!-- Your main CSS file -->
    <link rel="stylesheet" href="css/header.css"> <!-- Header CSS -->
    <link rel="stylesheet" href="css/sidebar.css"> <!-- Sidebar CSS -->
    <title>View Transactions - Wazawa Hub</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        .content {
            padding: 20px;
            margin-top: 60px; /* To avoid content being hidden under fixed header */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
            background-color: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #4CAF50;
            color: white;
        }

        tr:hover {
            background-color: #f1f1f1; /* Highlight row on hover */
        }

        .btn-back {
            background-color: #2196F3;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
            display: inline-block;
        }

        .btn-back:hover {
            background-color: #1976D2; /* Darker blue on hover */
        }

        @media (max-width: 768px) {
            table {
                font-size: 14px; /* Smaller font size on mobile */
            }

            .btn-back {
                padding: 8px 16px; /* Smaller button on mobile */
            }
        }
    </style>
</head>
<body>
    <div class="content">
        <h2>View Transactions</h2>

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>User ID</th>
                    <th>Amount</th>
                    <th>Date</th>
                    <th>Description</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($transactions as $transaction): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($transaction['id']); ?></td>
                        <td><?php echo htmlspecialchars($transaction['user_id']); ?></td>
                        <td><?php echo htmlspecialchars($transaction['amount']); ?></td>
                        <td><?php echo htmlspecialchars($transaction['date']); ?></td>
                        <td><?php echo htmlspecialchars($transaction['description']); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <a href="admin_dashboard.php" class="btn-back">Back to Dashboard</a>
    </div>

    <script src="js/sidebar.js"></script> <!-- Include sidebar JS if necessary -->
</body>
</html>
