<!-- if you need user information, just put them into the $_SESSION variable and output them here -->
<div class='jumbotron alert alert-success'>
  <div class='container'>
    <h1>Thank you, <?php echo $_SESSION['user_name']; ?>!</h1>
    <p>Plese click "Done" to finish and I am looking forwarding to seeing you again in a week</p>
    <a href="done_loged_out.php?logout" class="btn btn-default btn-lg">Done</a>
  </div>
</div>


<!-- because people were asking: "index.php?logout" is just my simplified form of "index.php?logout=true" -->
<!--<a href="index.php?logout">Logout</a>-->
