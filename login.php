<?php
session_start();

// Check if user is logged in
$is_logged_in = isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true;
if ($is_logged_in) {
  header('Location: /pixelquest/index.php');
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Pixel Quest Games Admin Login</title>

  <link rel="stylesheet" type="text/css" href="pixelquest/style.css">
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
      <img src="pixelquest/images/logo.png" alt="Game Realm Games">
    </a>
    <h2>Log in</h2>
</div>
<div class="login_wrapper">
    <h1 style="font-family: cursive">Welcome</h1><br><br>
    <form action="authenticate.php" method="POST">
    <label>
      <input type="email" name="email" placeholder="email address">
    </label>
    <label>
      <input type="password" name="password" placeholder="Password">
    </label>
    <br>
    <br>
    <input type="submit" value="Log in">
    </form>
    <br>
    <div class="not-member">
        Not a member? <a href="register.html">Register Now</a>
    </div>
</div>
</body>
</html>