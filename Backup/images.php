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
    <link rel="icon" type="image/x-icon" href="./Images/68.jpg">
    <link rel="stylesheet" href="./components/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/newstyle.css">
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
        <div class="row mt-4">
            <?php
            require 'db.php';
           
            $query = "Select * from upload";
            $query_run = mysqli_query($con,$query);
            $check_name=mysqli_num_rows($query_run)>0;

            if($check_name){
                while($row = mysqli_fetch_array($query_run))
                {
                    ?>
                    <!--<div class="card_content">-->
                    <div class="col-lg-4">
                    
                        <div class="card">
                            <div class="card-body">
                                <?php echo '<img src="files/'.$row['filename'].'" class="card-img-top" alt="Image">';?>
                                <h2 class="card-title"></h2>
               
              
                                <center><a href="download.php?file=<?php echo $row['filename'] ?>"><input type="submit" value="Download" style="width: 100%; background-color: #f1c232; border:2px solid darkred; border-radius:5px; height: 50px;"></a></center>
           
                            </div>
                            
                        </div>
                    </div>
                    <?php
                }
            }
            else{
                echo "No data found";
            }
            ?>
    <div class="pagination1">
          <li class="page-item previous-page disable"><a class="page-link" href="#">Prev</a></li>
          <li class="page-item current-page active"><a class="page-link" href="#">1</a></li>
          <li class="page-item dots"><a class="page-link" href="#">...</a></li>
          <li class="page-item current-page"><a class="page-link" href="#">5</a></li>
          <li class="page-item current-page"><a class="page-link" href="#">6</a></li>
          <li class="page-item dots"><a class="page-link" href="#">...</a></li>
          <li class="page-item current-page"><a class="page-link" href="#">10</a></li>
          <li class="page-item next-page"><a class="page-link" href="#">Next</a></li>
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
<script type="text/javascript">
    function getPageList(totalPages, page, maxLength){
  function range(start, end){
    return Array.from(Array(end - start + 1), (_, i) => i + start);
  }

  var sideWidth = maxLength < 9 ? 1 : 2;
  var leftWidth = (maxLength - sideWidth * 2 - 3) >> 1;
  var rightWidth = (maxLength - sideWidth * 2 - 3) >> 1;

  if(totalPages <= maxLength){
    return range(1, totalPages);
  }

  if(page <= maxLength - sideWidth - 1 - rightWidth){
    return range(1, maxLength - sideWidth - 1).concat(0, range(totalPages - sideWidth + 1, totalPages));
  }

  if(page >= totalPages - sideWidth - 1 - rightWidth){
    return range(1, sideWidth).concat(0, range(totalPages- sideWidth - 1 - rightWidth - leftWidth, totalPages));
  }

  return range(1, sideWidth).concat(0, range(page - leftWidth, page + rightWidth), 0, range(totalPages - sideWidth + 1, totalPages));
}

$(function(){
  var numberOfItems = $(".card").length;
  var limitPerPage = 12; //How many card items visible per a page
  var totalPages = Math.ceil(numberOfItems / limitPerPage);
  var paginationSize = 7; //How many page elements visible in the pagination
  var currentPage;

  function showPage(whichPage){
    if(whichPage < 1 || whichPage > totalPages) return false;

    currentPage = whichPage;

    $(".card").hide().slice((currentPage - 1) * limitPerPage, currentPage * limitPerPage).show();

    $(".pagination1 li").slice(1, -1).remove();

    getPageList(totalPages, currentPage, paginationSize).forEach(item => {
      $("<li>").addClass("page-item").addClass(item ? "current-page" : "dots")
      .toggleClass("active", item === currentPage).append($("<a>").addClass("page-link")
      .attr({href: "javascript:void(0)"}).text(item || "...")).insertBefore(".next-page");
    });

    $(".previous-page").toggleClass("disable", currentPage === 1);
    $(".next-page").toggleClass("disable", currentPage === totalPages);
    return true;
  }

  $(".pagination1").append(
    $("<li>").addClass("page-item").addClass("previous-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Prev")),
    $("<li>").addClass("page-item").addClass("next-page").append($("<a>").addClass("page-link").attr({href: "javascript:void(0)"}).text("Next"))
  );

  $(".card").show();
  showPage(1);

  $(document).on("click", ".pagination1 li.current-page:not(.active)", function(){
    return showPage(+$(this).text());
  });

  $(".next-page").on("click", function(){
    return showPage(currentPage + 1);
  });

  $(".previous-page").on("click", function(){
    return showPage(currentPage - 1);
  });
});

</script>
</html>