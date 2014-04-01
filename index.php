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
	<title>Worldwide Global Corporation &mdash; Home</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
</head>

<body class="index_pg">

	<div class="page_container">

		<?php include('includes/page_top.php');	?>

		<?php include('includes/nav_top.php'); ?>
			
		<div class="page_content">
			
			<div class="page_left">
			
				<h2>Welcome</h2>

				<img src="images/watercolorcvc.jpg" alt="Capitol" style="float: left; padding: 10px;"/>

				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam bibendum fermentum est et iaculis. Fusce et massa eros, vel cursus risus. Quisque rhoncus massa sit amet arcu tempus a mattis lacus eleifend. Suspendisse consequat nulla non libero ultricies vitae euismod sapien molestie. Ut mattis, tortor nec pulvinar tristique, odio purus egestas nisi, eget lobortis ante mi at tellus.</p>

				<p>Etiam gravida urna vitae est volutpat eleifend:</p>

				<ul>
					<li>Fusce nec enim eget mauris vehicula placerat eu adipiscing ipsum.</li>
					<li>Donec quis nisl ut nibh varius congue ac quis ligula.</li>
					<li>Nulla ullamcorper purus ac leo luctus pulvinar rhoncus eget nisl.</li>
				</ul>

				<p>Nulla blandit nibh sed augue tempor vel pellentesque ante bibendum. Suspendisse vel lacus velit. Praesent vitae rutrum tortor. Nullam egestas fringilla arcu, eget lacinia magna sollicitudin eget. Suspendisse ut sem lacus, eu viverra libero. Aliquam fermentum, nunc commodo pulvinar porttitor, risus metus luctus massa, vitae tempor augue justo sed metus. Sed orci nunc, dapibus vel molestie vel, aliquet vel nunc.</p>
				
				<p>Cras tincidunt cursus risus ac ornare. Fusce pellentesque, lacus quis volutpat dapibus, velit turpis elementum quam, eu eleifend justo diam et est. Sed sit amet lectus quis odio accumsan convallis ut viverra quam. Ut bibendum dictum ligula, a pharetra ipsum iaculis feugiat.</p>
				
			</div><!-- end page_left -->
				
		<?php include('includes/page_right.php'); ?>

		</div><!-- end page_content -->
		
		<?php include('includes/page_footer.php'); ?>

	</div><!-- end page_container -->

</body>
</html>