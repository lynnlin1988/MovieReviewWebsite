<?php
include 'core/init.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Movie Review Website</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="Homepage/styles.css" rel="stylesheet">
	<script src="js/bootstrap-tooltip.js"></script>
	<script src="js/bootstrap-popover.js"></script>

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="Homepage/popover.js"></script>
</head>

<body>

	<!-- Start of the navigation bar -->
	<?php
	include 'includes/widgets/navigation.php';
	?>
	<!--End of navigation bar -->


	<!-- Start of the sidebar -->
	<div id="sidebar-wrapper"> 
		<ul class="sidebar-nav">
			<li class="sidebar-brand"><a href="#">Browse</a></li>
			<?php
				$con = mysqli_connect("localhost:3306","root","");
				if(!$con)
				{
					die('Could not connect: ' . mysqli_error());
				}

				mysqli_select_db($con,"moviereviewwebsite");
				$moviequery = mysqli_query($con,"SELECT * FROM a6_category order by Category");
				while($row = $moviequery->fetch_assoc()){
					echo "<li><a href\"#\">".$row["Category"]."</a></li>";
				}
				$con->close();
			?>
		</ul>
	</div>
	<!-- End of the sidebar -->



	<!-- Start of the Carousel -->
	<div id="Carousel" class="carousel slide">
		<ol class="carousel-indicators">
			<li data-target="#Carousel" data-slide-to="0" calss="active"></li>
			<li data-target="#Carousel" data-slide-to="1"></li>
			<li data-target="#Carousel" data-slide-to="2"></li>

		</ol>

		<div class="carousel-inner">
			<div class="item active">
				<img src="Homepage/img/Avengers.jpg" alt="" class="img-responsive">
			</div>

			<div class="item">
				<img src="Homepage/img/CaptainAmerica.jpg" alt="" class="img-responsive">
			</div>

			<div class="item">
				<img src="Homepage/img/Thor.jpg" alt="" class="img-responsive">
			</div>

		</div>

		<a class="carousel-control left" href="#Carousel" data-slide="prev">
			<span class="icon-prev"></span>
		</a>
		<a class="carousel-control right" href="#Carousel" data-slide="next">
			<span class="icon-next"></span>
		</a>
	</div>
	 <!-- End of the Carousel -->


	 <!-- Start of new reviews -->
	<div id="newReviews">
	 	<h1 id="newReviewHeader">New Reviews</h1>
	 	<ul id="newReviewList">
	 		<li class="newReview"><span class="userInReview">@ILoveAvengers </span><span>commented on </span><span class="movieTitleInReview">Avengers: </span><span>This is an awesome movie! I love it!</span></li>
	 		<li class="newReview"><span class="userInReview">@MovieLover </span><span>commented on </span><span class="movieTitleInReview">X-Men: Days of Future Past: </span><span>Best movie of 2015! I am looking forward to the next X-men movie already!</span></li>
	 		<li class="newReview"><span class="userInReview">@User12345 </span><span>commented on </span><span class="movieTitleInReview">Frozen: </span><span>This is a good movie. The plot is simple, but the music is fatanstic!</span></li>
	 		<li class="newReview"><span class="userInReview">@StudentOfUNCCS </span><span>commented on </span><span class="movieTitleInReview">The Matrix: </span><span>Good movie. Recommend.</span></li>
	 		<li class="newReview"><span class="userInReview">@abcdefg </span><span>commented on </span><span class="movieTitleInReview">How to Train Your Dragon: </span><span>The dragons are soooooooo cute! </span></li>
	 	</ul>
	</div>
	<!-- End of new reviews -->

	<!-- start of reviews php -->
	<?php

	?>
	<!-- end of reviews php -->

	<!-- Start of popular movie list -->

	<script>
	$(function ()
	{ $(".example").popover();
	});
	</script>

	<table class="table" id="popularMoviesTable">
	 	<h1 id="popularMovieListTitle">Popular Movies</h1>
	 	<tbody id="popularMovies">
	 		<tr>
	 			<?php
	 				echo "<td><a href=\"MoviePage/index.php?a_tmp=1\" id=\"example\" ><img src=\"Homepage/img/sample1.jpg\" alt=\"\" class=\"img-responsive\" id=\"sample1\"><span class=\"movieTitleInList\">Avatar</span></td>";
	 				echo "<td><a href=\"MoviePage/index.php?a_tmp=2\" id=\"example\" ><img src=\"Homepage/img/sample2.jpg\" alt=\"\" class=\"img-responsive\" id=\"sample2\"><span class=\"movieTitleInList\">Alice in Wonderland</span></td>";
	 				echo "<td><a href=\"MoviePage/index.php?a_tmp=3\" id=\"example\" ><img src=\"Homepage/img/sample3.jpg\" alt=\"\" class=\"img-responsive\" id=\"sample3\"><span class=\"movieTitleInList\">Titanic</span></td>";
	 				echo "<td><a href=\"MoviePage/index.php?a_tmp=4\" id=\"example\" ><img src=\"Homepage/img/sample4.jpg\" alt=\"\" class=\"img-responsive\" id=\"sample4\"><span class=\"movieTitleInList\">Inception</span></td>";
	 				echo "<td><a href=\"MoviePage/index.php?a_tmp=5\" id=\"example\" ><img src=\"Homepage/img/sample5.jpg\" alt=\"\" class=\"img-responsive\" id=\"sample5\"><span class=\"movieTitleInList\">Pirates of the Caribbean</span></td></tr><tr>";
	 				echo "<td><a href=\"MoviePage/index.php?a_tmp=6\" id=\"example\" ><img src=\"Homepage/img/sample6.jpg\" alt=\"\" class=\"img-responsive\" id=\"sample6\"><span class=\"movieTitleInList\">The Wolverine</span></td>";
	 				echo "<td><a href=\"MoviePage/index.php?a_tmp=7\" id=\"example\" ><img src=\"Homepage/img/sample7.jpg\" alt=\"\" class=\"img-responsive\" id=\"sample7\"><span class=\"movieTitleInList\">The Matrix</span></td>";
	 				echo "<td><a href=\"MoviePage/index.php?a_tmp=8\" id=\"example\" ><img src=\"Homepage/img/sample8.jpg\" alt=\"\" class=\"img-responsive\" id=\"sample8\"><span class=\"movieTitleInList\">Skyfall</span></td>";
	 				echo "<td><a href=\"MoviePage/index.php?a_tmp=9\" id=\"example\" ><img src=\"Homepage/img/sample9.jpg\" alt=\"\" class=\"img-responsive\" id=\"sample9\"><span class=\"movieTitleInList\">Pulp Fictio</span></td>";
	 				echo "<td><a href=\"MoviePage/index.php?a_tmp=10\" id=\"example\" ><img src=\"Homepage/img/sample10.jpg\" alt=\"\" class=\"img-responsive\" id=\"sample10\"><span class=\"movieTitleInList\">The Hunger Games</span></td></tr>";
	 			?>
	 	</tbody>
	</table>


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
	<div class="modal fade" id="contact" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<form class="form-horizontal">
					<div class="modal-header">
						<h2>Contact us</h2>
					</div>
					<div class="modal-body">
						<div class="form-group">
							<label for ="contact-email" class="col-lg-3 control-label">Your email:</label>
							<div class="col-lg-9">
								<input type="email" class="form-control" id="contact-email" placeholder="you@example.com">
							</div>
						</div>

						<div class="form-group">
							<label for ="contact-username" class="col-lg-3 control-label">Username:</label>
							<div class="col-lg-9">
								<input type="text" class="form-control" id="contact-username" placeholder="Optional">
							</div>
						</div>
						<div class="form-group">
							<label for ="contact-msg" class="col-lg-3 control-label">Message:</label>
							<div class="col-lg-9">
								<textarea class="form-control" rows="8"></textarea>
							</div>
						</div>
					</div>
					<div class="modal-footer">			
						<button class="btn btn-primary" type="submit">Submit</button>
						<a class="btn btn-default" data-dismiss="modal">Close</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end of contact page -->


	
	<script src="Homepage/index.js" type="text/javascript"></script>
	







</body>
</html>	