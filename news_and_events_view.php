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
          // if(isset($_GET['did'])){
           
          //   $program_id = $_GET['did'];  
          //   // $query = "SELECT * FROM degrees WHERE degree_id = '$degrees_id'";
          //   $query = "SELECT * FROM all_programs WHERE program_id = '$program_id'";
          
          // }
          
          // $get_details = $db->query($query);
          // $program_details = mysqli_fetch_assoc($get_details);
          
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

  

    <title>News And Events</title>
    
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

          <!-- <span class="border-style"></span> -->
            <p>&nbsp;</p>
          <div class="container-fluid">
          <div class="col-sm-12 col-lg-12 col-xl-8">
            <div class="card news-body-style">
              <div class="card-body">                

                <h2 class="news-details">
                  Research on Peace and Reconciliation  
                </h2>
                <p>&nbsp;</p>
                <img src="https://www.aquinas.lk/file/2019/09/PR-Project-2019-2-825x340.jpg" class="news-view-img-style">
                <p>&nbsp;</p>                
                <p>The Aquinas Research Centre, established on 01 June 2018, will take up its debut research project in October 2019 making it a red-letter day in the history of Aquinas College of Higher Studies. The study focuses on Peace and Reconciliation in the Western Province of Sri Lanka during the Post-War Period; 2010-2019. Reconciliation stands for a long term process by which the parties open to violent dispute build up trust, learn to live corporately and create solid peace. The Aquinas Research Centre believes this as a timely need to be addressed.</p>

 

<p>With the initiative underpinned by Rev. Fr. Mahendra Gunatilleke – National Director of Caritas Sri Lanka – The Social & Economic Development Centre (CSL-SEDEC), an initial discussion was held on 19 June 2019 chaired by Very Rev. Dr. Susith Mark Lal Silva – Rector / Vice-Chancellor of Aquinas College. The MOU was signed between Aquinas College and CSL-SEDEC, on 02 August 2019, laying the cornerstone of the research project.</p>

 

<p>The proposed research will operate in three phases namely in Kalutara, Colombo and Gampaha Districts. Three Divisional Secretary’s Divisions from each District and four Grama Niladhari Divisions will be selected to provide a platform for the study.</p>

 

<p>The main objective of this research is to get an understanding of the awareness of the people on Peace and Reconciliation in the Western Province. The selected study will also explore sub-objectives such as; to know the reconciliation level, find out the barriers and identify the solutions to improve the peace and reconciliation process.</p>

 

<p>The Research Team consists of Very Rev. Dr. Susith Mark Lal Silva – Rector / Vice-Chancellor of Aquinas College, Dr. Susantha Dissanayake – Chief Coordinator for Research, Department Head of Humanities, Research Coordinators and twenty undergraduates of the college as Research Assistants.</p>              
                <p>&nbsp;</p>
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
