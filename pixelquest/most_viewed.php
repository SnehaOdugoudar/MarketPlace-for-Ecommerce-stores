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
<head>
    <Title>Recently Viewed</Title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<div class="topnav">
    <a href="index.php">
      <img src="images/logo.png" alt="Pixel Quest Games">
    </a>
    <h2>Most Viewed Products</h2>
</div>
<ul>
<?php
foreach ($top5MostViewed as $productID => $viewCount) {
    echo '<li><a href="products/product' . $productID . '.php">' . $products[$productID] . '</a> (Views: ' . $viewCount . ')</li>';
}
?>
</ul>
</html>