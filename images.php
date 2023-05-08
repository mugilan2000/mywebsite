<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=1024">
    <title>Murugan Vibes</title>
    <!-- CSS only -->
    <link rel="icon" type="image/x-icon" href="./Images/icon.jpg">
    <link rel="stylesheet" href="./components/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/newstyle.css">
    <link rel="stylesheet" href="./components/css/style.css">
    <style>
        .img-top {
            width: 200px;
            height: 200px;
            text-align: center;
            border-collapse: collapse;
            margin: auto;
        }

        #downloadbtn {
            margin: 5vh auto 0 auto;
        }
        .pagenumber{
            padding: 15px;
            text-decoration: none;
            margin-left: 10px;
            border: 1px solid #ccc;
        }
        .active{
            background: green;
            color: white;
        }
    </style>
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css"
        integrity="sha384-zIaWifL2YFF1qaDiAo0JFgsmasocJ/rqu7LKYH8CoBEXqGbb9eO+Xi3s6fQhgFWM" crossorigin="anonymous">

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
                            <a href="home.php" class="nav-link" id="home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="stories.php" class="nav-link" id="stories">Stories</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link" id="images">Images</a>
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

    <div class="container py-5">
        <div class="row">

            <?php
            require 'db.php';
            require 'imagepagelimit.php';
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }

            $query = "Select * from upload";
            $query_run = mysqli_query($con, $query);
            $totalimages = mysqli_num_rows($query_run);
            $check_name = mysqli_num_rows($query_run) > 0;

            $start_from = ($page - 1) * $num_per_page;
            $query = "SELECT * FROM upload limit $start_from,$num_per_page";
            $query_run = mysqli_query($con, $query);

            if ($check_name) {
                while ($row = mysqli_fetch_array($query_run)) {
                    ?>

                    <div class="col">

                        <?php echo '<img src="files/' . $row['filename'] . '" class="img-top" alt="Image">'; ?>
                        <br>
                        <center><a href="download.php?file=<?php echo $row['filename'] ?>"><input type="submit" value="Download"
                                    id="downloadbtn"
                                    style="width: 70%; background-color: #f1c232; border:1px solid darkred; border-radius:5px; height: 50px;"></a>
                        </center>
                        <br>
                    </div>
                    <?php
                }
            } else {
                echo "No data found";
            }
            ?>
            
        </div>
        <center>
        <?php
            $pr_query = "SELECT * FROM upload";
            $query_run = mysqli_query($con, $pr_query);
            $totalrecord= mysqli_num_rows($query_run);
            //echo $totalrecord;
            
            $totalpages= ceil($totalrecord/$num_per_page);
            echo "<br>";
            if ($page > 1) {
                echo "<a href='images.php?page=" . ($page - 1) . "' class='pagenumber'>Previous</a>";
            }

            
            for ($i = 1; $i < $totalpages; $i++) {
                if($page==$i){
                echo "<a href='images.php?page=" . $i . "' class='active pagenumber'>$i</a>";
                }
                else{
                echo "<a href='images.php?page=" . $i . "' class='pagenumber'>$i</a>";
                }
            }

            if ($i > $page) {
                echo "<a href='images.php?page=" . ($page + 1) . "' class='pagenumber'>Next</a>";
            }
            ?>
            </center>
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



</body>


</script>

</html>