

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Movie Review Website</title>
		<link href="../css/bootstrap.min.css" rel="stylesheet">
		<link href="../css/bootstrap-responsive.css" rel="stylesheet">
		<link href="styles.css" rel="stylesheet">
		<script src="../jquery-1.11.1.js" type="text/javascript"></script>
	  	<script src="index.js" type="text/javascript"></script>
	</head>

<body>
<div>
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
					<li><a href="#">Log in</a></li>
					<li><a href="#">Register</a></li>
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
					<li><a href="#">Contact us</a></li>
				</ul>
			</div>
		</div>
	</div> 
	<!--End of navigation bar -->



	<!-- Start of the movie information -->
	<?php
		echo "<div class=\"movieinfo\">";
		$movienumber=7;
			echo "<div class=\"moviepic\"><img src=\"img/sample".$movienumber.".jpg\" alt=\"\" class=\"intropic\"></div>";
			echo "<div class=\"star\">";
				
				$con = mysqli_connect("localhost:3306","root","");
				if(!$con)
				{
					die('Could not connect: ' . mysqli_error());
				}

				mysqli_select_db($con,"moviereviewwebsite");
				$moviequery = mysqli_query($con,"SELECT * FROM a6_movie where id=$movienumber");
				echo "<p id=\"title\">";
				while($row = $moviequery->fetch_assoc()) {
					echo $row["Title"];
					echo"</p><p>";
					echo $row["Length"]." ".$row["Country"]."(".$row["Language"].")";
					echo"</p>";
				} 

				echo "<p class=\"header\">Type</p><p>";
				
				$categoryquery = mysqli_query($con,"SELECT * FROM a6_category 
					inner join a6_moviecategory on a6_moviecategory.categoryid=a6_category.id 
					inner join a6_movie on a6_moviecategory.movieid=a6_movie.id 
					where a6_movie.id=$movienumber order by category");
				while($row = $categoryquery->fetch_assoc()) {
					echo $row["Category"]." ";
					} 
				echo"</p>";


				echo "<p class=\"header\">Director</p><p>";
				$directorquery = mysqli_query($con,"SELECT * FROM a6_staff
					inner join a6_director on a6_director.staffid=a6_staff.id 
					inner join a6_movie on a6_director.movieid=a6_movie.id 
					where a6_movie.id=$movienumber");
				while($row = $directorquery->fetch_assoc()) {
					echo $row["FirstName"]." ".$row["LastName"]."</br>";
					} 
				echo "</p>";

				echo "<p class=\"header\">Star</p><p>";
				$starquery = mysqli_query($con,"SELECT * FROM a6_staff
					inner join a6_actor on a6_actor.staffid=a6_staff.id 
					inner join a6_movie on a6_actor.movieid=a6_movie.id 
					where a6_movie.id=$movienumber order by LastName");
				while($row = $starquery->fetch_assoc()) {
					echo $row["FirstName"]." ".$row["LastName"]."</br>";
					} 
				echo "</p>";
			echo "</div>";

			echo "<div class=\"displayedscore\">";
			echo "<p class=\"header\">Score</p>";
			echo "<p>";
			$moviequery = mysqli_query($con,"SELECT * FROM a6_movie where id=$movienumber");
			while($row = $moviequery->fetch_assoc()) {
				echo $row["Rating"];
			}
			echo "/10";
			echo "</div>";
			echo "</div>";


			echo "<div class=\"movieintro\">";
			echo "<p class=\"header\">SotryLine</p><p>";
			$moviequery = mysqli_query($con,"SELECT * FROM a6_movie where id=$movienumber");
			while($row = $moviequery->fetch_assoc()) {
				echo $row["Summary"];
			}
			echo "</p>";
			echo "</div>";
			$con->close();
			?>

	<div class="comment">
		<div class="header">Comments</div>
		<textarea id="newcomment">Please Insert Your Comment</textarea>
		<button id="submitcomment">Submit</button>
	</div>
	<!-- End of Comment -->
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
</div>

</body>
</html>	