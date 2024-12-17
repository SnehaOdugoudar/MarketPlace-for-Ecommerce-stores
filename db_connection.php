<?php
$host = 'localhost';
$username = 'root'; // Your database username
// $password = 'Password@123'; // Your database password
$password = ''; // Your database password
$database = 'marketplace'; // Your database name
$port = 3306; // Default MySQL port

// Connect to MySQL
$link = new mysqli($host, $username, $password, $database, $port);

// Check connection
// if ($link->connect_error) {
//   die("Connection failed: " . $link->connect_error);
// }
if ($link->connect_error) {
  die("Connection failed: " . $link->connect_error);
} else {
  echo "Connected successfully!";
}
?>

