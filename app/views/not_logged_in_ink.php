<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo $error;
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo $message;
        }
    }
}
?>

<!-- login form box -->
<form method="post" action="login.php" name="loginform">
<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingOne">
            <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          User Name
        </a>
      </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
            <div class="panel-body">
                <div class="col-md-5">
                   <div class="form-group">
                        <label for="login_input_username">Username</label>
                        <input id="login_input_username" class="form-control" type="text" name="user_name" placeholder="Username" required />
                    </div>
                    <a class="collapsed btn btn-success" onclick="textStuff(document.getElementById('login_input_username').value, 'rorschachCanvas1' )" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Next
                        </a>
                </div>
                <div class="col-md-5">
                    <h3>Enter your user name</h3>
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
                        <label for="login_input_password">Password</label>
                        <input id="login_input_password" class="form-control" type="password" name="user_password" placeholder="Password part one" autocomplete="off" required />
                    </div>
                    <a class="collapsed btn btn-success" onclick="textStuff(document.getElementById('login_input_password').value, 'rorschachCanvas2')" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                          Next
                        </a>
                </div>
                <div class="col-md-5">
                   <h3>Enter your user password that this ink blot reminded you of </h3>
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
        <a class="collapsed" onclick="textStuff(document.getElementById('login_input_password').value, 'rorschachCanvas2')" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Password 2
        </a>
      </h4>
        </div>
        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
            <div class="panel-body">
                <div class="col-md-5">
                   <div class="form-group">
                        <label for="login_input_password2">Password2</label>
                        <input id="login_input_password" class="form-control" type="password" placeholder="Password part two" name="user_password2" autocomplete="off" />
                    </div>
                    <!-- time stamp -->
                    <label for="login_input_start_time"><?php $start_time = new DateTime(); ?></label>
                    <input id="login_input_start_time" class="login_input" value="<?php echo $start_time->format('U'); ?>" name="start_time" type="hidden"  required />
                    <br><input class="btn btn-success pull-right" type="submit"  name="login" value="Log in" />
                </div>
                <div class="col-md-5">
                   <h3>Enter part two of your password that this ink blot reminded you of</h3>
                    <canvas id="rorschachCanvas2" width="500" height="500">
                    This text is displayed if your browser does not support HTML5 Canvas.
                    </canvas>

                </div>
            </div>
        </div>
    </div>
</div>
</form>
<!--
    <form method="post" action="login.php" name="loginform">

    <label for="login_input_username">Username</label>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required />

    <label for="login_input_password">Password</label>
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

    <label for="login_input_password2">Password2</label>
    <input id="login_input_password" class="login_input" type="password" name="user_password2" autocomplete="off" />


    <label for="login_input_start_time"><?php $start_time = new DateTime(); ?></label>

    <input id="login_input_start_time" class="login_input" value="<?php echo $start_time->format('U'); ?>" name="start_time" type="hidden"  required />

    <input type="submit"  name="login" value="Log in" />

</form>
-->

<!--<a href="register.php">Register new account</a>-->
