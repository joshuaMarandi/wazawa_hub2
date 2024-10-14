<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-YDAvC4gd+3GZNSFyoZ0XW8PtW0fxy5OcNGQogbmlHFnKy1WSrN1Ic4nAs2ye7QWZhU2uOgj2hOgCoXi8vNjZxw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> <!-- Updated Font Awesome CDN -->

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
.icon {
            font-size: 24px; /* Adjust size of the icon */
            color: white; /* Icon color */
            cursor: pointer; /* Change cursor to pointer on hover */
        }
    </style>
</head>
<body>
<div class="header">
    <h1>Wazawa Hub</h1>
    <div class="profile-menu">
        <button> <i class="fas fa-user icon" onclick="toggleMenu()"></i></button>
        <div class="menu-items">
            <a href="profile.php">Profile</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
</div>
<script>
        function toggleMenu() {
            const menuItems = document.querySelector('.menu-items');
            menuItems.style.display = menuItems.style.display === 'block' ? 'none' : 'block'; // Toggle display
        }

        // Hide the menu when clicking outside
        window.onclick = function(event) {
            if (!event.target.matches('.icon') && !event.target.closest('.profile-menu')) {
                const menuItems = document.querySelector('.menu-items');
                if (menuItems.style.display === 'block') {
                    menuItems.style.display = 'none';
                }
            }
        }
    </script>

</body>
</html>