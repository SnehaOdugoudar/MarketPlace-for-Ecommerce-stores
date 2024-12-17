<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'db_connection.php';

// SQL to create table
$sql = "CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            first_name VARCHAR(50) NOT NULL,
            last_name VARCHAR(50) NOT NULL,
            email VARCHAR(100) NOT NULL UNIQUE,
            password VARCHAR(255) NOT NULL,
            home_phone VARCHAR(20) NOT NULL,
            cell_phone VARCHAR(20) NOT NULL,
            home_address TEXT NOT NULL,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
        ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;
    ";

if ($link->query($sql)===TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $link->error;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = $_POST["first_name"];
    $last_name = $_POST["last_name"];
    $email = $_POST["email"];
    $password = $_POST["password"]; // You should hash this password before storing
    $home_phone = $_POST["home_phone"];
    $cell_phone = $_POST["cell_phone"];
    $home_address = $_POST["home_address"];

    // Check if the email already exists
    $stmt = $link->prepare("SELECT * FROM users WHERE email = ?");
    if ($stmt) {
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            // Email already exists, alert the user
            echo "<script>alert('Email already exists. Please use a different email.'); window.history.go(-1);</script>";
        } else {
            // Email doesn't exist, proceed with inserting new data
            $stmt = $link->prepare("INSERT INTO users (first_name, last_name, email, password, home_phone, cell_phone, home_address) VALUES (?, ?, ?, ?, ?, ?, ?)");
            if ($stmt) {
                // You should use password_hash() function to hash the password before storing it
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                $stmt->bind_param("sssssss", $first_name, $last_name, $email, $hashed_password, $home_phone, $cell_phone, $home_address);
                if ($stmt->execute()) {
                    // Registration successful, redirect or alert the user
                    echo "<script>alert('Registration successful'); window.location.href = 'login.php';</script>";
                } else {
                    // Error occurred
                    echo "<script>alert('Error occurred during registration. Please try again.'); window.history.go(-1);</script>";
                }
            } else {
                echo "Error preparing INSERT statement: " . $link->error;
            }
        }
        $stmt->close();
    } else {
        echo "Error preparing SELECT statement: " . $link->error;
    }
}
$link->close();
?>
