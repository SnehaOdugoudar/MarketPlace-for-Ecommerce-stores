<?php
session_start();
// Check if user is already logged in
if(isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true){
    header("location: admin.php");
    exit;
}

// Variables for username and password
$username = $password = "";
$username_err = $password_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Check if username is empty
    if(empty(trim($_POST["username"]))){
        $username_err = "Please enter username.";
    } else{
        $username = trim($_POST["username"]);
    }
    
    // Check if password is empty
    if(empty(trim($_POST["password"]))){
        $password_err = "Please enter your password.";
    } else{
        $password = trim($_POST["password"]);
    }
    
    // Validate credentials
    if(empty($username_err) && empty($password_err)){
        if($username == 'admin' && $password == 'password'){ // Replace 'password' with a hashed and secured password in production
            // Password is correct, start a new session
            session_start();
            $_SESSION['admin_logged_in'] = true;
            $_SESSION['username'] = $username;                
            header("location: admin.php");
        } else{
            // Display an error message if password is not valid
            $password_err = "The password you entered was not valid.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div>
        <h2>Login</h2>
        <p>Please fill in your credentials to login.</p>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div>
                <label>Username</label>
                <input type="text" name="username" value="<?php echo $username; ?>">
                <span><?php echo $username_err; ?></span>
            </div>    
            <div>
                <label>Password</label>
                <input type="password" name="password">
                <span><?php echo $password_err; ?></span>
            </div>
            <div>
                <input type="submit" value="Login">
            </div>
        </form>
    </div>    
</body>
</html>
