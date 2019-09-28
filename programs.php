<!DOCTYPE html>
<html lang="en" >
<?php
// session_start();
// require_once("user_status.php");
// include('db/dbcon.php');

// //session timeout condition
// if( $_SESSION['last_activity'] < time()-$_SESSION['expire_time'] ) { //have we expired?
//     //redirect to logout.php
//     header('Location: logout2.php'); //change yoursite.com to the name of you site!!
// } else{ //if we haven't expired:
//     $_SESSION['last_activity'] = time(); //this was the moment of last activity.
// }
?>
<head>

  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>All Programs</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- Google font -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet"> -->

  <!-- Font Awesome --> 
<!--   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" type="text/css" rel="stylesheet">
 -->
  <!-- Bootstrap -->
  <!-- <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" /> -->

  <!-- Owl Carousel -->
  <!-- <link type="text/css" rel="stylesheet" href="css/owl.carousel.css" />
  <link type="text/css" rel="stylesheet" href="css/owl.theme.default.css" /> -->

  <!-- Magnific Popup -->
  <!-- <link type="text/css" rel="stylesheet" href="css/magnific-popup.css" /> -->
  <!-- Favicon -->
  <!-- <link rel="icon" href="img/aquinas_logo.ico"> -->

  <!-- Font Awesome Icon -->
  <!-- <link rel="stylesheet" href="css/font-awesome.min.css"> -->

  <!-- Custom stlylesheet -->
  <!-- <link type="text/css" rel="stylesheet" href="css/style.css" /> -->

  <!--    hover stylesheet-->
    <!-- <link type="text/css" rel="stylesheet" href="css/hover.css"> -->
    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"> -->

    <!---------------------------------This is new template styles ----------------------------------------> 


  <!-- Bootstrap CSS-->
  <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome CSS-->
  <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
  <!-- Google fonts - Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
  <!-- owl carousel-->
  <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
  <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
  <!-- theme stylesheet-->
  <link rel="stylesheet" href="css/style.green.css" id="theme-stylesheet">
  <!-- Custom stylesheet - for your changes-->
  <link rel="stylesheet" href="css/custom.css">
  <!-- Favicon-->
  <link rel="shortcut icon" href="favicon.ico"> 


</head>

<body>
  <!-- Header -->
  <?php include 'include/header.php'; ?>
      <!-- /Header -->
      <div class="section-header text-center">
          <h2 class="title title-style">All Programs</h2>
      </div>

      <div class="container-fluid">
            <div class="card card-style">
              <div class="card-body">
                <div class="container">
                  <div class="row">
                    <div class="col-md-10 col-md-offset-1 column-style">
                      <div class="home-content">
                        <!-- <h1 class="white-text">Programs</h1> -->
                        <p class="white-text"><a href="degrees.php" class="btn btn-success">Degree Programs</a></p>
                        <p class="white-text"><a href="degrees.php" class="btn btn-success">Diploma Programs</a></p>
                        <p class="white-text"><a href="degrees.php" class="btn btn-success">Certificate Programs</a></p>
                      </div>
                    </div>      
                  </div>
                </div>
              </div>
            </div>
          </div>
        <!-- Footer -->
        <?php include 'include/footer.php'; ?>
        <!-- /Footer -->

        <!-- Back to top -->
        <div id="back-to-top"></div>
        <!-- /Back to top -->

        <!-- Preloader -->
        <div id="preloader">
          <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </div>
        </div>
        <!-- /Preloader -->

        <!-- jQuery Plugins -->
        <!-- <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
        <script type="text/javascript" src="js/main.js"></script> -->

        <!-- ---------------New template plugins and scripts--------------------------------->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
        <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
        <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
        <script src="js/front.js"></script>

        <script>
       $(document).ready(function(){
         $(".dropdown-toggle").dropdown();
       });
     </script>

    </body>

    </html>
