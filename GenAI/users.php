<?php
// Include your database connection details
require_once '../db_connection.php';

// Fetch all users from the database
$sql = "SELECT id, first_name, last_name, email, home_phone, cell_phone, home_address FROM users";
$result = $link->query($sql);

$users = [];

// Fetch all users
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $users[] = $row;
    }
    // Output users as JSON
    header('Content-Type: application/json');
    echo json_encode($users);
} else {
    echo json_encode(["message" => "No users found"]);
}

// Close connection
$link->close();
?>
