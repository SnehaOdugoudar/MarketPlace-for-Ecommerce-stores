<?php
    session_start();
    require_once '../db_connection.php';

$sql =  "CREATE TABLE IF NOT EXISTS `product_reviews_gen` (
        `id` INT AUTO_INCREMENT PRIMARY KEY,
        `product_id` INT NOT NULL,
        `user_id` INT NOT NULL,
        `rating` INT NOT NULL,
        `review` TEXT NOT NULL,
        `created_at` TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
        ";

if ($link->query($sql)===TRUE) {
} else {
    echo "Error creating review table: " . $link->error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $product_id = $link->real_escape_string($_POST['product_id']);
    $user_id = $link->real_escape_string($_SESSION['userid']); // Assuming user ID is stored in session
    $rating = intval($_POST['rating']);
    $review = $link->real_escape_string($_POST['review']);

    // SQL query to insert the review into the database
    $sql = "INSERT INTO product_reviews_gen (product_id, user_id, rating, review) VALUES ('$product_id', '$user_id', '$rating', '$review')";

    // Execute the query
    if ($link->query($sql) === TRUE) {
        echo "Review submitted successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $link->error;
    }
}
$link->close();
?>


