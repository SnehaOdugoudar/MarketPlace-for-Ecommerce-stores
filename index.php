<?php
session_start();
// Check if user is logged in
$is_logged_in = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
$is_admin_logged_in = isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Online Marketplace</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; }
        .header { background-color: #333; color: white; padding: 10px 0; text-align: center; }
        .nav { padding: 15px; background: #444; }
        button {
                    background-color: #444; /*#ffcd29*/
                    border: none;
                    color: white;
                    font-family: "Arial Rounded MT Bold", sans-serif;
                    font-size: 15px;
                    padding: 10px 20px;
                    text-align: center;
                    text-decoration: none;
                    display: inline-block;
                    cursor: pointer;
                    border-radius: 16px;
                    width: 10%;
                    min-width: 100px;
                    height: 40px;
                    transition: background-color 0.3s;
                    display: inline-block;
                }
        .main { padding: 20px; }
        .card { background: whitesmoke; text-align: justify; padding: 20px; margin-bottom: 20px; border-radius: 5px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        .footer { background-color: #333; color: blue; text-align: center; padding: 10px 0; margin-top: 30px; }
    </style>
</head>
<body>
    <div class="header">
        <h1>Welcome to the Online Marketplace</h1>
    </div>
    <div class="nav">
    <?php if ($is_logged_in || $is_admin_logged_in): ?>
        <!-- Display Logout Button for logged-in users -->
        <button class="button" onclick="location.href='logout.php';">Log out</button>
    <?php else: ?>
        <!-- Display Sign In Button for guests -->
        <button class="button" onclick="location.href='login.php';">Log in</button>
    <?php endif; ?>
        <button class="button" onclick="location.href='register.html';">Register</button>
        <button class="button" onclick="location.href='track.php';" style="width: 250px;">Recently Visited Website</button>
        <button class="button" onclick="location.href='global_recently_viewed.php';" style="width: 250px;">Recently Visited Product</button>
        <button class="button" onclick="location.href='global_most_viewed.php';" style="width: 250px;">Most Visited Product</button>
    </div>
    <div class="main">
        <div class="card">
            <h2>The Gamer’s Guild Store</h2>
            <p> One Store for all your games..!</p>
            <button class="button" onclick="location.href='pixelquest/index.php';">Game Store</button>
        </div>
        <!-- <div class="card">
            <h2>Home Buddy</h2>
            <p>Your Companion in Home Care and Repair....</p>
            <button class="button" onclick="location.href='Servic/index.php';">Home Buddy</button>
        </div> -->
        <div class="card">
            <h2>Style Sync Wear</h2>
            <p>Fashion for Every Style...</p>
            <button class="button" onclick="location.href='http://charan272.infinityfreeapp.com/GenAI/index.php;">Style Sync</button>
        </div>
        <div class="card">
            <h2>Dental</h2>
            <p>Expert Dental Care...</p>
            <button class="button" onclick="location.href='Dental/index.php';">Dental</button>
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Online Marketplace</p>
    </div>
</body>
</html>
