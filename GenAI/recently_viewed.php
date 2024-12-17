<?php
session_start();

// Ensure the user is logged in
if (!isset($_SESSION['userid'])) {
    header('Location: /login.php');
    exit();
}

$products = [
    21 => 'Neon Dream',
    22 => 'Cybernetic Pulse',
    23 => 'AI Revolution',
    24 => 'Neon Nomad',
    25 => 'Matrix Mirage',
    26 => 'HoloHood Vanguard',
    27 => 'CyberCore Cloak',
    28 => 'Synthwave Sentry',
    29 => 'Digital Drifter',
    30 => 'Quantum Quester',
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
</head>
<h1>Recently Viewed Products</h1>
<ul>
<?php
foreach ($recentlyViewed as $productID) {
    echo '<li><a href="products/product' . $productID . '.php">' . $products[$productID] . '</a></li>';
}
?>
</ul>
