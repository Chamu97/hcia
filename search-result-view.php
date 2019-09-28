<!DOCTYPE html>
<html lang="en" >
<?php
// session_start();
// require_once("user_status.php");
include('db_dinuka/dbcon.php');

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
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->


    <title>Search Results</title>
    
  <!-- Google font -->
  <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet"> -->

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

  <!---------------------------------End of new template styles ----------------------------------------> 
    


</head>

<body>
  <!-- Header -->
  <?php include 'include/header.php'; ?>

  <?php 

    if( isset($_POST['search_value']) ){
      
      $keyword = $_POST['search_value'];

      if($keyword){
        
        $query = " SELECT * FROM all_programs WHERE program_name LIKE '%".$keyword."%' OR program_code LIKE '%".$keyword."%' OR program_category LIKE '%".$keyword."%'";
        // $query = " select * from degrees ";
        // $search_results = $db->query($query);
        $search_results = mysqli_query($db,$query);

        // while($programs = mysqli_fetch_array($search_results)){

        //     if($programs['program_category'] == 'DEGREE PROGRAMS'){

        //       $code = 'did';

        //     }elseif ($programs['program_category'] == 'DIPLOMA PROGRAMS') {

        //       $code = 'dipid';

        //     }elseif ($programs['program_category'] == 'CERTIFICATE PROGRAMS') {

        //       $code = 'cid';

        //     }

        //     // print_r($code);
        // }

      }
      
    }
    ?>

  <!-- Contact -->
  <div class="section-header text-left">
          <h2 class="title title-style">Search Results</h2>
          <!-- <span class="border-style"></span> -->
      </div>
      <div id="course" class="section md-padding">        
          <!-- <span class="border-style"></span> -->
            
          <div class="container-fluid">
          <div class="col-sm-12 col-lg-12 col-xl-8">
            <div class="card">
              <div class="card-body">                
                
                <?php 

                if( isset($_POST['search_value'] ) ): ?>

                <?php 

                  while ($results = mysqli_fetch_array($search_results) ) {  ?>
                    <h2 class="course-details">
                      <?php echo $results['program_name']; ?>
                    </h2>                
                    <p><?php echo $results['program_objective']; ?></p>
                    <p><?php echo $results['program_requirements']; ?></p>
                                      
                    <p><a href="programs-view-page.php?did=<?php echo $results['program_id']; ?>" class="btn btn-primary">Read More <i class="fa fa-arrow-right"></i></a></p>                                            
                    <p>&nbsp;</p>
                                   
          
          <?php   } ?>
          <?php endif;  ?>
                  
        
              </div>
            </div>
          </div>
        </div>

      </div>
        <!-- /Contact -->


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
