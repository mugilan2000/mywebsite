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

    <?php
require ('db.php');
$query = "SELECT * from users";
$query1 = "SELECT * from upload";
$query2 = "SELECT * from contact";
$query_run = mysqli_query($con,$query);
$totalusers = mysqli_num_rows($query_run);
$query1_run = mysqli_query($con,$query1);
$totalimages = mysqli_num_rows($query1_run);
$query2_run = mysqli_query($con,$query2);
$totalqueries = mysqli_num_rows($query2_run);
    ?>

    <div class="container py-4">

        <div class="menu row" id="menu">
            <h5>Hi,
                <?php echo $_SESSION['username']; ?> (Admin)
            </h5>
            <h6 class="text-center">Dashboard</h6>
            <div class="col-lg-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total Users - <?php echo $totalusers ?></h5>
                        <a class ="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"href="users.php" style="text-decoration:none">view users</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total Images - <?php echo $totalimages ?></h5>
                        <a class ="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"href="viewimages.php" style="text-decoration:none">view Images</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">Total Queries - <?php echo $totalqueries ?></h5>
                        <a class ="link-danger link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"href="queries.php" style="text-decoration:none">view Queries</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>