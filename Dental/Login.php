<?php
  include("config.php");
  session_start();
  $login=null;
  if(isset($_POST['submit'])){
    $usename= $_POST['username'];
    $password=$_POST['password'];
    if($usename=="admin" && $password=="admin"){ //hardcoding this check for now later this canbe pulled from DB.
      $login=true;
    }else{
      $login=false;
    }
  }

  if($login) {
      $_SESSION["Username"]= $usename;
      $_SESSION["Password"]= $password;
      header("location:Users.php"); //redirecting to users.php 
  }
 
  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Login</title>
</head>
<body>
    <h1 style="text-align: center;" ><b>HITHA DENTALS </b></h1>
    <?php include "navbar.php"?>
    <h3>Admin Login Page</h3>
    
<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="https://cdn.pixabay.com/photo/2017/07/18/15/39/dental-care-2516133__480.png" style="max-height: 100px; max-width: 100px;" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="post">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="login"><br>
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password"><br>
      <input type="submit" name="submit" class="fadeIn fourth" value="Log In">
    </form>
    
    <?php if(!$login and $login!=null) {
      echo "Invalid Usename and(or) Password.";
    } ?>


    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">Forgot Password?</a>
    </div>

  </div>
</div>
</body>
</html>