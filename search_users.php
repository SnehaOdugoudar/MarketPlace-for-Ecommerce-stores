<?php
session_start();

// Check if the admin is logged in, if not redirect to login page
if (!isset($_SESSION['admin_logged_in']) || !$_SESSION['admin_logged_in']) {
    header('Location: login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pixel Quest Games Search Users</title>

  <link rel="stylesheet" type="text/css" href="/pixelquest/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <style>
      *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Arial", sans-serif;
      }

      body{
        background-size: cover;
      }
  </style>
</head>
<body>
<div class="topnav">
    <a href="index.php">
      <img src="images/logo.png" alt="Pixel Quest Games">
    </a>
    <h2>Search Users</h2>
</div>
<div class="login_wrapper">
    <h1 style="font-family: cursive">Search</h1><br><br>
    <form action="search_db.php" method="POST">
    <label><input type="first_name" name="first_name" placeholder="first name"></label>
    <label><input type="last_name" name="last_name" placeholder="last name"></label>
    <label><input type="email" name="email" placeholder="email address"></label>
    <label><input type="home_phone" name="home_phone" placeholder="home phone number"></label>
    <label><input type="cell_phone" name="cell_phone" placeholder="cell phone number"></label>
    <br>
    <br>
    <input type="submit" value="Search">
    </form>
    <br>
</div>
</body>
</html>