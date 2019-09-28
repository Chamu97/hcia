
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="css/user.css">

</head>
<body>

	<center>

		<div class="bbb">
			<div class="bb">

				<form method="post" action="Admin/index.php" name="myform">

					<h2>Admin Login</h2>

					<div class="input-group">
						<label>Username</label>
						<input type="text" name="username" id="username" placeholder="Please Enter username">
					</div>
					<div class="input-group">
						<label>Password</label>
						<input type="password" name="password" id="password" placeholder="Please Enter password">
					</div>
					<br>
					<div class="input-group">
						<button type="submit" class="btn" name="admin">Login</button>
					</div>

				</form>
				<p>
					<a href="Aquinas/Main.php">Lecturer login</a>
				</p>
				<p>
					<a href="login.php">User login</a>
				</p>

			</div>

			<a href="index.php"> <div class="alert-close" ></div></a>



			<div class="right-section">

				<a href="index.php">
			  <div  style="width:50px; height:50px; background-color:#f44336; position: relative;  top:0px; right:-125px;">

			    <img src="images/into.png" style="width:18px;height:18px; padding-top:15px">

			  </div>
			  </a>

				<div class="Rerror">
			</div>
		</div>
	</center>

</script>
</body>
</html>
