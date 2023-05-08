<?php
//include auth_session.php file on all user panel pages
include("auth_session1.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Murugan Vibes Admin Page</title>
    <!-- CSS only -->
    <link rel="icon" type="image/x-icon" href="./Images/icon.jpg">
    <link rel="stylesheet" href="./components/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="./components/css/style.css"> -->
    <!-- <link rel="stylesheet" href="style.css" /> -->
    <link rel="stylesheet" href="CSS/adminPageStyle.css">
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css"
        integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">

</head>

<body class="d-flex flex-column min-vh-100">
    <header>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#f1c232 ;">
            <div class="container">
                <a href="#" class="navbar-brand">Murugan Vibes</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="
            #myNavbar">
                    <span class="navbar-toggler-icon"></span>

                </button>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="home.php" class="nav-link" id="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="login.php" class="nav-link" id="home">User Login</a>
                        </li>
                        <li class="nav-item">
                            <a href="adminLogout.php" class="nav-link" id="registerbtn">Logout</a>
                        </li>
                    </ul>

                </div>
            </div>

        </nav>
    </header>

    <div class="container py-4">
        <h5 class="text-center">List of Comments</h5>

        <div class="table-responsive py-3">
            <?php

            require('db.php');
            $query = "SELECT * from contact";
            $query_run = mysqli_query($con, $query);
            ?>
            <table class="table table-bordered border-primary">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Message</th>
                        <th>Creation Date and Time</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(mysqli_num_rows($query_run)>0)
                    {
                        while($row = mysqli_fetch_assoc($query_run))
                        {
                            ?>
                            <tr>
                                <td><?php echo $row['id'];?></td>
                                <td><?php echo $row['name'];?></td>
                                <td><?php echo $row['email'];?></td>
                                <td><?php echo $row['mobileNumber'];?></td>
                                <td><?php echo $row['message'];?></td>
                                <td><?php echo $row['create_datetime'];?></td>
                            </tr>
                            <?php
                        }
                    }
                    else
                    {
                        echo "No record found";
                    }
                    ?>
                </tbody>
            </table>
            <input type="button" value="Go Back" class="btn btn-primary shadow-none" onclick="location.href='adminHome.php';"/>
        </div>
    </div>