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
	<title>Worldwide Global Corporation &mdash; Upcoming Events</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
</head>

<body class="events_pg">

	<div class="page_container">

		<?php include('includes/page_top.php');	?>

		<?php include('includes/nav_top.php'); ?>
			
		<div class="page_content">
			
			<div class="page_left">
			
				<h2>Upcoming Events</h2>

				<p>Hover over each event for details.</p>

				<table>
					<thead>
						<tr>
							<th colspan="2">
								<a href="prior_month.php">&laquo; April 2013</a>
							</th>
							<th colspan="3">
								<span class="curr_month">May 2013</span>
							</th>
							<th colspan="2">
								<a href="next_month.php">June 2013 &raquo;</a>
							</th>
						</tr>
						<tr>
							<th>
								Sun
							</th>
							<th>
								Mon
							</th>
							<th>
								Tue
							</th>
							<th>
								Wed
							</th>
							<th>
								Thu
							</th>
							<th>
								Fri
							</th>
							<th>
								Sat
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>
							</td>
							<td>
							</td>
							<td>
							</td>
							<td>
								1
								<p><a href="#" class="tooltip">May Day Party<span>Join us to celebrate some old-fashioned global socialism.</span></a></p>
							</td>
							<td>
								2
							</td>
							<td>
								3
							</td>
							<td>
								4
							</td>
						</tr>
						<tr>
							<td>
								5
								<p><a href="#" class="tooltip">Cinco de Mayo Fiesta<span>Put on your sombrero and join us for some delicious Mexican food and drink. Entertainment to be provided by New York's premiere mariachi band.</span></a></p>
							</td>
							<td>
								6
							</td>
							<td>
								7
							</td>
							<td>
								8
							</td>
							<td>
								9
							</td>
							<td>
								10
							</td>
							<td>
								11
							</td>
						</tr>
						<tr>
							<td>
								12
							</td>
							<td>
								13
							</td>
							<td>
								14
							</td>
							<td>
								15
								<p><a href="#" class="tooltip">Monthly Board Meeting<span>SEC-mandated snoozefest.</span></a></p>
							</td>
							<td>
								16
							</td>
							<td>
								17
							</td>
							<td>
								18
							</td>
						</tr>
						<tr>
							<td>
								19
							</td>
							<td>
								20
							</td>
							<td>
								21
							</td>
							<td>
								22
							</td>
							<td>
								23
							</td>
							<td>
								24
								<p><a href="#" class="tooltip">Financial Figures Released<span>We're in the money; we're in the money... (hopefully!)</span></a></p>
							</td>
							<td>
								25
							</td>
						</tr>
						<tr>
							<td>
								26
							</td>
							<td>
								27
								<p><a href="#" class="tooltip">Memorial Day Picnic<span>Let us findly recall our many wars with a picnic in the park.</span></a></p>
							</td>
							<td>
								28
							</td>
							<td>
								29
							</td>
							<td>
								30
							</td>
							<td>
								31
							</td>
							<td>
							</td>
						</tr>
					</tbody>
				</table>

			</div><!-- end page_left -->
				
		<?php include('includes/page_right.php'); ?>

		</div><!-- end page_content -->
		
		<?php include('includes/page_footer.php'); ?>

	</div><!-- end page_container -->

</body>
</html>