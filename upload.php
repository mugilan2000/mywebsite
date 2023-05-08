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
    <style>
        .btn{
            width: 7%;
            margin: 5vh auto 0 auto;
        }
    </style>
    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
    require('db.php');
    if(isset($_POST['submit'])){
        $fileName = $_FILES['file']['name'];
        $fileTmpName = $_FILES['file']['tmp_name'];
        $path = "files/".$fileName;

        
        $query = "INSERT INTO upload(filename) VALUES ('$fileName')";
        $run = mysqli_query($con,$query);
        
        
        if($run){
            move_uploaded_file($fileTmpName,$path);
            // echo "<div class='form'>
            //       <h3>Image uploaded successfully</h3><br/>
            //       <p class='link'>Click here to <a href='upload.php'>Upload</a> again.</p>
            //       </div>";
            header("Location: uploadSuccess.php");
        //     echo '<script type="text/javascript">
        //     $(document).ready(function() {
        //         swal({
        //             title: "Image Uploaded Successfully",
        //             icon: "success",
        //             button: "Ok",
        //             timer: 3000
        //         });
        //     });
        // </script>';
        }
        else{
            echo "error".mysqli_error($conn);
        //     echo '<script type="text/javascript">
        //     $(document).ready(function() {
        //         swal({
        //             title: "Failure",
        //             icon: "error",
        //             button: "Ok",
        //             timer: 3000
        //         });
        //     });
        // </script>';
        }
        
        
    }
    
    ?>
   <div class="form">
   
       
           
               <form action="upload.php" method="post" enctype="multipart/form-data" id ="form">
                <h4>Upload file</h4>
                    <input type="file" name="file" required>
                    <br>
                    <button type="submit" name="submit"> Upload</button>

                    
                </form>
          
      
   
</div>
<input type="button" value="Go To List" class="btn btn-primary shadow-none"
                onclick="location.href='viewimages.php';" />
</body>
</html>