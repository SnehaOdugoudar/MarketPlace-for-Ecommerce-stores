<?php 
require_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    // Initialize the query with a base SELECT statement
    $query = "SELECT first_name, last_name, email, home_phone, cell_phone, home_address FROM users WHERE TRUE";
    
    // Initialize parameters array
    $params = [];
    $types = "";

    // Check each field and add it to the query if it's not the wildcard '*'
    if ($_POST["first_name"] != '') {
        $query .= " AND first_name = ?";
        $types .= "s";
        $params[] = $_POST["first_name"];
    }
    if ($_POST["last_name"] != '') {
        $query .= " AND last_name = ?";
        $types .= "s";
        $params[] = $_POST["last_name"];
    }
    if ($_POST["email"] != '') {
        $query .= " AND email = ?";
        $types .= "s";
        $params[] = $_POST["email"];
    }
    if ($_POST["home_phone"] != '') {
        $query .= " AND home_phone = ?";
        $types .= "s";
        $params[] = $_POST["home_phone"];
    }
    if ($_POST["cell_phone"] != '') {
        $query .= " AND cell_phone = ?";
        $types .= "s";
        $params[] = $_POST["cell_phone"];
    }

    $stmt = $link->prepare($query);

    // Call bind_param() only if there are parameters
    if ($types && count($params)) {
        $stmt->bind_param($types, ...$params);
    }
    
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows === 0) {
        echo "<script>alert('no user found'); window.location.href = 'search_users.php';</script>";
    } else {
        while ($row = $result->fetch_assoc()) {
            echo "User: " . htmlspecialchars($row['first_name']) . " " . htmlspecialchars($row['last_name']) . "<br> Email: " . htmlspecialchars($row['email']) . "<br> Home Phone: " . htmlspecialchars($row['home_phone']) . "<br> Mobile Phone: " . htmlspecialchars($row['cell_phone']) . "<br> Home Address: " . htmlspecialchars($row['home_address']) . "<br><br>";
        }
    }
    
    $stmt->close();
}

$link->close();
?>
