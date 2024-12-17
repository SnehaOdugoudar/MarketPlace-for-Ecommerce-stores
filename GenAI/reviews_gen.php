<?php
include '../db_connection.php';
$product_id = $_GET['product_id'];

$reviewsQuery = "SELECT * FROM product_reviews_gen WHERE product_id = $product_id";
$reviewsResult = $link->query($reviewsQuery);

if ($reviewsResult->num_rows > 0) {
    while($row = $reviewsResult->fetch_assoc()) {
        // Display each review
        echo "<p>Rating: " . $row["rating"] . "/5</p>";
        echo "<p>User ID: " . $row["user_id"] . "</p>";
        echo "<p>Review: " . $row["review"] . "</p>";
    }
} else {
    echo "No reviews yet.";
}
?>
