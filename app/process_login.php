<?php 
	include'db_connect.php';include 'function.php';
	sec_session_start(); // Our custom secure way of starting a php session.
	if(isset($_POST['email'], $_POST['password'])) { 
	   $email = $_POST['email'];
	   $password = $_POST['password']; // The hashed password.	
	   
	  //echo("the pass: $password  the message: " );
	   if(login($email, $password, $mysqli) == true) {
	      // Login success
	      //echo 'Success: You have been logged in!';
	      //header("location: /capstone/")
	      echo '/capstone/homePage.php?status=1';
	   } else {
	      // Login failed
	      //echo 'Login failed:error!';
	     // header('Location: ./login.php?error=1');
	     echo '/capstone/index.php?status=0';
	   }
	} else { 
	   // The correct POST variables were not sent to this page.
	   echo 'Invalid Request';
	}
?>
