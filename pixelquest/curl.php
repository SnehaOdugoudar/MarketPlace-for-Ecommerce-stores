<?php
session_start();

// Check if the admin is logged in, if not redirect to login page
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header('Location: /login.php');
    exit();
}
// The URL where the request is sent // Replace with the correct URL to users.php
$genai_url = "http://genaiwear.us-west-1.elasticbeanstalk.com/users.php";
// Initialize cURL session
$ch = curl_init($genai_url);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HEADER, false);

// Execute cURL session and get the response data
$response = curl_exec($ch);

// Check for cURL errors
if(curl_errno($ch)){
    throw new Exception(curl_error($ch));
}

// Close cURL session
curl_close($ch);

// Decode JSON response
$users = json_decode($response, true);

// Check if the response is an array of users
if (is_array($users)) {
    echo "<h1>Style Sync Wear User List</h1>";
    foreach ($users as $user) {
        echo "User: " . htmlspecialchars($user['first_name']) . " " . htmlspecialchars($user['last_name']) . 
             "<br>Email: " . htmlspecialchars($user['email']) . 
             "<br>Home Phone: " . htmlspecialchars($user['home_phone']) . 
             "<br>Mobile Phone: " . htmlspecialchars($user['cell_phone']) . 
             "<br>Home Address: " . htmlspecialchars($user['home_address']) . "<br><br>";
    }
} else {
    echo "No users found or the API endpoint did not return valid JSON.";
}
?>