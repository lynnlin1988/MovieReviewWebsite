<?php
include 'core/init.php';

?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Home Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="PersonalPage/styles.css" rel="stylesheet">
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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

<?php
	$memberid=2;
	$con = mysqli_connect("localhost:3306","root","");
	if(!$con)
	{
		die('Could not connect: ' . mysqli_error());
	}
	mysqli_select_db($con,"moviereviewwebsite");
	
	echo "<div class=\"myprofile\">";

		//profile picture
		$filename="img/user".$memberid.".jpg";
		if (file_exists($filename)) {
			echo "<div class=\"mypic\"><img src=".$filename." alt=\"\" class=\"intropic\"></div>" ;
		} else {
			echo "<div class=\"mypic\"><img src=\"img/no-profile-img.gif\" alt=\"\" class=\"intropic\"></div>";
		}

		//Personal Info
		echo "<div class=\"personalinfo\">";
			echo "<p id=\"title\">";
			$myquery = mysqli_query($con,"SELECT * FROM a6_user where id=$memberid");
			while($row = $myquery->fetch_assoc()) {
				echo $row["Username"];
			}
			echo "</p>";

			echo "<p class=\"header\">Country: </p>";
			echo "<p>";
			$myquery = mysqli_query($con,"SELECT * FROM a6_user where id=$memberid");
			while($row = $myquery->fetch_assoc()) {
				if(!$row["Country"]){
					echo "Don't tell you!";
				}else
				{
					echo $row["Country"];
				}
				
			}
			echo "</p>";
			echo "<p class=\"header\">Countact: </p>";
			echo "<p>";
			$myquery = mysqli_query($con,"SELECT * FROM a6_user where id=$memberid");
			while($row = $myquery->fetch_assoc()) {
				if(!$row["Email"]){
					echo "Don't tell you!";
				}else
				{
					echo $row["Email"];
				}	
			}
			echo "</p>";


			echo "<p class=\"header\">Interest: </p>";
			$myinterestquery = mysqli_query($con,"SELECT * FROM a6_category 
				inner join a6_usercategory on a6_category.ID=a6_usercategory.categoryID
				inner join a6_user on a6_usercategory.userID=a6_user.ID
				where a6_user.ID=$memberid order by Category");
				if($myinterestquery->num_rows==0){
					echo "<p style=\"color:grey \">Tell us about your interest!";
				}else
				{
					while($row = $myinterestquery->fetch_assoc()) {
						echo "<p>".$row["Category"];
						}
				}	
			
			echo "</p>";


			echo "<p class=\"header\">Motto: </p>";
			$myquery = mysqli_query($con,"SELECT * FROM a6_user where id=$memberid");
			while($row = $myquery->fetch_assoc()) {
				if(!$row["Summary"]){
					echo "<p style=\"color:grey \">Tell us about you!";
				}else
				{
					echo "<p>".$row["Summary"];
				}	
			}
			echo "</p>";

			echo "<button>Edit My Profile</button>";

		echo "</div>";

	
	echo "</div>";


	echo "<div id=\"friends\">";
		echo "<table class=\"friendtable\">";
		echo "<h1 id=\"title\">Friends</h1>";
		$myfriends = mysqli_query($con,"SELECT * FROM a6_user inner join a6_friend on a6_friend.UserAID=a6_user.id where a6_friend.UserBID=$memberid");
		$i=0;
		while($row = $myfriends->fetch_assoc()) {
				if(!$row["Username"]){
					echo "<p style=\"color:grey \">Try to find some friends!";
				}else
				{
					if($i%5==0){
						echo "<tr>";
					}
					$i=$i+1;
					echo "<td>";
					$picname="img/user".$row["ID"].".jpg";
					if (file_exists($picname)) {
						echo "<p id=\"imgtd\"><img src=".$picname." alt=\"\" class=\"intropic\"></p>" ;
					} else {
						echo "<p id=\"imgtd\"><img src=\"img/no-profile-img.gif\" alt=\"\" class=\"intropic\"></p>";
					}
					echo "<p>".$row["Username"]."</p></td>";
					if($i%5==0){
						echo "</tr>";
					}
				}	
			}
		if($i%5!=0){
			echo "</tr>";
		}

		echo "</table>";
	echo "</div>";

	echo "<div id=\"myReviews\">";
		$myquery = mysqli_query($con,"SELECT * FROM a6_user where id=$memberid");
		echo "<h1 id=\"myReviewHeader\">Reviews by ";
		while($row = $myquery->fetch_assoc()) {
			echo $row["Username"];
		}
		echo "</h1>";

		$myreviews = mysqli_query($con,"SELECT * FROM a6_comment 
			inner join a6_user on a6_comment.UserID=a6_user.id
			inner join a6_movie on a6_comment.MovieID=a6_movie.id
			where a6_user.ID=$memberid");
		echo "<ul id=\"myReviewList\">";
		if(!$row["Title"]){
			echo "<li style=\"color:grey\">Let's Make Some Comments on Your Favorite Movies!</li>";
		}
		while($row = $myreviews->fetch_assoc()) {
			echo "<li class=\"newReview\">Comment on <span class=\"movieTitleInReview\">'".$row["Title"]."': </span><span>".$row["Content"]."</span></li>";
		}

		echo "</ul>";
	echo "</div>";

?>
<div>
	<p> </p>
	<p> </p>
	<p> </p>
	<p> </p>
	<p> </p>
	<p> </p>
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