<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Murugan Vibes</title>
    <!-- CSS only -->
    <link rel="icon" type="image/x-icon" href="./Images/icon.jpg">
    <link rel="stylesheet" href="./components/css/bootstrap.min.css">
    <link rel="stylesheet" href="./components/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css" integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">

</head>

<body>
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
                            <a href="#" class="nav-link" id="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="stories.php" class="nav-link" id="stories">Stories</a>
                        </li>
                        <li class="nav-item">
                            <a href="images.php" class="nav-link" id="images">Images</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link" id="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="contact.php" class="nav-link" id="contact">Contact US</a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link" id="registerbtn">Logout</a>
                        </li>
                    </ul>

                </div>
            </div>

        </nav>
    </header>
    <br>
    <div class="container">
        <h4><?php 
        date_default_timezone_set('Asia/Calcutta');
        $hour = date('G');
        if($hour >=5 && $hour<=11){
            echo "Good Morning";
        }
        else if($hour >=12 && $hour <=18){
            echo "Good Afternoon";

        }
        else if($hour>=19 || $hour<=4){
            echo "Good Evening";
        }
        echo " ";
        echo $_SESSION['username']; ?>!</h4><h3>Welcome to Murugan Vibes</h3>
        <br>
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="./Images/92.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./Images/93.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="./Images/94.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <br>
        <br>
        <div class="row">
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./Images/90.jpg" alt="">

                    <div class="card-body">
                        <h5 class="card-title">Images</h5>
                        <p class="card-text">
                            Some quick example text to build on
                            the card title and make up the bulk
                            of the card's content.
                        </p>

                        <a href="images.php" target="_blank" class="btn btn-outline-primary btn-sm">
                            Go to Images
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./Images/91.jpg" alt="">

                    <div class="card-body">
                        <h5 class="card-title">Stories</h5>
                        <p class="card-text">
                            Some quick example text to build on the
                            card title and make up the bulk of the
                            card's content.
                        </p>

                        <a href="maintenance.php" target="_blank" class="btn btn-outline-primary btn-sm">
                            Coming soon
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src="./Images/43.jpg" alt="">

                    <div class="card-body">
                        <h5 class="card-title">Contact us</h5>
                        <p class="card-text">
                            Some quick example text to build on the
                            card title and make up the bulk of the
                            card's content.
                        </p>

                        <a href="contact.php" target="_blank" class="btn btn-outline-primary btn-sm">
                            Go to Contact Page
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <script src="./components/js/jquery.min.js"></script>
    <script src="./components/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/f2ae98091b.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <footer class="text-center mt-auto my-3">
        <!-- Grid container -->
        <div class="container p-4 pb-0">
            <!-- Section: Social media -->
            <section class="mb-4">
                <!-- Google -->
                <a class="btn btn-floating m-1"  href="https://www.google.com/search?q=%23murugan_vibes" target="_blank"style ="border: 1px solid darkred;"role="button" id="googleicon"><i class="fa-brands fa-google"></i>

                <!-- Instagram -->
                <a class="btn  m-1"  href="https://www.instagram.com/murugan_vibes/" target="_blank" style="border: 1px solid darkred;"role="button" id="instagramicon"><i class="fa-brands fa-instagram"></i></a>
                
                <a class="btn  m-1"  href="https://mugilanmsm.000webhostapp.com/" target="_blank" style="border: 1px solid darkred;"role="button" id="instagramicon"><i class="fa-solid fa-globe"></i></a>

            </section>
            <!-- Section: Social media -->
        </div>
        <!-- Grid container -->

        <!-- Copyright -->
        <div class="text-center p-3" style="background-color: #f1c232;color: black;">
            © 2023 Copyright:
            <a class="text-reset text-decoration-none" href="https://www.instagram.com/murugan_vibes/">Murugan
                Vibes</a>
        </div>
        <!-- Copyright -->
    </footer>
</body>