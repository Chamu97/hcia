<!DOCTYPE html>
<html>
<?php
//session_start();
//require_once("user_status.php");

include('db/dbcon.php');
?>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>E Library | Aquinas College</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="all,follow">
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
  <!-- Tweaks for older IEs--><!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
  <!-- Header -->
  <?php include 'include/h_header.php'; ?>


  <div id="all">
    <div id="content">

      <div id="hot">
        <div class="box py-4">
          <div class="container">
            <div class="row">
              <div class="col-md-12">
                <h2 class="mb-0">E Library</h2>
              </div>
            </div>
          </div>
        </div>

        <div class="container-fluid">
          <div class="row">
            <div class="col-md-4">
  <br>
            </div>
            <?php
            $sql = "SELECT * FROM tbl_books";
            $courses = $db->query($sql);
            ?>
            <!-- Row -->
            <div class="row">

            </div>
            <!-- Data Table area Start-->
            <div class="data-table-area">
              <div class="container">
                <div class="row">
                    <div class="data-table-list">
                      <div class="row">

                        <!-- <div class="col-sm-1"></div> -->
                        <!-- <div class="col-md-12"> -->
                          <!-- <div class="card text-center">
                            <div class="card-body"> -->
                              <!-- <div class="table-responsive"> -->
                                <table id="data-table-basic" class="table table-striped">
                                    <br><br>
                                  <thead>
                                    <tr>
                                      <th class="text-center">Name</th>
                                      <th class="text-center">View</th>
                                      <th class="text-center">Download</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php while ($l = mysqli_fetch_assoc($courses)) { ?>
                                      <tr>
                                        <td><?= $l['name']; ?></td>
                                        <td><a href="books/upload/<?php echo $l['image']; ?>" target="_blank">View</a></td>
                                        <td><a href="books/upload/<?php echo $l['image']; ?>" download>Download</td></tr>
                                        </tr>
                                      <?php } ?>
                                    </tbody>
                                  </table>
                                </div>
                                <!-- <a href="lecs/index.php" class="btn btn-primary">Click Here</a> -->

                        <br><br><br>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Data Table area End-->
            </div>

        </div>
      </div>

      <!-- Footer -->
      <?php include 'include/footer.php'; ?>

      <!-- JavaScript files-->
      <script src="vendor/jquery/jquery.min.js"></script>
      <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
      <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
      <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
      <script src="js/front.js"></script>
    </body>
    </html>
