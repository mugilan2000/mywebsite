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
                            <a href="stories.php" class="nav-link" id="stories">Stories</a>
                        </li>
                        <li class="nav-item">
                            <a href="images.php" class="nav-link" id="images">Images</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link" id="about">About</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="contact">Contact US</a>
                        </li>
                        <li class="nav-item">
                            <a href="logout.php" class="nav-link" id="registerbtn">Logout</a>
                        </li>
                    </ul>

                </div>
            </div>

        </nav>
    </header>
    <div class="container">
        <div class="row">
            <div class="col-sm-4">

            </div>
            <!-- <div class="col-sm-3">
                <img src="./Images/24.jpg" class="mx-auto d-block img-fluid img-thumbnail">
            </div> -->
        </div>
    </div>
    <br>

    <div class="container">
        <h4>Contact us</h4>

        <form name="contact-form" action="contact_insert.php" method="post" id="contact-form">
            <div class="form-group mb-3">
                <label for="Name">Name</label>
                <input type="text" class="form-control shadow-none" name="your_name" id="name" placeholder="Name" required>
            </div>

            <div class="form-group mb-3">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control shadow-none" name="your_email" id="email" placeholder="Email" required>
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>

            <div class="form-group mb-3">
                <label for="Phone">Phone</label>
                <input type="text" class="form-control shadow-none" name="your_phone" id="mobilenumber" placeholder="Phone" required>
                <div id="mobileHelp" class="form-text">We'll never share your mobile number with anyone else.</div>
            </div>

            <div class="form-group mb-3">
                <label for="comments">Comments</label>
                <textarea name="comments" class="form-control shadow-none" rows="3" cols="28" rows="5" id="message" placeholder="Comments"></textarea>
            </div>

            <button type="submit" class="btn btn-warning" name="submit" value="Submit" id="submit_form">Submit</button>

        </form>
        <br>
        <p>Any queries Mail to - <span class="text-danger">muruganvibes@gmail.com</span></p>
        <p>Contact via Instagram - <span class="text-danger">murugan_vibes</span></p>
    </div>

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

    <script src="./components/js/jquery.min.js"></script>
    <script src="./components/js/bootstrap.min.js"></script>
    <script src="https://kit.fontawesome.com/f2ae98091b.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/firebase/7.14.1-0/firebase.js"></script>
    <!--<script src="main.js"></script>-->




</body>

</html>