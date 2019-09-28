<?php include('login_server.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/user.css">
</head>
<body>

	<center>

		<div class="bbb">
			<div class="bb">

				<form method="post" action="home.php">

					<h2>Login to your account</h2>

					<div class="input-group">
						<label>Email or Phone</label>
						<input type="text" name="ep"  placeholder="Please Enter email or mobile">
					</div>
					<div class="input-group">
						<label>Password</label>
						<input type="password" name="password"  placeholder="Please Enter password">
					</div>
					<br>
					<div class="input-group">
						<button type="submit" class="btn" name="login_user">Login</button>
					</div>

				</form>

				<p>
					Not yet a member? <a href="register.php">  Sign up</a>
					</br>
					<a href="forgot_password.php">Forgot Password?</a>
					</br>
					<a href="admin_login.php">Admin login</a>
				</p>

			</div>

			<a href="index.php"> <div class="alert-close" ></div></a>



			<div class="right-section">

				<a href="index.php">
			  <div  style="width:50px; height:50px; background-color:#f44336; position: relative;  top:0px; right:-125px;">

			    <img src="images/into.png" style="width:18px;height:18px; padding-top:15px">

			  </div>
			  </a>

				<div class="Rerror"><?php include('errors.php'); ?></div>
			</div>
		</div>
	</center>

</body>
</html>
