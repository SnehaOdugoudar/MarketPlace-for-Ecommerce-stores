<?php
session_start();

// Unset all session values
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to index page
header('Location: /pixelquest/index.php');
exit();
?>
