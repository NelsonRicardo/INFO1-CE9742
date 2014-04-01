<?php
//get error flag 
$err=$_GET['err'];
//set message for error flag 1
if($err=="1"){
	$err_msg="All fields are required.";
}
//set message for error flag 2
if($err=="2"){
	$err_msg="No match found. Try again.";
}
//set message for error flag 3
if($err=="3"){
	$err_msg="You must log in to be recognized.";
}
?>
<div class="page_top">
	<div class="img_wrapper">
		<a href="index.php">
			<img src="images/spaceship-earth-cartoon.jpg" width=150 alt="logo">
		</a>
	</div>
	<div class="h1_wrapper">
		<a href="index.php">
			<h1>Worldwide <br />Global <br />Corporation</h1>
		</a>
	</div>
	<div class="login">
<?php if($sessionValue==true) { ?>
	<p>You are logged in, <?=$userName;?>.<br />
	<a href="logout.php">Log out</a></p>
<?php } else { ?>
	<div class="unlogged">
		<h3>Log In:</h3><p>Need to <a href="register.php">register</a>?</p>
		<div class="err_msg"><?=$err_msg;?></div>
		<form action="process_login.php" method="post">
			<label>User Name:</label> <input type="text" name="username" /><br />
			<label>Password:</label> <input type="password" name="password" /><br />
			<input type="submit" name="submit_login" value="Log In" />
		</form>
	</div>
<?php } ?>
	</div><!-- end login -->
</div><!-- end page_top -->