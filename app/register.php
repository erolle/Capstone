<?php
include'db_connect.php';include 'function.php';
$salt  = "e99i6Ud2Vpicgr9xmwqXOS1WdCbx5ouveUsa804X44J3cAyYixyNGEhacHSCzd17GgLd4LfCcZBle7MefVA3mq97JpQsaqh3noJYVnx8pmZ2tX3rnp3ZeoJ281WwQGMrtJqQrQuuscAi5ABbeCqEksS1i56oEXLHf2lt8lnshTdKbqawBoFNhAFJ34mtAD81p6ZI2jO6olKtMaQvTtV1OLr3zWmpz3knpZ6Hm5trvFlPL5bP4XjcKPZYOFzUaTLio4U7M2HWRFPCBE9jb9OkRwd8T1QlLn5eAc18uUSiFJhlQqZjzq0Pg42sm4c3O7KAV84RsDDPAYVsQh7pZFxIO4fxXKv4exVlBPWneeeA7aotgSByAW7r0aTXGc1InOwSq6asotRw9A7ihjS1822PzMzP29T8wnC4E5rkYdAcabIjLGMg7HyVDlkFwbpXtmNXR8yb5PVDInMLytyNARBFx654v9xCdxpDFklQT3EJhO8FfEqVYVgHLDbV91zfByyO"; // you can generate this once like above
$token = md5( $salt . time()); // this will be your "unique" number

if(isset($_POST['submit'])){
	if($_POST["userId"]==$_POST["repassword"]){
		mysql_query(INSERT INTO `users`(`id`, `user_type`, `email`, `user_name`, `password`, `display_name`, `profile_image`, `created`, `media_collection_id`, `bio`, `can_login`, `active`, `salt`)
values
  ('$_POST[userId]','$_POST[user_type]','$_POST[email]','$_POST[user_name]','$_POST[password]','$_POST[display_name]','$_POST[profile_image]','$_POST[created]','$_POST[bio]','$_POST[email]','$_POST[can_login]','$_POST[active]', $token)")
			or die(mysql_error());
	}
}
?>

 VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10],[value-11],[value-12],[value-13])