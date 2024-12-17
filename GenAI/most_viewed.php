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

// MOST VIEWED
$viewCounts = [];
foreach ($products as $productID => $productName) {
    $cookieName = 'product_view_count_' . $productID . '_' . md5($_SESSION['userid']);
    $viewCounts[$productID] = isset($_COOKIE[$cookieName]) ? intval($_COOKIE[$cookieName]) : 0;
}

arsort($viewCounts);
$top5MostViewed = array_slice($viewCounts, 0, 5, true);
?>

<!DOCTYPE html>
<h1>Most Viewed Products by You</h1>
<ul>
<?php
foreach ($top5MostViewed as $productID => $viewCount) {
    echo '<li><a href="products/product' . $productID . '.php">' . $products[$productID] . '</a> (Views: ' . $viewCount . ')</li>';
}
?>
</ul>
</html>