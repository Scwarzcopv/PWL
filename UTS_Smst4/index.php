<?php 
    session_start();
?>

<!DOCTYPE html>
<html class="html-custom">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <title>UniSopv-Home</title>

    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" type="image/x-icon" href="images/icon.png">

</head>

<body class="bg-transparent text-light">
    <header>
        <!------------------------------- Nav -------------------------------->
        <nav class="navbar navbar-expand-md navbar-dark bg-custom fixed-top">
            <div class="container px-0">
                <div class="col-md-4">
                    <div class="mr-auto w-100 order-0 order-md-0">
                        <img src="images/icon.png" class="h-auto" width="15%">
                        <a class="navbar-brand text-primary h4 pt-2" href="#"> Uni-Sopv Store</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="collapse navbar-collapse order-1" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto h4">
                            <li class="nav-item">
                                <a class="nav-link pt-1 px-3" href="">Product</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link pt-1 px-3" href="">About</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="collapse navbar-collapse order-2" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item text-center">
                                <?php 
                                if (isset($_SESSION['email'])) {
                                    echo "<a class='nav-link btn btn-primary rounded-pill px-5 text-light' href='config/logout.php'>Log Out</a>";
                                } else {
                                    echo "<a class='nav-link btn btn-primary rounded-pill px-5 m-right-1 mm-bottom-1 text-light' href=''>Register</a>";
                                }
                                ?>
                            </li>
                            <li class="nav-item text-center">
                                <?php 
                                if (!isset($_SESSION['email'])) {
                                    echo "<a class='nav-link btn btn-primary rounded-pill px-5 text-light' href='pages/login.php'>Log In</a>";
                                }
                                ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
        <!------------------------------- Show Email -------------------------------->
        <div class="container d-none d-sm-block px-3 pt-6">
            <?php 
                if (isset($_SESSION['email'])) {
                    echo  "<h5 class='text-custom mx-3'>Login as <u><b>".$_SESSION['email']."</u></b></h5>"; 
                }
            ?>
        </div>
        <!------------------------------- Header -------------------------------->
        <div class="container" style="position: absolute; right: 0; left: 0; top: 9%;">
            <div class="row pt-5">
                <!------------------------------- Show Email -------------------------------->
                <div class="container d-block d-md-none">
                    <?php 
                        if (isset($_SESSION['email'])) {
                            echo  "<h5 class='text-custom pt-custom'>Login as <u><b>".$_SESSION['email']."</u></b></h5>"; 
                        }
                    ?>
                </div>
                <!------------------------------- ---------- -------------------------------->
                <div class="col-md-7 align-self-center p-left-5">
                    <h1 class="text-custom font-weight-bold roboto-slab-serif">BANDZAI MODEL KIT<br>REAL GRADE</h1>
                    <div class="col-md-9 px-0">
                        <h4 class="text-custom py-3">Find your favorite model kit only at<br><u class="text-primary"><a href="#">Uni-Sopv Store</a></u>, get it at the lowest price, of course with original quality from BANDZAI.</h4>
                        <div class="col-12 col-md-10 px-0 pt-3">
                            <div class="row">
                                <div class="col-6">
                                    <a class="nav-link btn btn-primary rounded-pill py-3 text-light" href=""><i class="fa fa-list"></i> PRODUCT</a>
                                </div>
                                <div class="col-6">
                                    <a class="nav-link btn btn-primary bg-transparent rounded-pill py-3 text-primary" href="#"><i class="fa fa-info-circle"></i> ABOUT</a>
                                    <span class="d-block d-md-none my-4"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-5 pl-4-crsl">
                    <div id="demo" class="carousel slide ml-5-crsl" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item">
                                <div class="p-2 crop-crsl">
                                    <img src="images/unit-01.jpg" class="img-thumbnail shadowgreen-crsl"/>
                                </div>
                            </div>
                            <div class="carousel-item active">
                                <div class="p-2 crop-crsl">
                                    <img src="images/rx-93.jpg" class="img-thumbnail shadowgreen-crsl"/>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="p-2 crop-crsl">
                                    <img src="images/u-0.jpg" class="img-thumbnail shadowgreen-crsl"/>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!------------------------------- Footer -------------------------------->
            <div class="container-fluid mt-3-1" style="position: absolute; right: 0; left: 0; bottom: auto;">
                <div class="row">
                <div class="col-sm-12 col-md-4 text-left h3">
                   <a href="mailto:galihadifirmansah88@gmail.com" class="text-danger font-weight-normal"><i class='fas fa-envelope'></i> mygmail@gmail.com</a>
                </div>
                <div class="col-sm-12 col-md-4 text-center h3">
                   <a href="" class="text-custom font-weight-normal"><i class="fa fa-phone fa-flip-horizontal"></i> 081359576968</a>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="share text-right p-0 h2">
                        <ul>
                            <li class="my-0">
                                <a href=""> <span class="fab fa-whatsapp"></span></a>
                            </li>
                            <li class="ml-3 my-0">
                                <a href=""> <span class="fab fa-facebook"></span></a>
                            </li>
                            <li class="mx-3 my-0">
                                <a href=""> <span class="fab fa-instagram"></span></a>
                            </li>
                            <li class="my-0">
                                <a href=""> <span class="fab fa-twitter"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </header>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script>
    $(document).ready(function(){
      $(window).scroll(function(){
        var scroll = $(window).scrollTop();
          if (scroll > 10) {
            $(".bg-custom").css("background" , "#343a40");
          }
          else{
            $(".bg-custom").css("background" , "transparent");   
          }
      })
    })
    </script>
</body>
</html>
