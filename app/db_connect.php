<?php 
	///////////////////////
	// conect to server //
	/////////////////////
	define("HOST", "localhost"); 
	define("USER", "sec_user");
	define("PASSWORD", "");
	define("DATABASE", "capstone");
	
	$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE); // send to server
?>
