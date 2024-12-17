<?php
session_start();

// Ensure the user is logged in
if (!isset($_SESSION['userid'])) {
    header('Location: /login.php');
    exit();
}

$website = [
    1 => 'PixelQuest',
    2 => 'GenAI Wear',
    3 => 'Servic'
];

// Construct the cookie name based on the user ID
$cookieName = 'recently_tracked_' . md5($_SESSION['userid']);


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
    <h2>Recently Visited Marketplace</h2>
</div>
<ul>
<?php
foreach ($recentlyViewed as $websiteID) {
    echo '<li>' . $website[$websiteID] . '</li>';
}
?>
</ul>
</html>