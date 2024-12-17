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
    40 => 'Ac Service',
    41 => 'Wash Service',
    42 => 'Refrigerator Service',
    43 => 'Plumbing Service',
    44 => 'Electricity Service',
    45 => 'Washroom Cleaning',
    46 => 'House Cleaning',
    47 => 'Hair Cutting',
    48 => 'Makeup',
    49 => 'Massage',
    50 => 'Vehicle Service',
    51 => 'Flat Tyre',
    52 => 'Vehicle Towing',
    53 => 'Vehicle AC Repair',
    // ... up to Product 10
];

// MOST VIEWED
$viewCounts = [];
foreach ($products as $productID => $productName) {
    $cookieName = 'global_product_view_count_' . $productID . '_' . md5($_SESSION['userid']);
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
    <h2>Most Viewed Products</h2>
</div>
<ul>
<?php
foreach ($top5MostViewed as $productID => $viewCount) {
    echo '<li><a>' . $products[$productID] . '</a> (Views: ' . $viewCount . ')</li>';
}
?>
</ul>
</html>