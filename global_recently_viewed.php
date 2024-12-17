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

// Construct the cookie name based on the user ID
$cookieName = 'global_recently_viewed_' . md5($_SESSION['userid']);


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
    echo '<li><a>' . $products[$productID] . '</a></li>';
}
?>
</ul>
