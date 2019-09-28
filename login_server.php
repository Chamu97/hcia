<?php
	include("connector.php");
	session_start();

	// variable declaration
	$em = "";
	$email  = "";
	$password = "";
	$regSuccess = "";
	$remember = "";
	$errors = array();
	$_SESSION['success'] = "";


	if(isset($_SESSION['regSuccess'])){
		if($_SESSION['regSuccess']!=""){
		$regSuccess = $_SESSION['regSuccess'];
		array_push($errors, $regSuccess);
		$_SESSION['regSuccess'] = "";
	}
	}

	if(isset($_SESSION['email_changed'])){
		if($_SESSION['email_changed']!=""){
		$email_changed = $_SESSION['email_changed'];
		array_push($errors, $email_changed);
		$_SESSION['email_changed'] = "";
		session_destroy();
	}
	}







  // LOGIN USER
  if (isset($_POST['login_user']))
	{
    // receive all input values from the form

    $em = mysqli_real_escape_string($conn, $_POST['ep']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
		$remember = filter_input(INPUT_POST, 'remember');

    // form validation: ensure that the form is correctly filled
    if (empty($em))
		{
      array_push($errors, "Email or mobile is required");
    }
    if (empty($password))
		{
      array_push($errors, "Password is required");
    }

		$passwordE = md5($password);//encrypt the password

    // checking if there are no errors in the form
    if (count($errors) == 0)
		{
			$query = "SELECT * FROM customer WHERE email='$em' AND password='$passwordE'";
			$result = mysqli_query($conn, $query);
      if (mysqli_num_rows($result) == 1)
			{
				$row = mysqli_fetch_array($result);

				if($row['cnfemail'] == '0'){
					array_push($errors, "Your new email is not confirmed.
					 Please confirm your email using the link that sent to your email.
						Then you can login to your account.");
				}else{
					$email = $row['email'];
					$fname = $row['fname'];
					$lname = $row['lname'];

					if($remember)
	       	{
	       		setcookie('em',$em , time() + (60 * 60 * 24 * 90), "/");
	       		setcookie('password',$password , time() + (60 * 60 * 24 * 90), "/");
	       	}else{
						unset($_COOKIE['em']);
						unset($_COOKIE['password']);
						setcookie('em', null, -1, '/');
						setcookie('password', null, -1, '/');
					}


					$_SESSION['email'] = $email;
					$_SESSION['fname'] = $fname;
					$_SESSION['lname'] = $lname;
					$_SESSION['success'] = "You are now logged in";

					if($_SESSION['table'] == "table"){
					$_SESSION['table'] == "";
					header('location: ../caviar/Table-Reservation.php');
				}else{
					header('location: ../main/index.php');
				}
			}
		}else{
        array_push($errors, "Wrong username/password combination");
    }
  }
}else {
	//If user has previously selected "remember me option", his credentials are stored in cookies.
	if((isset($_COOKIE['em'])) && (isset($_COOKIE['password'])))
	{
		//Get user credentials from cookies.
		$em = filter_var($_COOKIE['em']);
		$password = filter_var($_COOKIE['password']);
	}
}



mysqli_close($conn);
  ?>
