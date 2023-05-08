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
        .img-top{
            width: 200px;
            height: 200px;
            text-align: center;
            border-collapse: collapse;
            margin: auto;
        }
        .table input{
            width: 70%;
            margin: 10vh auto 0 auto;
            padding: 7px;
        }
        .table-responsive p{
            text-align: left;
        }
        .table-responsive a{
            padding: 15px;
            text-decoration: none;
            margin-left: 10px;
            border: 1px solid #ccc;
        }
        .table-responsive p{
            text-align: left;
        }
        .active{
            background: green;
            color: white;
        }
        .table-responsive input{
            margin-top: 50px;
        }
    </style>

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
        <h5 class="text-center">List of Images</h5>
        <input type="button" value="Add Image" class="btn btn-primary shadow-none"
                onclick="location.href='upload.php';" />
        <div class="table-responsive py-2">
            <?php
            require('db.php');
            require('pagelimit.php');
            require('mainPhp.php');
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
            } else {
                $page = 1;
            }

            $query="SELECT * from upload";
            $query_run=mysqli_query($con,$query);
            $totalimages = mysqli_num_rows($query_run);

            $start_from = ($page - 1) * $num_per_page;
            $query = "SELECT * FROM upload limit $start_from,$num_per_page";
            $query_run = mysqli_query($con, $query);
            
            ?>
            
            <table class="table table-bordered border-primary table-fixed">
                <thead>
                    <tr>
                        <th width="10%">Id</th>
                        <th width="30%">Images</th>
                        <th width="40%">Filename</th>
                        <th width="50%">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(mysqli_num_rows($query_run)>0)
                    {
                        while($row=mysqli_fetch_assoc($query_run)){
                            ?>
                            <tr>
                                <td>
                                    <?php echo $row['id']; ?>
                                </td>
                                <td>
                                <?php echo '<img src="files/'.$row['filename'].'" class="img-top" alt="Image">';?>
                                </td>
                                <td>
                                <?php echo $row['filename'];?>
                                </td>
                                <td>
                                <input type="button" value="Delete" class="btn btn-danger shadow-none"
                                onclick="javascript:location.href='delete.php?id=<?php echo $row['id'];?>';" />
                                </td>
                            </tr>
                            <?php
                    }
                }
                else{
                    echo "No data found";
                }
                ?>
                </tbody>
            </table>
            <?php
            $pr_query = "SELECT * FROM upload";
            $query_run = mysqli_query($con, $pr_query);
            $totalrecord= mysqli_num_rows($query_run);
            //echo $totalrecord;
            
            $totalpages= ceil($totalrecord/$num_per_page);
            echo "<br>";
            if ($page > 1) {
                echo "<a href='viewimages.php?page=" . ($page - 1) . "' class=''>Previous</a>";
            }

            
            for ($i = 1; $i < $totalpages; $i++) {
                if($page==$i){
                echo "<a href='viewimages.php?page=" . $i . "' class='active'>$i</a>";
                }
                else{
                echo "<a href='viewimages.php?page=" . $i . "' class=''>$i</a>";
                }
            }

            if ($i > $page) {
                echo "<a href='viewimages.php?page=" . ($page + 1) . "' class=''>Next</a>";
            }
            ?>
            <br>
            <input type="button" value="Go Back" class="btn btn-primary shadow-none"
                onclick="location.href='adminHome.php';" />
        </div>
    </div>