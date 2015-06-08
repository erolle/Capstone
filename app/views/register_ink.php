<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo "<div class='jumbotron alert alert-warning'><div class='container'><h2>" . $error . "</div></div>";
        }
    }
    if ($registration->messages) {
        echo "<script type='text/javascript'>
                window.location = 'thanks_reg_ink.php'
            </script>";
    }
}
?>

<!-- register form --
<form method="post" action="register.php" name="registerform">

    <!-- the user name input field uses a HTML5 pattern check --
    <label for="login_input_username">Username (only letters and numbers, 2 to 64 characters)</label>
    <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />

    <!-- the email input field uses a HTML5 email type check --
    <label for="login_input_email">User's email</label>
    <input id="login_input_email" class="login_input" type="email" name="user_email" required />

    <label for="login_input_password_new">Password (min. 6 characters)</label>
    <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />

    <label for="login_input_password_repeat">Repeat password</label>
    <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />
    <input type="submit"  name="register" value="Register" />

</form>
-->
<form method="post" action="register.php" name="registerform" autocomplete="off">
<!-- fix auto fill password -->
<input type="text" style="display:none"><input type="password" style="display:none">
<!-- start form -->
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingZero">
            <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseZero" aria-expanded="true" aria-controls="collapseZero">
          Enter your username (only letters and numbers, 2 to 64 characters)
        </a>
      </h4>
        </div>
        <div id="collapseZero" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingZero">
            <div class="panel-body">
                <div class="col-md-5">
                   <div class="form-group">
                        <!-- the user name input field uses a HTML5 pattern check -->
                        <label for="login_input_username">Username</label>
                        <input id="login_input_username" class="login_input" type="text" pattern="[a-zA-Z0-9]{2,64}" name="user_name" required />
                    </div>
                    <a class="btn btn-success" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                          Next
                    </a>
                </div>
                <div class="col-md-5">
                <h3>Pick a user name to login with</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          Your email address
        </a>
      </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="col-md-5">
                   <div class="form-group">

                        <!-- the email input field uses a HTML5 email type check -->
                        <label for="login_input_email">email</label>
                        <input id="login_input_email" class="login_input" type="email" name="user_email" required />

                    </div>
                    <a class="btn btn-success" onclick="textStuff(document.getElementById('login_input_username').value, 'rorschachCanvas1' )" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Next
                    </a>
                </div>
                <div class="col-md-5">
                    <h3>Enter your email address</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
        <a class="collapsed" onclick="textStuff(document.getElementById('login_input_username').value, 'rorschachCanvas1' )" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Password 1
        </a>
      </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div class="col-md-5">
                   <div class="form-group">

                        <label for="login_input_password_new">Password </label>
                        <input id="login_input_password_new" class="login_input" type="password" name="user_password_new" pattern=".{6,}" required autocomplete="off" />
                        <br>
                        <label for="login_input_password_repeat">Repeat password</label>
                        <input id="login_input_password_repeat" class="login_input" type="password" name="user_password_repeat" pattern=".{6,}" required autocomplete="off" />

                    </div>
                    <a class="btn btn-success" onclick="textStuff(document.getElementById('login_input_password_new').value, 'rorschachCanvas2')" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Next
                    </a>
                </div>
                <div class="col-md-5">
                   <h3>Create a new password (that you have never used before). Use this ink blot as a visual to help you remember your password. This ink blot looks like a ...</h3>
                    <canvas id="rorschachCanvas1" width="500" height="500">
                    This text is displayed if your browser does not support HTML5 Canvas.
                    </canvas>

                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
        <a class="collapsed" onclick="textStuff(document.getElementById('login_input_password_new').value, 'rorschachCanvas2')" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Password 2
        </a>
      </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                <div class="col-md-5">
                   <div class="form-group">

                        <label for="login_input_password_new2">Password </label>
                        <input id="login_input_password_new2" class="login_input" type="password" name="user_password_new2" pattern=".{6,}" required autocomplete="off" />
                        <br>
                        <label for="login_input_password_repeat2">Repeat password</label>
                        <input id="login_input_password_repeat2" class="login_input" type="password" name="user_password_repeat2" pattern=".{6,}" required autocomplete="off" />


                    </div>




                    <input type="submit" class="btn btn-primary btn-lg" name="register" value="Register" />



                </div>
                <div class="col-md-5">
                   <h3>Create a new password (that you have never used before). Use this ink blot as a visual to help you remember your password. This ink blot looks like a ...</h3>
                    <canvas id="rorschachCanvas2" width="500" height="500">
                    This text is displayed if your browser does not support HTML5 Canvas.
                    </canvas>

                </div>
            </div>
        </div>
    </div>
</div>
</form>
<!-- backlink -->
<!--<a href="index.php">Back to Login Page</a>-->
