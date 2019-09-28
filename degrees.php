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
  <title>Degree Programs</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

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
  <link type="text/css" rel="stylesheet" href="css/hover.css">
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
<!-- /Header -->
      
      <!-- Contact -->
      <div id="course" class="section md-padding">

        <!-- Container -->
        <div class="container">

          <!-- Row -->
          <div class="row">

            <!-- Section-header -->
            


                <?php
                if(isset($_POST['search'])){

                    $search = $_POST['search'];                    
                    
                    if($search != ''){

                      // $sql1 = " SELECT * FROM degrees WHERE degree_name LIKE '%".$search."%' OR degree_code LIKE '%".$search."%'";
                      $sql1 = " SELECT * FROM all_programs WHERE program_category  = 'DEGREE PROGRAMS' AND program_name LIKE '%".$search."%' OR program_code LIKE '%".$search."%'";
                      $search_results = filterTable($sql1);
                      //$search_results = mysqli_query($db,$sql1);  
                    }else{

                       $sql1 = "SELECT * FROM all_programs WHERE program_category  = 'DEGREE PROGRAMS'";
                    // $sql1 = " SELECT * FROM all_programs WHERE program_category  = 'DEGREE PROGRAMS'";
                        $search_results = filterTable($sql1);
                    }
                    

                }else{
                        $sql1 = "SELECT * FROM all_programs WHERE program_category  = 'DEGREE PROGRAMS'";
                    // $sql1 = " SELECT * FROM all_programs WHERE program_category  = 'DEGREE PROGRAMS'";
                        $search_results = filterTable($sql1);
                }

                //db connect
                function filterTable($sql1){
                    $conn = mysqli_connect('127.0.0.1','root','','aquinas');
                    $filter_results = mysqli_query($conn, $sql1);
                    return $filter_results;

                }
                ?>
          
              <!-- Hover Search bar-->
              <div>
                <form method="post" name="search_bar" class="search-bar-form">
                    <input type="search" placeholder="search.." name="search" id="search_id" class="input-style">
                    <i class="fa fa-search search-bar"></i>
                </form>
              </div>
  <!--End of Hover search bar-->           
          </div>
          <!-- /Row -->
            <!-- <h2 class="title">Degree Programs</h2> -->
            <!-- Data Table area Start-->
            <div class="data-table-area">
              <div class="container">
                    <div class="data-table-list">
                      <div class="row">
                        <!-- <div class="bg-img" style="background-image: url('https://www.aquinas.lk/file/2017/06/aq_bg7.jpg');"> -->
                        <div class="col-sm-3"></div>
                        <div class="col-sm-8">
                          <div class="section-header text-center">
                          <h2 class="title title-style">Degree Programs</h2>
                        </div>
                              <div class="table-responsive">
                                <table id="courseTable" class="table table-striped">
                                  <tbody>
                                    <?php while ($cs = mysqli_fetch_array($search_results)) { ?>
                                    <tr>

                                      <td class="text-left">                                                                                                                
                                        <p><?php echo $cs['program_code'].' - '.' '.$cs['program_name']; ?></p>
                                      </td>

                                      <td>
                                        <a href="programs-view-page.php?did=<?php echo $cs['program_id']; ?>" class="btn btn-info">Read More <i class="fa fa-arrow-right"></i>
                                        </a>
                                      </td>

                                    </tr>
                                  <?php } ?>
                                  </tbody>
                                </table>
                              </div>
                              <!-- <a href="lecs/index.php" class="btn btn-primary">Click Here</a> -->
                      </div>
                    </div>
                    </div>
                </div>
              </div>
            </div>
            <!-- Data Table area End-->
          </div>
          <!-- /Container -->

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
