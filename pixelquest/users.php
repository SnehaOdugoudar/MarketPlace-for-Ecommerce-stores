<?php
session_start();
include '../db_connection.php'; // Adjust the path as necessary

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['create_user'])) {
    $first_name = $link->real_escape_string($_POST['first_name']);
    $last_name = $link->real_escape_string($_POST['last_name']);
    $email = $link->real_escape_string($_POST['email']);
    $password = $link->real_escape_string($_POST['password']);
    $home_phone = $link->real_escape_string($_POST['home_phone']);
    $cell_phone = $link->real_escape_string($_POST['cell_phone']);
    $home_address = $link->real_escape_string($_POST['home_address']);
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $stmt = $link->prepare("INSERT INTO users (first_name, last_name, email, password, home_phone, cell_phone, home_address) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $first_name, $last_name, $email, $hashed_password, $home_phone, $cell_phone, $home_address);

    if ($stmt->execute()) {
        echo "<script>alert('User created successfully!');</script>";
    } else {
        echo "<script>alert('Error: " . $stmt->error . "');</script>";
    }
    $stmt->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>User Management</title>
    <link rel="stylesheet" href="style.css">
    <div class="header">
       
       <button class="button" onclick="location.href='index.php';" style="width: 160px;">Home</button>

       <!-- <a href="../logout.php">Logout</a> -->
   </div>
</head>
<body>
<div class="container">
    <div class="login_wrapper">
        <h1>Create New User</h1>
        <form method="post" action="users.php">
            <input type="text" name="first_name" placeholder="First Name" required>
            <input type="text" name="last_name" placeholder="Last Name" required>
            <input type="email" name="email" placeholder="Email Address" required>
            <input type="password" name="password" placeholder="Password" required>
            <input type="text" name="home_phone" placeholder="Home Phone Number">
            <input type="text" name="cell_phone" placeholder="Mobile Phone Number">
            <input type="text" name="home_address" placeholder="Home Address">
            <button type="submit" name="create_user">Create User</button>
        </form>
    </div>

    <div class="login_wrapper">
        <h1>Search Users</h1>
        <form method="get" action="search_results.php">
            <input type="text" name="search" placeholder="Search by name, email, or phone">
            <button type="submit">Search</button>
        </form>
    </div>
</div>
<div class="button-container">
    <button class="tablink" onclick="location.href='allusers.php'">All Users</button>
</div>

</body>
</html>
