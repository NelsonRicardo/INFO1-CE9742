<?php
//start PHP session
session_start();
//get value for cookie 'loggedin'
$sessionValue = $_SESSION['loggedin'];
//get user name from cookie
$userName = $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Worldwide Global Corporation &mdash; Contact Us</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
	<script src="js/jquery-latest.min.js"></script>
	<script src="js/validate.js"></script>
</head>

<body class="contact_pg">

	<div class="page_container">

		<?php include('includes/page_top.php');	?>

		<?php include('includes/nav_top.php'); ?>
			
		<div class="page_content">
			
			<div class="page_left">

				<h2>Contact Us</h2>

				<p>Worldwide Global Corporation welcomes your comments and feedback.</p>

				<div class="form_container">

					<form class="form_user" action="process_contact.php" method="post">
						<label>Name:</label> <input type="text" id="name" name="name" value="" /><br class="clear" />
						<label>Email:</label> <input type="text" id="email" name="email" value="" /><br class="clear" />
						<label>Comments:</label>
						<textarea id="comments" name="comments" value=""></textarea><br />
						<input type="submit" name="submit" value="Submit" onclick="return validate();"/>
						<br class="clear" />
					</form>

				</div>
				<!-- end form_container -->
				
			</div><!-- end page_left -->
				
		<?php include('includes/page_right.php'); ?>
			
		</div><!-- end page_content -->
		
		<?php include('includes/page_footer.php'); ?>

	</div><!-- end page_container -->

<script>
$("input, select").focus(function () {
  $(this).removeClass("required");
});

$("textarea, select").focus(function () {
  $(this).removeClass("required");
});
</script>

</body>
</html>