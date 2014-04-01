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
	<title>Worldwide Global Corporation &mdash; Gallery</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">

	<!-- include jQuery library; latest version does not work; using same version as Cycle plugin site -->
	<script type="text/javascript" src="js/jquery-1.5.2.min.js"></script>
	<!-- include Cycle plugin -->
	<script type="text/javascript" src="js/jquery.cycle.all.latest.js"></script>
	<script type="text/javascript">
	$(document).ready(function() {
		$('.slideshow')
		.before('<div id="nav">')
		.cycle({
			fx: 'scrollLeft', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
			speed: 750,
    		pager: '.nav',
			pause: 1,
    		pagerAnchorBuilder: function(idx, slide) { 
        return '<li><a href="#"><img src="' + slide.src + '" width="50" height="50" /></a></li>'; 
    }
		});
	});
	</script>
</head>

<body class="gallery_pg">

	<div class="page_container">

		<?php include('includes/page_top.php');	?>

		<?php include('includes/nav_top.php'); ?>
			
		<div class="page_content">
			
			<div class="page_left">
			
				<h2>Gallery</h2>

					<p>Here are some great pics to show what a fun bunch we are.</p>

					<div class="nav"></div>
					<div class="slideshow">
						<img src="images/img_0007.jpg" width="500" height="375" alt="photo" />
						<img src="images/img_0045.jpg" width="500" height="375" alt="photo" />
						<img src="images/img_0046.jpg" width="500" height="375" alt="photo" />
						<img src="images/img_0585.jpg" width="500" height="375" alt="photo" />
						<img src="images/img_0932.jpg" width="500" height="375" alt="photo" />
						<img src="images/img_1103.jpg" width="500" height="375" alt="photo" />
						<img src="images/img_1274.jpg" width="500" height="375" alt="photo" />
						<img src="images/img_1704.jpg" width="500" height="375" alt="photo" />
					</div>
					
				
			</div><!-- end page_left -->
				
		<?php include('includes/page_right.php'); ?>
			
		</div><!-- end page_content -->
		
		<?php include('includes/page_footer.php'); ?>

	</div><!-- end page_container -->

</body>
</html>