<?php
//start PHP session
session_start();
//get value for cookie 'loggedin'
$sessionValue = $_SESSION['loggedin'];
//get user name from cookie
$userName = $_SESSION['user'];
?>
<?php
//get error and set error message
$err=$_GET['err'];
if($err=="1"){
	$err_msg="All fields are Required.";
}
if($err=="2"){
	$err_msg="User Name Already in Use! Try Again.";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Worldwide Global Corporation &mdash; Register</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
</head>

<body class="register_pg">

	<div class="page_container">

		<?php include('includes/page_top.php'); ?>

		<?php include('includes/nav_top.php'); ?>
			
		<div class="page_content">
			
			<div class="page_left">

					<h2>Register</h2>

					<p>Sign up to become a User.</p>

				<div class="form_container">
				
					<div class="err_msg"><?=$err_msg;?></div>

					<form class="form_user" action="process_register.php" method="post">
						<label>User Name:</label> <input type="text" name="username" /><br />
						<label>Password:</label> <input type="password" name="password" /><br />
						<input type="submit" value="Submit" />
						<br class="clear" />
					</form>

					<div class="form_footer">
						<p>Already a User? Click here to <a href="index.php">log in</a>.</p>
					</div>

				</div>
				<!-- end form_container -->

			</div><!-- end page_left -->
					
			<?php include('includes/page_right.php'); ?>

		</div><!-- end page_content -->
		
		<?php include('includes/page_footer.php'); ?>

	</div><!-- end page_container -->

</body>
</html>