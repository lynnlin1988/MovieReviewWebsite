<?php
include 'core/init.php';

?>

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Movie Review Website</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<link href="MoviePage/styles.css" rel="stylesheet">
		<script src="js/bootstrap.js"></script>
		<script src="http://www.cs.unc.edu/Courses/comp426-f14/jquery-1.11.1.js" type="text/javascript"></script>
		<script src="js/bootstrap-tooltip.js"></script>
		<script src="js/bootstrap-popover.js"></script>
	  	
	</head>

<body>

	<!-- Start of the navigation bar -->
	<?php
	include 'includes/widgets/navigation.php';
	?>
	<!--End of navigation bar -->



	<!-- Start of the movie information -->
	<?php
		echo "<div class=\"movieinfo\">";
		$movienumber=$_GET["a_tmp"];
		if(logged_in()==true){
			$usernumber=$_SESSION['user_id'];
		}else{
			$usernumber=5;
		}

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
			echo "<p class=\"header\">Please Tell Us How You Think of This Movie!</p>";


			echo "<form class=\"form-horizontal\" id=\"newratingform\"  method=\"post\">";
				echo "<p id=\"ratingrow\"><input type=\"text\" id=\"newrating\" placeholder=\"10\" name=\"newrating\">";
				echo "/10</p>";	
				$newuser=$usernumber;
				$newmovie=$movienumber;
				$newrating=$_POST['newrating'];
				echo "<button type=\"submit\" form=\"newratingform\"id=\"ratingsubmit\">Submit</button>";
				if($newrating<=10 && $newrating>=1){
					$mysql=mysql_query("INSERT INTO a6_rating (UserID, MovieID, Rating) VALUES ('$newuser', '$newmovie', '$newrating')");
				}else{
					echo "<p>Please Insert a score in 1-10!</p>";
				}
				
				$sumscore=0;
				$sumnumber=0;
				$ratingquery = mysqli_query($con,"SELECT * FROM a6_rating where MovieId=$movienumber");
				while($row = $ratingquery->fetch_assoc()) {
					$sumscore=$sumscore+$row['Rating'];
					$sumnumber=$sumnumber+1;
				}
				$newscore=round($sumscore/$sumnumber,1);
				$mysql=mysql_query("UPDATE a6_movie SET Rating=$newscore where ID=$movienumber");

				$newrating=NULL;

				echo "</form>";




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
		
					
			$con = mysqli_connect("localhost:3306","root","");
				if(!$con)
				{
					die('Could not connect: ' . mysqli_error());
				}
				mysqli_select_db($con,"moviereviewwebsite");
				echo "<form class=\"form-horizontal\" id=\"register-form\"  method=\"post\">";
				echo "<input type=\"text\" id=\"newcommentbar\" placeholder=\"Please insert your comment here.\" name=\"newcomment\">";	
				$newuser=$usernumber;
				$newmovie=$movienumber;
				$newcomment=$_POST['newcomment'];
				echo "<p><button type=\"submit\" form=\"register-form\"id=\"commentsubmit\">Submit</button></p>";
				if($newcomment!=NULL){
					$mysql=mysql_query("INSERT INTO a6_comment (UserID, MovieID, Content) VALUES ('$newuser', '$newmovie', '$newcomment')");
				}else{
					echo "<p class=\"alert\">Please enter the comment!</p>";
				}
				$newcomment=NULL;
				
				echo "</form>";
				$con->close();
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
			
			$moviecommentquery = mysqli_query($con,"SELECT * FROM a6_comment inner join a6_user on a6_comment.UserID=a6_user.ID where a6_comment.MovieID=$movienumber order by a6_comment.ID desc");
			while($row = $moviecommentquery->fetch_assoc()){
				echo "<li><a href=\"";

				if($usernumber==$row["UserID"]){
					echo "personalPage.php?b_tmp=".$row["UserID"];
				}else{
					echo "viewpersonalPage.php?b_tmp=".$row["UserID"];
				}


				echo "\">".$row["Username"]."</a>'s comment: ".$row["Content"]."</li>";
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

	<?php
		include 'includes/widgets/profile.php';
	?>



</body>
</html>	