<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <title>Header - wazawa_hub</title>
    <style>
        
.header {
    background-color: #4CAF50;
    color: white;
    padding: 15px;
    text-align: center;
    position: fixed;
    width: 100%;
    top: 0;
}

.profile-menu {
    position: absolute;
    top: 15px;
    right: 20px;
}

.profile-menu:hover .menu-items {
    display: block;
}
.toggle-menu {
    background: none;
    border: none;
    color: white;
    font-size: 24px;
}

.menu-items {
    display: none;
    background-color: #2196F3;
    padding: 10px;
    position: absolute;
    right: 0;
    top: 40px;
}
.menu-items a:hover {
    background-color: #FFEB3B;
    color: black;
}
.toggle-menu:hover + .menu-items {
    display: block;
}
    </style>
</head>
<body>
<div class="header">
    <h1>Wazawa Hub</h1>
    <div class="profile-menu">
        <button class="toggle-menu">☰</button>
        <div class="menu-items">
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</div>


</body>
</html>