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
	<title>Worldwide Global Corporation &mdash; Meet Our Team</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<meta charset="UTF-8">
	<script type="text/javascript" src="js/jquery-latest.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$("li.drawer ul").hide();
			$("h3.drawer-handle").click(function(){
				//alert("done");
				$("li.drawer ul").slideUp(1000, "swing");
				if ($(this).next().css("display")=="none"){
					$(this).next().slideDown();
				}
			});
		});
	</script>
</head>

<body class="team_pg">

	<div class="page_container">

		<?php include('includes/page_top.php');	?>

		<?php include('includes/nav_top.php'); ?>

		<div class="page_content">
			
			<div class="page_left">

				<h2>Meet the Worldwide Global Corporation Team</h2>

				<p>Click the names below the team photo for information about our officers.</p>

				<img class="team_photo" src="images/20120730-cabinet.jpg" alt="Photograph of our team"/>

				<ul class="drawers">
					<li class="drawer">
						<h3 class="drawer-handle">
							Barry O'Bama, Chief Executive Officer
						</h3>
						<ul>
							<li>
								<img src="images/president_official_portrait_hires.jpg" alt="Photograph of Barry O'Bama, Chief Executive Officer" />
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris justo urna, posuere et tempor id, feugiat in justo. Donec accumsan auctor est. Praesent eleifend, odio sit amet ornare sagittis, quam leo tempor ipsum, eu rutrum magna sem sit amet urna. Cras hendrerit, eros in viverra dignissim, est felis varius lectus, sit amet sollicitudin augue libero ac mauris. Aliquam eu lacinia felis. Fusce porta neque id eros molestie vehicula. Fusce quis sem non neque sodales aliquet vitae porttitor nunc. Sed volutpat iaculis orci, vel dignissim eros eleifend quis. Sed in felis massa. Sed a malesuada orci. Morbi orci metus, fringilla vel dapibus vel, fermentum at urna. Vivamus congue venenatis sodales.
								</p>
								<p>
									Aenean congue libero in lacus mollis lacinia. Pellentesque tempor semper lorem, sit amet posuere tellus tristique id. Proin vestibulum iaculis tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum risus enim, pellentesque ac adipiscing sit amet, tempor in lacus. Morbi iaculis congue neque, eget rhoncus justo placerat vel. Sed enim mauris, porta placerat scelerisque ac, tristique eget purus. Praesent at pellentesque mi. Donec congue justo vel lacus sagittis malesuada. Cras fringilla fringilla est, sit amet faucibus velit laoreet ac. Ut tempus gravida eros, sed tristique lorem euismod a.
								</p>
							</li>
						</ul>
						<h3 class="drawer-handle">
							Joey Biten, Chief Operating Officer
						</h3>
						<ul>
							<li>
								<img src="images/vp_portrait.jpg" alt="Photograph of Joey Biten, Chief Operating Officer"/>
								<p>
									In ut libero vel enim molestie convallis. Mauris bibendum aliquam leo a hendrerit. Donec a magna lacus. Sed ac lectus diam. Nulla consequat sem vitae justo congue imperdiet. In hac habitasse platea dictumst. Nullam lacinia justo id sapien blandit placerat rutrum diam cursus. Suspendisse potenti. Sed enim justo, varius in interdum quis, consequat commodo risus. Ut vestibulum, ipsum at congue blandit, eros nibh placerat dolor, euismod dignissim sem mi non mauris.
								</p>
								<p>
									Nunc lorem elit, euismod venenatis semper ac, vestibulum vel eros. Suspendisse facilisis augue eu neque scelerisque ut consectetur arcu mattis. Integer pellentesque vulputate ligula at bibendum. Cras a quam eu tellus viverra aliquet tempus quis mi. Donec id arcu nulla, id luctus eros. Praesent vitae ligula eu diam gravida tristique. Praesent posuere, enim id tristique dignissim, dolor libero gravida arcu, eget auctor eros nulla sit amet turpis. Maecenas eget sem a arcu tincidunt porttitor. Etiam eu posuere nunc. Vivamus elementum, elit et auctor ultrices, neque sem euismod lectus, id elementum odio dolor sed arcu. Curabitur mi mi, aliquet in sagittis ac, mollis ac massa. Aliquam vel tellus posuere enim mollis molestie id et sapien. Pellentesque lacus felis, suscipit ut pellentesque ac, venenatis in diam. Maecenas faucibus felis eget mi blandit convallis. Aenean ac porttitor nunc. Curabitur sagittis hendrerit mollis.
								</p>
							</li>
						</ul>
						<h3 class="drawer-handle">
							Micki Robinson, Chief Financial Officer
						</h3>
						<ul>
							<li>
								<img src="images/first_lady_portrait_2013_lores.jpg" alt="Photograph of Micki Robinson, Chief Financial Officer"/>
								<p>
									Quisque sit amet nulla sed orci semper tincidunt. Donec risus nibh, egestas nec varius blandit, eleifend molestie odio. Curabitur ut gravida enim. Etiam et nisl auctor nulla pretium vulputate. Ut adipiscing congue porttitor. Suspendisse potenti. Nullam consectetur ultrices nulla, id vulputate sapien volutpat ut. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin pretium semper neque ornare egestas.
								</p>
								<p>
									Praesent vitae leo est. Curabitur tristique sem adipiscing tortor eleifend tincidunt. Etiam dignissim fringilla luctus. Proin placerat enim enim. In accumsan ullamcorper bibendum. Sed ac ante arcu, vitae condimentum ligula. Fusce ante est, bibendum ac tristique vel, molestie in nisl. Suspendisse dui diam, dignissim a facilisis quis, varius vel enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Proin vel vestibulum tortor. Donec consectetur cursus porta. Etiam quis velit risus, nec pharetra ipsum.
								</p>
							</li>
						</ul>
						<h3 class="drawer-handle">
							Gil Jacobs, Chief Information Officer
						</h3>
						<ul>
							<li>
								<img src="images/2012-jtb-photo.jpg" alt="Photograph of Gil Jacobs, Chief Information Officer"/>
								<p>
									Duis eros lacus, pretium eget pulvinar sit amet, faucibus venenatis nisl. Suspendisse sagittis, urna in tincidunt sagittis, nibh tellus pretium risus, et vestibulum ipsum sem imperdiet elit. Mauris blandit, urna et cursus venenatis, erat justo consequat metus, eu tristique nunc massa id nisi. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque et diam est, ac malesuada nulla. Cras lobortis pulvinar bibendum. Maecenas placerat venenatis mauris. Mauris egestas aliquam neque, sit amet pretium purus condimentum sit amet.
								</p>
								<p>
									Praesent ullamcorper diam at ipsum pellentesque cursus. Vivamus metus turpis, feugiat eu mattis at, interdum ultricies lorem. Donec quis ante eget purus venenatis luctus. Cras vel nibh at urna eleifend commodo sit amet eget quam. Praesent vitae lacus ac ante iaculis eleifend. Nullam ac porta odio. Phasellus feugiat faucibus euismod. Pellentesque et felis sit amet magna pretium auctor. Duis fermentum orci at ante sodales at adipiscing sem luctus.
								</p>
							</li>
						</ul>
					</li>
				</ul>				
				
			</div><!-- end page_left -->
				
		<?php include('includes/page_right.php'); ?>
		
		</div><!-- end page_content -->
		
		<?php include('includes/page_footer.php'); ?>

	</div><!-- end page_container -->

</body>
</html>