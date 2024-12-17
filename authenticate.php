<?php
session_start();

// Include your database connection details
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];
    
    // Special case for admin login
    if ($email == "admin@admin.com" && $password == "123456") { // It's a bad practice to hardcode credentials. REPLY: I know LOL
        $_SESSION['userid'] = $email;
        $_SESSION['admin_logged_in'] = true;

        // Redirect to the specific page
        header("Location:index.php");
        exit();
    }
    
    // Prepare a SELECT statement to fetch the user with the provided email
    $stmt = $link->prepare("SELECT id, password FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    
    // Verify if a user with the email exists
    if ($user = $result->fetch_assoc()) {
        // Verify the password with the hashed password in the database
        if (password_verify($password, $user['password'])) {
            // Password is correct, set the session variables
            $_SESSION['userid'] = $user['id'];
            $_SESSION['loggedin'] = true;

            // Redirect to the specific page
            header("Location: index.php");
            exit();
        } else {
            // Password is not correct
            echo "Login failed: Incorrect password.";
        }
    } else {
        // No user found with that email
        echo "Login failed: User not found.";
    }
    
    $stmt->close();
}

$link->close();
?>
