<?php
session_start();

// Ensure the user is logged in
if (!isset($_SESSION['userid'])) {
    header('Location: /login.php');
    exit();
}

$products = [
    1 => 'Final Fantasy XVI',
    2 => 'Marvels Spider-Man 2',
    3 => 'God of War: Ragnarok',
    4 => 'Horizon Forbidden West',
    5 => 'Persona 5 Royal',
    6 => 'Ghost of Tsushima',
    7 => 'Like a Dragon Gaiden',
    8 => 'Elden Ring',
    9 => 'Star Wars Jedi: Survivor',
    10 => 'The Last of Us: Part II',
    // ... up to Product 10
];

// Construct the cookie name based on the user ID
$cookieName = 'recently_viewed_' . md5($_SESSION['userid']);


// Read the recently viewed products from the user-specific cookie
$recentlyViewed = isset($_COOKIE[$cookieName]) ? explode(',', $_COOKIE[$cookieName]) : [];
?>
<!DOCTYPE html>
<!-- Rest of the HTML structure -->
<head>
    <Title>Recently Viewed</Title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="topnav">
    <a href="index.php">
      <img src="images/logo.png" alt="Pixel Quest Games">
    </a>
    <h2>Recently Viewed Products</h2>
</div>
<ul>
<?php
foreach ($recentlyViewed as $productID) {
    echo '<li><a href="products/product' . $productID . '.php">' . $products[$productID] . '</a></li>';
}
?>
</ul>
