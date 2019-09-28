<?php
 require_once("user_status.php");
 session_start();
 include('profile_delete_server.php');

 ?>
 <?php
 	if (logged_in() == true) {
 		?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="images/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Settings</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
  <!--  Light Bootstrap Table core CSS    -->
    <link href="css/profile.css?v=1.4.0" rel="stylesheet"/>

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="css/pe-icon-7-stroke.css" rel="stylesheet" />

</head>

<body>


			<div class="wrapper">
			    <div class="sidebar" data-color="grd" data-image="images/side.jpg">


		    	<div class="sidebar-wrapper">
		            <div class="logo">
		                <a href="index.php" class="simple-text">
		                    <b>Princess Park</b>
		                </a>
		            </div>

		            <ul class="nav">
		                <li>
		                    <a href="profile_view.php">
		                        <i class="pe-7s-user"></i>
		                        <p>Profile</p>
		                    </a>
		                </li>
		                <li>
		                    <a href="profile_edit.php">
		                        <i class="pe-7s-news-paper"></i>
		                        <p>Edit Profile</p>
		                    </a>
		                </li>
		                <li>
		                    <a href="profile_table.php">
		                        <i class="pe-7s-note2"></i>
		                        <p>Table List</p>
		                    </a>
		                </li>
										<li>
		                    <a href="profile_notifications.php">
		                        <i class="pe-7s-bell"></i>
		                        <p>Notifications</p>
		                    </a>
		                </li>
		                <li class="active">
		                    <a href="profile_settings.php">
		                        <i class="pe-7s-science"></i>
		                        <p>Settings</p>
		                    </a>
		                </li>
		            </ul>
		    	</div>
		    </div>


		    <div class="main-panel">
				<nav class="navbar navbar-default navbar-fixed" style="background : black;">
		            <div class="container-fluid">

		                <div class="collapse navbar-collapse">
		                    <ul class="nav navbar-nav navbar-left">
		                        <li><a>
															<p style="color:#f44336"><?php echo $fname = $_SESSION['fname'];?> <?php echo $lname = $_SESSION['lname'];?></p>
														 </a>
		                        </li>
		                    </ul>

		                    <ul class="nav navbar-nav navbar-right">
		                        <li>
		                           <a href="index.php">
		                               <p>Home</p>
		                            </a>
		                        </li>
		                        <li class="dropdown">
		                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
		                              <p>Pages<b class="caret"></b></p>

		                              </a>
		                              <ul class="dropdown-menu">
		                                <li><a href="index.php">Home</a></li>
		                                <li><a href="#">Something</a></li>
		                                <li><a href="#">Something</a></li>
		                                <li><a href="#">Something</a></li>
		                                <li><a href="#">Something</a></li>
																	</ul>
		                        </li>
		                        <li>
		                            <a href="logout.php">
		                                <p>Log out</p>
		                            </a>
		                        </li>
								<li class="separator hidden-lg hidden-md"></li>
		                    </ul>
		                </div>
		            </div>
		        </nav>


						<div class="content">
		            <div class="container-fluid">
		                <div class="card">
		                    <div class="header">
		                        <h4 class="title">Settings</h4>

													<div class="row">
														<div class="col-md-6">
                              <br><br>
															  <p>Delete Account</p>

                                <form method="post" action="profile_delete.php">
                                  <button name="yes"  type="submit" class="btn btn-info btn-fill pull-left">OK</button>
                                  <button name="no" type="submit" class="btn btn-info btn-fill pull-left" style="margin-left:5px">Cancel</button>
                                </form>

                                <br><br><br><br><br>
												    </div>
												  </div>
		                    </div>
		                </div>
		            </div>
		        </div>

    </div>
</div>


</body>

    <!--   Core JS Files   -->
    <script src="js/jquery.3.2.1.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>

		<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="js/light-bootstrap-dashboard.js?v=1.4.0"></script>


</html>

<?php
	}else{

		header('location: index.php');
	}
?>
