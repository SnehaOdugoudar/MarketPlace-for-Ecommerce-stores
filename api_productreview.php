<?php
require_once 'db_connection.php'; // Include your database connection

header('Content-Type: application/json'); // Set the content type to JSON

try {
    // Fetch all records from the product_reviews table joined with products table to get the product_name
    $sql = "SELECT pr.id, pr.product_id, pr.user_id, pr.rating, pr.review, pr.created_at, p.product_name 
            FROM `product_reviews` pr
            JOIN `products` p ON pr.product_id = p.product_id";
    $result = $link->query($sql);

    if ($result->num_rows > 0) {
        $reviews = [];
        while ($row = $result->fetch_assoc()) {
            $reviews[] = [
                'product_id' => $row['product_id'],
                'user_id' => $row['user_id'],
                'rating' => $row['rating'],
                'review' => $row['review'],
                'created_at' => $row['created_at'],
                'product_name' => $row['product_name'] // Added product name to the output
            ];
        }

        // Send the data as JSON
        echo json_encode([
            'status' => 'success',
            'data' => $reviews
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
?>
