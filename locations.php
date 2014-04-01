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
	<title>Worldwide Global Corporation &mdash; Our Offices</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
</head>

<body class="locations_pg">

	<div class="page_container">

		<?php include('includes/page_top.php');	?>

		<?php include('includes/nav_top.php'); ?>
			
		<div class="page_content">
			
			<div class="page_left">
			
				<h2>Our Offices</h2>

				<p>We have offices all around the globe to better serve your needs.</p>

				<iframe width="530" height="350" src="https://maps.google.com/maps/ms?msa=0&amp;msid=204892537131370140725.0004dab1668f1fcf0ce4f&amp;ie=UTF8&amp;t=h&amp;source=embed&amp;ll=9.102097,-110.390625&amp;spn=153.032168,12.65625&amp;z=1&amp;output=embed"></iframe><br /><small>View <a href="https://maps.google.com/maps/ms?msa=0&amp;msid=204892537131370140725.0004dab1668f1fcf0ce4f&amp;ie=UTF8&amp;t=h&amp;source=embed&amp;ll=9.102097,-110.390625&amp;spn=153.032168,12.65625&amp;z=1" style="color:#0000FF;text-align:left" target="_blank">our locations</a> in a larger map</small>

			</div><!-- end page_left -->
				
		<?php include('includes/page_right.php'); ?>

		</div><!-- end page_content -->
		
		<?php include('includes/page_footer.php'); ?>

	</div><!-- end page_container -->

</body>
</html>