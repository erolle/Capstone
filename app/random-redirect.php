<?php
$urls = array("pre-screening_ink.php","pre-screening.php","pre-screening_ink.php"); //specify array of possible URLs
shuffle($urls); //get random item from array
header ('HTTP/1.1 301 Moved Permanently'); //send header
header ('Location: '.  $urls[0]);
exit();
?>


