<?php
	include("connector.php");
	session_start();

	// variable declaration
	$fname = "";
	$lname = "";
	$email = "";
	$mobile = "";
	$cnfemail = "0";
	$cnfmobile = "0";
	$errors = array();
	$_SESSION['success'] = "";
	$_SESSION['regSuccess'] = "";



	// REGISTER USER
	if (isset($_POST['reg_user'])) {
		// receive all input values from the form
		$fname = mysqli_real_escape_string($conn, $_POST['fname']);
		$lname = mysqli_real_escape_string($conn, $_POST['lname']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$mobile = mysqli_real_escape_string($conn, $_POST['mobile']);
		$password_1 = mysqli_real_escape_string($conn, $_POST['password_1']);
		$password_2 = mysqli_real_escape_string($conn, $_POST['password_2']);




		 // first check the database to make sure a user does not already exist with the same username or email
	   $query = "SELECT * FROM customer WHERE mobile='$mobile' OR email='$email'";
	   $result = mysqli_query($conn, $query);

		 // Associative array
	   $user = mysqli_fetch_assoc($result);

	   if ($user) { // if user exists
	     if ($user['mobile'] == $mobile) {
	       array_push($errors, "Mobile number is already exists");
	     }
	     if ($user['email'] == $email) {
	       array_push($errors, "Email is already exists");
	     }
	   }



		 //check the database to make sure a user does not already registered with the same username or email in account table
		 $query = "SELECT * FROM account WHERE email='$email' OR mobile='$mobile'";
		 $results = mysqli_query($conn, $query);

		 if (mysqli_num_rows($results) == 1) {
			 array_push($errors, "You have already registered but your account is not confirmed.
				Please confonfirm your email or mobile number using the link that sent to your email and mobile.
				 Then you can login to your account.");
 		 }else{


		 if (empty($password_1)){
		 	array_push($errors, "Password is empty");
		 }
		 if (empty($password_2)){
		 	 array_push($errors, "Confermation password is empty");
		  }
		}



		// register user if there are no errors in the form
		if (count($errors) == 0) {
			$password = md5($password_1);//encrypt the password before saving in the database
			$query = "INSERT INTO account (fname, lname, email, mobile, password, cnfemail, cnfmobile ) VALUES('$fname', '$lname', '$email', '$mobile', '$password', $cnfemail, $cnfmobile)";
			mysqli_query($conn, $query);


			$to = $email;
			$subject = 'Welcome to Princes Park';
			$message = 'Dear '.$fname.' '.$lname.'
									You are welcome to dine with us at Princes Park returent. We will serve you with the mouth watering dishes.
									Have a pleasent dining experience. Enjoy your food and have a nice time in our resturent.';



				// Send The Message Using mail() Function.
				if(mail($to, $subject, $message ))
				{
						$successMessage = "Welcome to Princes Park";
				}

			$_SESSION['regSuccess'] = "You have successfully registered. Please confonfirm your email or mobile number
			 using the link that sent to your email and mobile. Then you can login to your account.";


			$_SESSION['email'] = $email;
			$_SESSION['fname'] = $fname;
			$_SESSION['success'] = "Your account is now logged in";
			header('location: login.php');

		}
	}






  mysqli_close($conn);


  ?>
