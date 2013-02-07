<?php 
	include 'app/function.php';
	sec_session_start(); // Our custom secure way of starting a php session.
?>
<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width" />
    <!-- css stuff-->
    <link rel="stylesheet" type="text/css" href="app/css/app.css" />
    <link rel="stylesheet" type="text/css" href="app/css/foundation.min.css">
</head>
<body>
	<header>
		<div class="row">
			<div class="twelve columns">
				<nav class="top-bar">
					<ul class="top-bar">
						<li class="name"><h1><a href="#">CausBuzz</a></h1></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Technology</a></li>
						<li><a href="#">Help</a></li>
					</ul>
					<ul class="right">
		              <li class="has-dropdown">
		                <a href="#">User info</a>
		
		                <ul class="dropdown">
		                  <li><a href="#">Privacy Settings</a></li>
		                  <li><a href="#">Account Settings</a></li>
		                  <li><a href="/capstone/app/logout.php">Log Out</a></li>
		                </ul>
		            </ul>
				</nav>
			</div>
		</div>
	</header>
	<h1>
	<?php 
			//include 'function.php';
			//sec_session_start(); // Our custom secure way of starting a php session.
			if(isset($_GET) || !empty($_GET)){echo $_GET["status"];}else{echo "nothing";}
		?>
	</h1>
	<footer></footer>
	<!-- End Footer -->
	
	
	<!-- Included JS Files (Uncompressed) -->
	<!--
	
	<script src="javascripts/jquery.js"></script>
	
	<script src="javascripts/jquery.foundation.mediaQueryToggle.js"></script>
	
	<script src="javascripts/jquery.foundation.forms.js"></script>
	
	<script src="javascripts/jquery.foundation.reveal.js"></script>
	
	<script src="javascripts/jquery.foundation.orbit.js"></script>
	
	<script src="javascripts/jquery.foundation.navigation.js"></script>
	
	<script src="javascripts/jquery.foundation.buttons.js"></script>
	
	<script src="javascripts/jquery.foundation.tabs.js"></script>
	
	<script src="javascripts/jquery.foundation.tooltips.js"></script>
	
	<script src="javascripts/jquery.foundation.accordion.js"></script>
	
	<script src="javascripts/jquery.placeholder.js"></script>
	
	<script src="javascripts/jquery.foundation.alerts.js"></script>
	
	<script src="javascripts/jquery.foundation.topbar.js"></script>
	
	<script src="javascripts/jquery.foundation.joyride.js"></script>
	
	<script src="javascripts/jquery.foundation.clearing.js"></script>
	
	<script src="javascripts/jquery.foundation.magellan.js"></script>
	
	-->
	<script type="text/javascript" src="app/js/jquery.js"></script>
	<script type="text/javascript" src="app/js/foundation.min.js"></script>
	<script type="text/javascript" src="app/js/script.js"> </script>
    <script type="text/javascript" src="app/js/sha512.js"> </script>
	
	<!-- Initialize JS Plugins -->
	<script type="text/javascript" src="app/js/app.js"></script>
</body>
</html>