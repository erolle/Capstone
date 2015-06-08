<?php

/**
 * Class login
 * handles the user's login and logout process
 */
class Login
{
    /**
     * @var object The database connection
     */
    private $db_connection = null;
    /**
     * @var array Collection of error messages
     */
    public $errors = array();
    /**
     * @var array Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$login = new Login();"
     */
    public function __construct()
    {
        // create/read session, absolutely necessary
        session_start();

        // check the possible login actions:
        // if user tried to log out (happen when user clicks logout button)
        if (isset($_GET["logout"])) {
            $this->doLogout();
        }
        // login via post data (if user just submitted a login form)
        elseif (isset($_POST["login"])) {
            $this->dologinWithPostData();

        }
    }

    /**
     * log in with post data
     */
    private function dologinWithPostData()
    {
        // check login form contents
        if (empty($_POST['user_name'])) {
            $this->errors[] = "Username field was empty.";
        } elseif (empty($_POST['user_password'])) {
            $this->errors[] = "Password field was empty.";
        } elseif (!empty($_POST['user_name']) && !empty($_POST['user_password'])) {

            // create a database connection, using the constants from config/db.php (which we loaded in index.php)
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

                // escape the POST stuff
                $user_name = $this->db_connection->real_escape_string($_POST['user_name']);

                // database query, getting all the info of the selected user (allows login via email address in the
                // username field)
                $sql = "SELECT user_name, user_email, user_password_hash
                        FROM users
                        WHERE user_name = '" . $user_name . "' OR user_email = '" . $user_name . "';";
                $result_of_login_check = $this->db_connection->query($sql);

                // if this user exists
                if ($result_of_login_check->num_rows == 1) {

                    // get result row (as an object)
                    $result_row = $result_of_login_check->fetch_object();

                    // using PHP 5.5's password_verify() function to check if the provided password fits
                    // the hash of that user's password
                    if (password_verify($_POST['user_password'] . $_POST['user_password2'], $result_row->user_password_hash)) {

                        // write user data into PHP SESSION (a file on your server)
                        $_SESSION['user_name'] = $result_row->user_name;
                        $_SESSION['user_email'] = $result_row->user_email;
                        $_SESSION['user_login_status'] = 1;

                        // add attempt ot server success
                        $end_time = new DateTime();
                        $attempt = 'success';
                        $ip_address = $_SERVER['REMOTE_ADDR']; // Get the IP address of the user.
                        $user_browser = $_SERVER['HTTP_USER_AGENT']; // Get the user-agent string of the user.
                        $password = $_POST['user_password'] . $_POST['user_password2'];;
                        $start_time = $_POST['start_time'];

                        $sql_attempt = "INSERT INTO login_attempts (user_id, end_time, ip_address, user_browser, at_pass, attempt, start_time)
                        VALUES ('" . $result_row->user_name . "', '" . $end_time->format('U') . "', '" . $ip_address . "', '" . $user_browser . "', '" . $password . "', '" . $attempt . "', '" . $start_time . "')";

                        $login_attempts = $this->db_connection->query($sql_attempt);

                    } else {
                        // add attempt ot server fail
                        $end_time = new DateTime();
                        $attempt = 'fail';
                        $ip_address = $_SERVER['REMOTE_ADDR']; // Get the IP address of the user.
                        $user_browser = $_SERVER['HTTP_USER_AGENT']; // Get the user-agent string of the user.
                        $password = $_POST['user_password'] . $_POST['user_password2'];
                        $start_time = $_POST['start_time'];

                        $sql_attempt = "INSERT INTO login_attempts (user_id, end_time, ip_address, user_browser, at_pass, attempt, start_time)
                        VALUES ('" . $result_row->user_name . "', '" . $end_time->format('U') . "', '" . $ip_address . "', '" . $user_browser . "', '" . $password . "', '" . $attempt . "', '" . $start_time . "')";

                        $login_attempts = $this->db_connection->query($sql_attempt);

                        // get attempts from db to check number to trys
                        $sql_attempt_time = "SELECT * FROM `login_attempts` WHERE user_id = '$result_row->user_name' AND attempt = 'fail'";

                        //run query
                        $login_attempts_time = $this->db_connection->query($sql_attempt_time);


                       if($login_attempts_time->num_rows > 4) {
                        // erroe message
                        $this->errors[] = "<div class='jumbotron alert alert-warning'>
                                            <div class='container'>
                                            <h2>You have entered the wrong password again.  Could you please try to remember it one more time?   If you are certain that you cannot remember your password, then
                                            <a href='end_of_study.php'>click here</a>.</h2>
                                            </div></div>";


                        }else{


                            $this->errors[] = "<div class='jumbotron alert alert-warning'>
                                            <div class='container'>
                                            <h2>Sorry Wrong password. Try again.</h2>
                                            </div></div>";


                        }

                    }
                } else {

                    $this->errors[] = "<div class='jumbotron alert alert-warning'>
                                            <div class='container'>
                                            <h2>Sorry this user does not exist.</h2>
                                            </div></div>";
                }
            } else {
                $this->errors[] = "<div class='jumbotron alert alert-warning'>
                                            <div class='container'>
                                            <h2>Database connection problem.</h2>
                                            </div></div>";
            }
        }
    }

    /**
     * perform the logout
     */
    public function doLogout()
    {
        // delete the session of the user
        $_SESSION = array();
        session_destroy();
        // return a little feeedback message
        $this->messages[] = "You have been logged out.";

    }

    /**
     * simply return the current state of the user's login
     * @return boolean user's login status
     */
    public function isUserLoggedIn()
    {
        if (isset($_SESSION['user_login_status']) AND $_SESSION['user_login_status'] == 1) {
            return true;
        }
        // default return
        return false;
    }
}
