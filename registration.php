<!DOCTYPE html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width"><!-- css stuff-->
    <link rel="stylesheet" type="text/css" href="app/css/app.css">
    <link rel="stylesheet" type="text/css" href="app/css/foundation.min.css">

    <title></title>
</head>

<body>
    <header>
        <div class="row">
            <div class="twelve columns">
                <nav class="top-bar">
                    <ul class="top-bar">
                        <li class="name">
                            <h1><a href="#">CausBuzz</a></h1>
                        </li>

                        <li><a href="#">About</a></li>

                        <li><a href="#">Technology</a></li>

                        <li><a href="#">Help</a></li>
                    </ul>

                    <ul class="right six columns">
                        <li class="has-dropdown">
                            <a href="#">User info</a>

                            <div  class="dropdown login">
                                <div class="login-dropdown">
                                    <ul>
                                        <li id='divUsername' class='show'><label>Enter Email</label> <input id='username' type='text' onkeydown="if (event.keyCode == 13) document.getElementById('submmitUserName').click()"> <button id='submmitUserName' onclick="Username(document.getElementById('username'))">Next 1</button></li>

                                        <li id='divPass1' class='hide'>
                                            <canvas id='canPass1' class='hide'>get a new browser pleae yours sucks!</canvas><br>
                                            <label>Enter password 1. Type what the inkblot looks like</label> <input id='pass1' type="password" onkeydown="if (event.keyCode == 13) document.getElementById('submitPass1').click()"> <button id='submitPass1' onclick="Pass1(document.getElementById('pass1'), '1')">Next 2</button>
                                        </li>

                                        <li id='divPass2' class='hide'>
                                            <canvas id='canPass2' class='hide'>get a new browser pleae yours sucks!</canvas><br>
                                            <label>Enter password 2. Type what the inkblot looks like</label> <input id='pass2' type="password" onkeydown="if (event.keyCode == 13) document.getElementById('submitPass2').click()"> <button id='submitPass2' onclick="Pass2(document.getElementById('pass2'))">Next 3</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <div id="contaner" class="row">
        <div class="twelve columns ">
            <!--<form action="" id="UserRegisterForm" method="post" accept-charset="utf-8">-->
                <div style="display:none;">
                    <input type="hidden" name="_method" value="POST">
                </div>
                <!-- name filds -->
                <div id="name-reg" class="twelve columns ">
	                <div class="left-reg six columns">
		                <div class="input text required">
		                    <label for="UserUserName">Your Name</label><input name="user_name" maxlength="45" type="text" id="UserUserName" onkeydown="if (event.keyCode == 13) document.getElementById('UserEmail').focus(); ">
		                </div>
		                <div class="input text required">
		                    <label for="UserEmail">Email</label><input name="email" maxlength="100" type="text" id="UserEmail" onkeydown="return verifyKey(event,document.getElementById('UserEmail').value, 'UserEmail'); ">
		                </div>
	                </div>
	                <div class="righ-reg six columns">
	                	<h3> this is how it works </h3>
	                	<video><img src="http://placehold.it/300x300"/></video>
	                </div>
                </div>
                
                <!-- password 1 -->
                <div id="password1" class="twelve columns ">
                	<div class="left-reg six columns">
		                <div class="input password required">
		                    <label for="UserPassword">Password 1</label><input name="UserPassword" type="password" id="UserPassword1" onkeydown="return verifyKey(event,document.getElementById('UserPassword1').value, 'UserPassword1');">
		                </div>
		                <div class="input password required">
		                    <label for="UserPasswordConfirm">Password Confirm 1</label><input name="UserPassword_confirm" type="password" id="UserPasswordConfirm1" onkeydown="return verifyKey(event,document.getElementById('UserPasswordConfirm1').value, 'UserPasswordConfirm1');">
		                </div>
	                </div>
	                <div class="righ-reg six columns">
		                <div class="canvas ">
		                     <canvas class="centered" id="canUserEmail" width="300" height="300">get a new browser pleae yours sucks!</canvas>
		                </div>
	                </div>
                </div>
                <!-- password 2 -->


                <div id="password2" class="twelve columns ">
	                <div class="left-reg six columns">
		                <div class="input password required">
		                    <label for="UserPassword">Password 2</label><input name="UserPassword" type="password" id="UserPassword2">
		                </div>
		                <div class="input password required">
		                    <label for="UserPasswordConfirm">Password Confirm 2</label><input name="UserPassword_confirm" type="password" id="UserPasswordConfirm2">
		                </div>
	
		                <div class="submit">
		                    <input class="button radius" type="submit" value="Submit">
		                </div>
	                </div>
                <div class="righ-reg six columns">
	                <div class="canvas ">
		                <canvas class="centered" id="canUserPassword1" width="300" height="300">get a new browser pleae yours sucks!</canvas>
	                </div>
                </div>
            <!--</form>-->
        </div>
    </div>

    <footer></footer><!-- End Footer -->
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
    <script type="text/javascript" src="app/js/jquery.js">
</script><script type="text/javascript" src="app/js/foundation.min.js">
</script><script type="text/javascript" src="app/js/script.js">
</script><script type="text/javascript" src="app/js/sha512.js">
</script><!-- Initialize JS Plugins -->
    <script type="text/javascript" src="app/js/app.js">
</script>
</body>
</html>
