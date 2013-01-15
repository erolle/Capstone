<?php 
	///////////////////////
	// conect to server //
	/////////////////////
	define("HOST", "localhost"); 
	define("USER", "sec_user");
	define("PASSWORD", "61xVUynCNWIfhrwuahypG2DYG7ttD7H5eXNmHnxUwymVzQ7GHIYiOLaMF0vf1W3WMT2BQIgLUWuqE4bvv6Kl5Q");
	define("DATABASE", "capstone");
	
	$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE); // send to server
?>
