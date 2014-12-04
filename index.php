<?php
include 'core/init.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Movie Review Website</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="Homepage/styles.css" rel="stylesheet">
	<script src="js/bootstrap-tooltip.js"></script>
	<script src="js/bootstrap-popover.js"></script>


	<script src="js/bootstrap.js"></script>
		<script src="Homepage/index.js" type="text/javascript"></script>
</head>

<body>

	<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

	<!-- Start of the navigation bar -->
	<?php
	include 'includes/widgets/navigation.php';
	?>
	<!--End of navigation bar -->


	<!-- Start of the sidebar -->
	<?php
	include 'includes/widgets/sidebar.php';
	?>
	<!-- End of the sidebar -->



	<!-- Start of the Carousel -->
	<?php
	include 'includes/widgets/Carousel.php';
	?>
	<!-- End of the Carousel -->


	 <!-- Start of new reviews -->
	<div id="newReviews">
	<?php
	include 'includes/widgets/newReviews.php';
	?>
	</div>
	<!-- End of new reviews -->




	<!-- Start of popular movie list -->
	<script>
	$(function ()
	{ $("#example").popover();
	});
	</script>


	<?php
	include 'includes/widgets/popularMovies.php';
	?>

	<!-- End of popular movie list -->



	<!-- start of register page -->
	<?php
	include 'includes/widgets/register.php';
	?>
	<!-- end of register page -->


	<!-- start of login page -->
	<?php
		include 'includes/widgets/login.php';
	?>
	<!-- end of login page -->

	<?php
		include 'includes/widgets/logout.php';
	?>


	<!-- start of contact page -->
	<?php
		include 'includes/widgets/contact.php';
	?>
	<!-- end of contact page -->


	

	





<script src="https://apis.google.com/js/platform.js" async defer></script>

</body>
</html>	