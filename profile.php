<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="images/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Profile</title>

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
		                    <b>Aqvinas Profile/b>
		                </a>
		            </div>


		            <ul class="nav">
		                <li class="active">
		                    <a href="profile.php">
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
		                    <a href="profile_notifications.php">
		                        <i class="pe-7s-bell"></i>
		                        <p>Notifications</p>
		                    </a>
		                </li>
		                <li>
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
																		<p style="color:#f44336"><?php echo $fname = "Chami";?> <?php echo $lname = "Muthukumarana";?></p>
																 </a>
				                        </li>

				                    </ul>

				                    <ul class="nav navbar-nav navbar-right">
				                        <li>
				                           <a href="home.php">
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
				                            <a href="index.php">
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
										<div class="row">
								       <div class="col-md-12">
				                 <div class="card card-user">
					                	<div class="image">
								            	<img src="images/cover1.jpg" alt="..."/>
							              </div>
		                       	<div class="content">
							             		<div class="author">
								              	<img class="avatar border-gray" src="images/faces/face-1.jpg" alt="..."/>

								                <h4 class="title"><?php echo $fname = "Chami";?> <?php echo $lname = "Muthukumarana";?><br /><br></h4>
															</div>

															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label>First Name</label>
																		<input type="text" class="form-control" disabled placeholder="Company" value="<?php echo $fname;?>">
																	</div>
																</div>
																<div class="col-md-6">
																	<div class="form-group">
																		<label>Last Name</label>
																		<input type="text" class="form-control" disabled placeholder="Last Name" value="<?php echo $lname;?>">
																	</div>
																</div>
															</div>

															<div class="row">
																<div class="col-md-6">
																	<div class="form-group">
																		<label for="exampleInputEmail1">Email address</label>
																		<input type="email" class="form-control" disabled placeholder="Email">
																	</div>
																</div>
															</div>

															<div class="row">
																<div class="col-md-4">
																	<div class="form-group">
																		<label>Mobile</label>
																		<input type="text" class="form-control" disabled placeholder="Mobille" value="michael23">
																	</div>
																</div>
															</div>


															<button type="submit" class="btn btn-info btn-fill pull-right">Download Details</button>
															<div class="clearfix"></div>

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
