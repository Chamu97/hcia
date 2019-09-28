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


<!--------------------------------------------------------------> 
            <!-- Programs data retrivel by dinuka 2019/09/13 -->
          <!-------------------------------------------------------------->
          <?php
          if(isset($_GET['did'])){
           
            $program_id = $_GET['did'];  
            // $query = "SELECT * FROM degrees WHERE degree_id = '$degrees_id'";
            $query = "SELECT * FROM all_programs WHERE program_id = '$program_id'";
          
          }
          // elseif (isset($_GET['dipid'])) {
          
          //   $diplomas_id = $_GET['dipid'];
          //   $query = "SELECT * FROM diplomas WHERE diploma_id = '$diplomas_id'";
          
          // }elseif (isset($_GET['cid'])) {
          
          //   $certificates_id = $_GET['cid'];
          //   $query = "SELECT * FROM certificates WHERE certificate_id = '$certificates_id'";
          
          // }
          
   
          // $query = "SELECT * FROM degrees WHERE degree_id = '$degrees_id'";
          $get_details = $db->query($query);
          $program_details = mysqli_fetch_assoc($get_details);
          
          // print_r($program_details);

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

   
    <?php if($program_details['program_category'] == 'DEGREE PROGRAMS'){

      $title1 = 'Degree Programs';
      $title2 = $program_details['program_name'];

    }elseif ($program_details['program_category'] == 'DIPLOMA PROGRAMS') {

      $title1 = 'Diploma Programs';
      $title2 = $program_details['program_name'];

    }elseif ($program_details['program_category'] == 'CERTIFICATE PROGRAMS') {

      $title1 = 'Certificate Programs';
      $title2 = $program_details['program_name'];

    } 
    ?>

    <title><?php echo $title1; ?> || <?php echo $title2; ?></title>
    
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
      <!-- /Header -->

      <!-- Contact -->
      <div id="course" class="section md-padding">
        <?php if(isset($_GET['did'])){ ?>

            <h1 style="font-weight: normal; color: #005b06;font-size: -webkit-xxx-large;"><?php echo $program_details['program_name']; ?></h1>
                  
        <?php }elseif (isset($_GET['dipid'])) {  ?>
                    
            <h1 style="font-weight: normal; color: #005b06;font-size: -webkit-xxx-large;"><?php echo $program_details['diploma_name']; ?></h1>
                  
        <?php }elseif (isset($_GET['cid'])) {  ?>
                    
            <h1 style="font-weight: normal; color: #005b06;font-size: -webkit-xxx-large;"><?php echo $program_details['certificate_name']; ?></h1>
                  
        <?php }  ?>

          <span class="border-style"></span>
            <p>&nbsp;</p>
          <div class="container-fluid">
          <div class="col-sm-12 col-lg-12 col-xl-8">
            <div class="card">
              <div class="card-body">
                <?php if(isset($_GET['did'])){

                  if($program_details['program_objective']){

                    $objectives     = $program_details['program_objective'];
                  
                  }
                  if($program_details['program_requirements']){

                    $requirements     = $program_details['program_requirements'];
                  
                  }
                  if($program_details['program_qualifications']){

                    $qualifications     = $program_details['program_qualifications'];
                  
                  }
                  if($program_details['program_duration']){

                    $duration     = $program_details['program_duration'];
                  
                  }
                  if($program_details['program_schedule']){

                    $schedule     = $program_details['program_schedule'];
                  
                  }
                  if($program_details['program_fees']){

                    $fees     = $program_details['program_fees'];
                  
                  }
                  if($program_details['program_registration']){

                    $registration     = $program_details['program_registration'];
                  
                  }
                  if($program_details['program_intake']){

                    $intake     = $program_details['program_intake'];
                  
                  }
                  if($program_details['program_lecturer']){

                    $lecturer     = $program_details['program_lecturer'];
                  
                  }

                }elseif (isset($_GET['dipid'])) {
                  
                  if($program_details['diploma_objectives']){

                    $objectives     = $program_details['diploma_objectives'];
                  
                  }
                  if($program_details['diploma_requirements']){

                    $requirements     = $program_details['diploma_requirements'];
                  
                  }

                  if($program_details['diploma_duration']){

                    $duration     = $program_details['diploma_duration'];
                  
                  }
                  if($program_details['diploma_schedule']){

                    $schedule     = $program_details['diploma_schedule'];
                  
                  }
                  if($program_details['diploma_fees']){

                    $fees     = $program_details['diploma_fees'];
                  
                  }                                    
                  if($program_details['diploma_contact']){

                    $contact     = $program_details['diploma_contact'];
                  
                  }

                }elseif (isset($_GET['cid'])) {
                  
                  if($program_details['certificate_objectives']){

                    $objectives     = $program_details['certificate_objectives'];
                  
                  }
                  if($program_details['certificate_requirements']){

                    $requirements     = $program_details['certificate_requirements'];
                  
                  }                  
                  if($program_details['certificate_duration']){

                    $duration     = $program_details['certificate_duration'];
                  
                  }
                  if($program_details['certificate_schedule']){

                    $schedule     = $program_details['certificate_schedule'];
                  
                  }
                  if($program_details['certificate_fees']){

                    $fees     = $program_details['certificate_fees'];
                  
                  }
                  if($program_details['certificate_contact']){

                    $contact     = $program_details['certificate_contact'];
                  
                  }                                    

                }
                ?>

          <?php if(isset($objectives)){ ?>
                  <h2 class="course-details">
                    Objectives
                  </h2>                
                  <p><?php echo $objectives; ?></p>                
                  <p>&nbsp;</p>
            <?php } ?>

        <?php if(isset($requirements)){ ?>    
                <h2 class="course-details">
                  Entry Requirements
                </h2>                
                <p><?php echo $requirements; ?></p>                
                <p>&nbsp;</p>
        <?php } ?>    

        <?php if(isset($qualifications)){ ?>     
                <h2 class="course-details">
                  Educational Qualifications
                </h2>                
                <p><?php echo $qualifications; ?></p>                
                <p>&nbsp;</p>
          <?php } ?>    

          <?php if(isset($duration)){ ?>    
                <h2 class="course-details">
                  Programme Duration
                </h2>                
                <p><?php echo $duration; ?></p>                
                <p>&nbsp;</p>
          <?php } ?>   

        <?php if(isset($schedule)){ ?>    
                <h2 class="course-details">
                  Programme Schedule
                </h2>                
                <p><?php echo $schedule; ?></p>               
                <p>&nbsp;</p>
          <?php } ?>    

        <?php if(isset($fees)){ ?>     
                <h2 class="course-details">
                  Course Fees  
                </h2>                
                <p><?php echo $fees; ?></p>                
                <p>&nbsp;</p>
          <?php } ?>   

        <?php if(isset($registration)){ ?>    
                <h2 class="course-details">
                  Registration   
                </h2>                
                <p><?php echo $registration; ?></p>                
                <p>&nbsp;</p>
        <?php } ?>   

        <?php if(isset($intake)){ ?>    
                <h2 class="course-details">
                  Intake  
                </h2>                
                <p><?php echo $intake; ?></p>                
                <p>&nbsp;</p>
        <?php } ?> 

      <?php if(isset($lecturer)){ ?>
                <h2 class="course-details">
                  Lecturer In Charge  
                </h2>                
                <p><?php echo $lecturer; ?></p>              
                <p>&nbsp;</p>
      <?php } ?>

      <?php if(isset($contact)){ ?>
                <h2 class="course-details">
                  Contact Us  
                </h2>                
                <p><?php echo $contact; ?></p>              
                <p>&nbsp;</p>
      <?php } ?>
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
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/owl.carousel.min.js"></script>
        <script type="text/javascript" src="js/jquery.magnific-popup.js"></script>
        <script type="text/javascript" src="js/main.js"></script>

        <script>
       $(document).ready(function(){
         $(".dropdown-toggle").dropdown();
       });
     </script>

    </body>

    </html>
