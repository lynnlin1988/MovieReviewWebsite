<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Movie Review Website</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
</head>

<body>

	<!-- Start of the navigation bar -->
	<div class="navbar navbar-inverse navbar-fixed-top"> 
		<div class="container">
			<div class="navbar-header">
				<a href="#" class="navbar-brand">Home Page</a>

				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-inverse">Submit</button>
				</form>

				<button class="navbar-toggle" data-toggle = "collapse" data-target=".navHeaderCollapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<div class="collapse navbar-collapse navHeaderCollapse">

				<ul class="nav navbar-nav nvabar-right">
					<li><a href="#login" data-toggle="modal">Log in</a></li>
					<li><a href="#register" data-toggle="modal">Register</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Share to <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Google+</a></li>
							<li><a href="#">Facebook</a></li>
							<li><a href="#">Twitter</a></li>
							<li><a href="#">WeChat</a></li>
							<li><a href="#">Weibo</a></li>
						</ul>
					</li>
					<li><a href="#contact" data-toggle="modal">Contact us</a></li>
				</ul>
			</div>
		</div>
	</div> 
	<!--End of navigation bar -->


	<!-- Start of the sidebar -->
	<div id="sidebar-wrapper"> 
		<ul class="sidebar-nav">
			<li class="sidebar-brand"><a href="#">Browse</a></li>
			<li><a href="#">Action&Adventure</a></li>
			<li><a href="#">Comedy</a></li>
			<li><a href="#">Cartoon</a></li>
			<li><a href="#">Documentory</a></li>
			<li><a href="#">Horror</a></li>
			<li><a href="#">Kid</a></li>
			<li><a href="#">Musical</a></li>
			<li><a href="#">Romance</a></li>
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
				<img src="img/Avengers.jpg" alt="" class="img-responsive">
			</div>

			<div class="item">
				<img src="img/CaptainAmerica.jpg" alt="" class="img-responsive">
			</div>

			<div class="item">
				<img src="img/Thor.jpg" alt="" class="img-responsive">
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
	 	<?php

	 			print("<p>\n");
  print("Winner, winner, chicken dinner!\n");
  print("</p>\n");

	 		?>
	 	<ul id="newReviewList">
	 		<?php

//	 			$current_time = time();
//				$num_seconds = $current_time % 60;
				print("<li class=\"newReview\"><span class=\"userInReview\">@ILoveAvengers </span><span>commented on </span><span class=\"movieTitleInReview\">Avengers: </span><span>This is an awesome movie! I love it!</span></li>\n");
				print("<li class=\"newReview\"><span class=\"userInReview\">@ILoveAvengers </span><span>commented on </span><span class=\"movieTitleInReview\">Avengers: </span><span>This is an awesome movie! I love it!</span></li>\n");
				print("<li class=\"newReview\"><span class=\"userInReview\">@ILoveAvengers </span><span>commented on </span><span class=\"movieTitleInReview\">Avengers: </span><span>This is an awesome movie! I love it!</span></li>\n");
//				print("<li class="newReview"><span class="userInReview">@ILoveAvengers </span><span>commented on </span><span class="movieTitleInReview">Avengers: </span><span>This is an awesome movie! I love it!</span></li>\n");
//				print("<li class="newReview"><span class="userInReview">@ILoveAvengers </span><span>commented on </span><span class="movieTitleInReview">Avengers: </span><span>This is an awesome movie! I love it!</span></li>\n");

	 		?>

	 		<!--
	 		<li class="newReview"><span class="userInReview">@ILoveAvengers </span><span>commented on </span><span class="movieTitleInReview">Avengers: </span><span>This is an awesome movie! I love it!</span></li>
	 		<li class="newReview"><span class="userInReview">@MovieLover </span><span>commented on </span><span class="movieTitleInReview">X-Men: Days of Future Past: </span><span>Best movie of 2015! I am looking forward to the next X-men movie already!</span></li>
	 		<li class="newReview"><span class="userInReview">@User12345 </span><span>commented on </span><span class="movieTitleInReview">Frozen: </span><span>This is a good movie. The plot is simple, but the music is fatanstic!</span></li>
	 		<li class="newReview"><span class="userInReview">@StudentOfUNCCS </span><span>commented on </span><span class="movieTitleInReview">The Matrix: </span><span>Good movie. Recommend.</span></li>
	 		<li class="newReview"><span class="userInReview">@abcdefg </span><span>commented on </span><span class="movieTitleInReview">How to Train Your Dragon: </span><span>The dragons are soooooooo cute! </span></li>
	 		-->


	 	</ul>
	</div>
	<!-- End of new reviews -->


	<!-- Start of popular movie list -->
	<table class="table" id="popularMoviesTable">
	 	<h1 id="popularMovieListTitle">Popular Movies</h1>
	 	<tbody id="popularMovies">
	 		<tr>
	 			<td><img src="img/sample1.jpg" alt="" class="img-responsive"><span class="movieTitleInList">Avatar</span></td>
	 			<td><img src="img/sample2.jpg" alt="" class="img-responsive"><span class="movieTitleInList">Alice in Wonderland</span></td>
	 			<td><img src="img/sample3.jpg" alt="" class="img-responsive"><span class="movieTitleInList">Titanic</span></td>
	 			<td><img src="img/sample4.jpg" alt="" class="img-responsive"><span class="movieTitleInList">Inception</span></td>
	 			<td><img src="img/sample5.jpg" alt="" class="img-responsive"><span class="movieTitleInList">Pirates of the Caribbean</span></td>	
	 		</tr>
	 		<tr>
	 			<td><img src="img/sample6.jpg" alt="" class="img-responsive"><span class="movieTitleInList">The Wolverine</span></td>
	 			<td><img src="img/sample7.jpg" alt="" class="img-responsive"><span class="movieTitleInList">The Matrix</span></td>
	 			<td><img src="img/sample8.jpg" alt="" class="img-responsive"><span class="movieTitleInList">Skyfall</span></td>
	 			<td><img src="img/sample9.jpg" alt="" class="img-responsive"><span class="movieTitleInList">Pulp Fiction</span></td>
	 			<td><img src="img/sample10.jpg" alt="" class="img-responsive"><span class="movieTitleInList">The Hunger Games</span></td>	
	 		</tr>
	 	</tbody>
	</table>

	<!-- End of popular movie list -->



	<!-- start of register page -->
	<div class="modal fade" id="register" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<form class="form-horizontal" id="register-form">
					<div class="modal-header">
						<h2>Register</h2>
					</div>
					<div class="modal-body">

						<div class="form-group">
							<label for ="register-username" class="col-lg-2 control-label">Username:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="register-username" placeholder="Enter the username you want to use">
							</div>
						</div>
						<div class="form-group">
							<label for ="register-pwd" class="col-lg-2 control-label">Password:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="register-pwd" placeholder="Enter your password">
							</div>
						</div>
						<div class="form-group">
							<label for ="register-email" class="col-lg-2 control-label">Email:</label>
							<div class="col-lg-10">
								<input type="email" class="form-control" id="register-email" placeholder="you@example.com">
							</div>
						</div>
					</div>
					<div class="modal-footer">			
						<button class="btn btn-primary" type="submit" id="register-submit">Submit</button>
						<a class="btn btn-default" data-dismiss="modal" id="register-close">Close</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end of register page -->


	<!-- start of login page -->
	<div class="modal fade" id="login" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<form class="form-horizontal">
					<div class="modal-header">
						<h2>Log in</h2>
					</div>
					<div class="modal-body">

						<div class="form-group">
							<label for ="login-username" class="col-lg-2 control-label">Username:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="login-username" placeholder="Enter your username">
							</div>
						</div>
						<div class="form-group">
							<label for ="login-pwd" class="col-lg-2 control-label">Password:</label>
							<div class="col-lg-10">
								<input type="text" class="form-control" id="login-pwd" placeholder="Enter your password">
							</div>
						</div>
					</div>
					<div class="modal-footer">			
						<button class="btn btn-primary" type="submit">Submit</button>
						<button class="btn btn-default">Forgot username or password?</button>
						<a class="btn btn-default" data-dismiss="modal">Close</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- end of login page -->


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

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/Homepage.js"></script>

	







</body>
</html>	