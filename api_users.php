<?php
require_once '../db_connection.php'; // Include your database connection

header('Content-Type: application/json'); // Set the content type to JSON

try {
    // Fetch all records from the usersinfo table
    $sql = "SELECT first_name, last_name, email, created_at FROM users";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        $users = [];
        $cnt = 1; // Counter for the rows

        while ($row = $result->fetch_assoc()) {
            $users[] = [
                'FullName' => $row['first_name'] . ' ' . $row['last_name'], // Combine first_name and last_name
                'EmailId' => $row['email'], // Rename email to EmailId
                'RegDate' => $row['created_at'] // Rename created_at to RegDate
            ];
        }

        // Send the data as JSON
        echo json_encode([
            'status' => 'success',
            'data' => $users
        ], JSON_PRETTY_PRINT);
    } else {
        // No data found
        echo json_encode([
            'status' => 'success',
            'data' => []
        ], JSON_PRETTY_PRINT);
    }
} catch (Exception $e) {
    // Handle any errors
    echo json_encode([
        'status' => 'error',
        'message' => $e->getMessage()
    ], JSON_PRETTY_PRINT);
}

$link->close();