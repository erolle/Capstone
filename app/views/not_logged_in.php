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

    <label for="login_input_username">Username</label>
    <input id="login_input_username" class="login_input" type="text" name="user_name" required />

    <label for="login_input_password">Password</label>
    <input id="login_input_password" class="login_input" type="password" name="user_password" autocomplete="off" required />

    <label for="login_input_password2">Password2</label>
    <input id="login_input_password" class="login_input" type="password" name="user_password2" autocomplete="off" />


    <label for="login_input_start_time"><?php $start_time = new DateTime(); ?></label>

    <input id="login_input_start_time" class="login_input" value="<?php echo $start_time->format('U = Y-m-d H:i:s'); ?>" name="start_time" type="hidden"  required />

    <input type="submit"  name="login" value="Log in" />

</form>

<!--<a href="register.php">Register new account</a>-->
