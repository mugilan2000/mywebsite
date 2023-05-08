<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Admin Login</title>
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
        .form{
            border-radius: 10px;
        }
        .warning-msg{
            font-size: 15px;
            opacity: 70%;
            font-weight: bold;
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `adminusers` WHERE username='$username'
                     AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            // Redirect to user dashboard page
            header("Location: adminHome.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'><a href='adminLogin.php'>Click here to Login</a> again.</p>
                  </div>";
        }
    } else {
    ?>
        <form class="form" method="post" name="login">
            <h1 class="login-title">Murugan vibes</h1>
            <h1 class="login-title">Admin Login</h1>
            
            <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" />
            <input type="password" class="login-input" name="password" placeholder="Password" />
            <input type="submit" value="Login" name="submit" class="login-button btn btn-warning" />
            <p class="warning-msg">Access restricted to unauthorized person</p>
            <p class="link"><a href="index.php">Home</a></p>
        </form>
    <?php
    }
    ?>
    <center>
        <div class="text-center p-3">
            © 2023 Copyright:
            <a class="text-reset text-decoration-none " href="https://www.instagram.com/murugan_vibes/">Murugan
            Vibes</a>
        </div>
    </center>
        
</body>

</html>