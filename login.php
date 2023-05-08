<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="./Images/icon.jpg">
    <link rel="stylesheet" href="CSS/style.css" />
    <style>
        .text-center a{
            text-decoration: none;
            color: red;
        }
        .fp{
            text-align: left;
            margin: 1vh auto 0 auto;
            margin-bottom: 10px;
            margin-top: -10px;
        }
        .fp a{
            text-decoration: none;
            color: red;
        }
        .link {
    color: #0d6efd;
}
.link a {
    color: #0d6efd;
    text-decoration: none;
}
    </style>
</head>

<body>
<?php
    require('db.php');
    //include ('auth_session.php');
    session_start();
 
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
           //echo "<script> window.location.href='home.php';</script>";
           header("Location: home.php");
           
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'><a href='login.php'>Click here to Login</a> again.</p>
                  </div>";
        }
    } else {
?>
        <form class="form" method="post" name="login">
            <h1 class="login-title">Murugan_vibes</h1>
            <h1 class="login-title">Login</h1>
            <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" />
            <input type="password" class="login-input" name="password" placeholder="Password" />
            <p class="fp"><a href="forgotpass.php">Forgot Password?</a></p>
            <input type="submit" value="Login" name="submit" class="login-button" />
            <p class="link"><a href="registration.php">New Registration</a></p>
            <p class="link"><a href="index.php">Home</a></p>
        </form>
<?php
    }
?>
    <center>
        <div class="text-center p-3">
            © 2023 Copyright:
            <a class="text-reset" href="https://www.instagram.com/murugan_vibes/">Murugan
            Vibes</a>
        </div>
    </center>
        
</body>

</html>