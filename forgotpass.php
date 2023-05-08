<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="icon" type="image/x-icon" href="./Images/icon.jpg">
    <link rel="stylesheet" href="CSS/style.css" />
</head>
<body>
    <?php
    require 'db.php';
    // $email=$_REQUEST['email'];
    // $password=$_REQUEST['password'];
    // // echo $email;
    // // echo $password;
    // $query = "UPDATE users set password='$password' where email='$email'";
    // $result = mysqli_query($con,$query);
    // if($result){
    //     echo "<div class='form'>
    //                 <h3>Password updated Successfully</h3><br/>
    //                 <p class='link'>Click here to <a href='login.php'>Login</a></p>
    //                 </div>";
    // }
    // else{
    //     echo "<div class='form'>
    //                 <h3>Error!</h3><br/>
    //                 <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
    //                 </div>";
    // }

    if(isset($_POST['submit'])){
        $email=$_POST['email'];
        $password =$_POST['password'];
        $query = "UPDATE users set password ='" . md5($password) . "' where email ='$email'";
        $result = mysqli_query($con,$query);
        if($result){
            echo '<script>alert("Password Updated Successfully");
            window.location = "login.php";
            </script>';
        }
        else{
            echo "Error";
        }
    }

    ?>
    <form class="form" action="" method="post">
                <h1 class="login-title">Murugan_vibes</h1>
                <h1 class="login-title">Update Password</h1>
                <input type="text" class="login-input" name="email" placeholder="Email Adress" required>
                <input type="password" class="login-input" name="password" placeholder="New Password" required>
                <input type="submit" name="submit" value="Update" class="login-button">
                <p class="link"><a href="login.php">Click to Login</a></p>
            </form>
</body>