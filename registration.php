<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="icon" type="image/x-icon" href="./Images/icon.jpg">
    <link rel="stylesheet" href="CSS/style.css" />
</head>

<body>
    <?php
    require('db.php');
    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
        VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
            $query1 = "SELECT * FROM users where username='$username'";
            $query2 = "SELECT * FROM users where email='$email'";
            $res1=mysqli_query($con,$query1);
            $res2=mysqli_query($con,$query2);
            
            if(mysqli_num_rows($res1)>0){
                echo "<div class='form'>
                <h3>Sorry...Username already exists</h3>
                <h3>Please choose different Username</h3></br>
                <p class='link'>Click here to again <a href='registration.php'>Register</a></p>
                </div>";

            }
            else if(mysqli_num_rows($res2)>0){
                echo "<div class='form'>
                <h3>Email Already exists</h3>
                <h3>Please Login</h3></br>
                <p class='link'><a href='login.php'>Click here to again Login</a></p>
                </div>";

            }
            else{


                $result   = mysqli_query($con, $query);
                if ($result) {
                    echo "<div class='form'>
                    <h3>You are registered successfully.</h3><br/>
                    <p class='link'>Click here to <a href='login.php'>Login</a></p>
                    </div>";
                } else {
                    echo "<div class='form'>
                    <h3>Required fields are missing.</h3><br/>
                    <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                    </div>";
                }
            }

        } else {
            ?>
            <form class="form" action="" method="post">
                <h1 class="login-title">Murugan_vibes</h1>
                <h1 class="login-title">Registration</h1>
                <input type="text" class="login-input" name="username" placeholder="Username" required />
                <input type="text" class="login-input" name="email" placeholder="Email Adress" required>
                <input type="password" class="login-input" name="password" placeholder="Password" required>
                <input type="submit" name="submit" value="Register" class="login-button">
                <p class="link"><a href="login.php">Click to Login</a></p>
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