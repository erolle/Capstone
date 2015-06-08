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
                    <a class="btn btn-success" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                          Next
                    </a>
                </div>
                <div class="col-md-5">
                    <h3>Enter your user name in the field</h3>
                </div>
            </div>
        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingTwo">
            <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Password 1
        </a>
      </h4>
        </div>
        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
            <div class="panel-body">
                <div class="col-md-5">
                   <div class="form-group">
                        <label for="login_input_password">Password</label>
                        <input id="login_input_password" class="form-control" type="password" name="user_password" autocomplete="off" required />
                    </div>
                    <input class="btn btn-success btn-lg " type="submit"  name="login" value="Log in" />
                </div>
                <div class="col-md-5">

                    <h3>Enter your user password</h3>
                </div>
            </div>
        </div>
    </div>
    <!--<div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingThree">
            <h4 class="panel-title">
        <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
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
                    <!--<br><input class="btn btn-success pull-right" type="submit"  name="login" value="Log in" />
                </div>
                <div class="col-md-5">
                    <p>Enter part tow of you password</p>
                </div>
            </div>
        </div>
    </div>-->
</div>
</form>

<!--<a href="register.php">Register new account</a>-->
