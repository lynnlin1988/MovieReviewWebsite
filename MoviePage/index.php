<?php
include '../core/init.php';

?>

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

	<!-- Start of the navigation bar -->
	<?php
	include '../includes/widgets/navigation.php';
	?>
	<!--End of navigation bar -->



	<!-- Start of the movie information -->
	<?php
		echo "<div class=\"movieinfo\">";
		$movienumber=$_GET["a_tmp"];
		$usernumber=0;
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
		
		<?php
			echo "<textarea id=\"newcomment\">Please Insert Your Comment</textarea>";
			$con = mysqli_connect("localhost:3306","root","");
				if(!$con)
				{
					die('Could not connect: ' . mysqli_error());
				}

				mysqli_select_db($con,"moviereviewwebsite");

				echo "<button id=\"submitcomment\">Submit</button>";
		?>
		
	</div>
	<!-- End of Comment -->
	 <!-- Start of new reviews -->
	 <div id="newReviews">
	 	<?php
	 		$con = mysqli_connect("localhost:3306","root","");
			if(!$con)
			{
				die('Could not connect: ' . mysqli_error());
			}

			mysqli_select_db($con,"moviereviewwebsite");
	 		$moviequery = mysqli_query($con,"SELECT * FROM a6_movie where ID=$movienumber");
	 		echo "<h1 id=\"newReviewHeader\">New Reviews on ";
	 			
	 		while($row = $moviequery->fetch_assoc()){
					echo $row["Title"];
				}
	 		echo "</h1><ul id=\"newReviewList\">";
			
			$moviecommentquery = mysqli_query($con,"SELECT * FROM a6_comment inner join a6_user on a6_comment.UserID=a6_user.ID where a6_comment.MovieID=$movienumber");
			while($row = $moviecommentquery->fetch_assoc()){
				echo "<li><a href\"#\">".$row["Username"]."'s comment: ".$row["Content"]."</a></li>";
			}
			$con->close();
		?>
	 	</ul>
	 </div>


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


</body>
</html>	