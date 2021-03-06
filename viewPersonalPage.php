<?php
include 'core/init.php';

?>


<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="ViewPersonalPage/styles.css" rel="stylesheet">
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
	$memberid=$_GET["b_tmp"];

	if(logged_in()==true){
			$usernumber=$_SESSION['user_id'];
		}else{
			$usernumber=5;
	}



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
			$myquery = mysqli_query($con,"SELECT * FROM a6_user where id=$memberid");
			while($row = $myquery->fetch_assoc()) {
				if(!$row["Country"]){
					echo "<p style=\"color:grey\">Don't Tell You :-P</p>";
				}else
				{
					echo "<p>".$row["Country"]."</p>";
				}
				
			}
			echo "<p class=\"header\">Contact: </p>";
			$myquery = mysqli_query($con,"SELECT * FROM a6_user where id=$memberid");
			while($row = $myquery->fetch_assoc()) {
				if(!$row["Email"]){
					echo "<p style=\"color:grey\">Don't Tell You :-P</p>";
				}else
				{
					echo "<p>".$row["Email"]."</p>";
				}	
			}


/*			echo "<p class=\"header\">Interest: </p>";
			$myinterestquery = mysqli_query($con,"SELECT * FROM a6_category 
				inner join a6_usercategory on a6_category.ID=a6_usercategory.categoryID
				inner join a6_user on a6_usercategory.userID=a6_user.ID
				where a6_user.ID=$memberid order by Category");
				if($myinterestquery->num_rows==0){
					echo "<p style=\"color:grey \">Don't Tell You :-P";
				}else
				{
					while($row = $myinterestquery->fetch_assoc()) {
						echo "<p>".$row["Category"];
						}
				}	
			
			echo "</p>";
		*/


			echo "<p class=\"header\">Motto: </p>";
			$myquery = mysqli_query($con,"SELECT * FROM a6_user where id=$memberid");
			while($row = $myquery->fetch_assoc()) {
				if(!$row["Summary"]){
					echo "<p style=\"color:grey \">Don't Tell You :-P";
				}else
				{
					echo "<p>".$row["Summary"];
				}	
			}
			echo "</p>";

			echo "<button style=\"width:200px\" href=\"#addFriend\" data-toggle=\"modal\">Add <span style=\"font-style:italic\">";
			$myquery = mysqli_query($con,"SELECT * FROM a6_user where id=$memberid");
			while($row = $myquery->fetch_assoc()) {echo "<p>".$row["Username"];}
			echo "</span> as a Friend</button>";

		echo "</div>";

	
	echo "</div>";


	echo "<div id=\"friends\">";
		echo "<table class=\"friendtable\">";
		echo "<h1 id=\"title\">Friends</h1>";
		$myfriends = mysqli_query($con,"SELECT * FROM a6_user inner join a6_friend on a6_friend.UserBID=a6_user.id where a6_friend.UserAID=$memberid");
		$i=0;
		if($myfriends->num_rows==0){
			echo "<tr><p style=\"color:grey \">No friend relationship found!</tr>";
		}
		while($row = $myfriends->fetch_assoc()) {
				if($i%5==0){
					echo "<tr>";
				}
				$i=$i+1;
				echo "<td>";
				$picname="img/user".$row["ID"].".jpg";
				if (file_exists($picname)) {
					echo "<p id=\"imgtd\"><img src=".$picname." alt=\"\"  width=\"125\" height=\"125\"></p>" ;
				} else {
					echo "<p id=\"imgtd\"><img src=\"img/no-profile-img.gif\" alt=\"\"  width=\"125\" height=\"125\"></p>";
				}

				if($row["ID"]!=5){
					echo "<a href=\"";
					
						if($row["UserBID"]!=$usernumber){
							echo "view";
						}

					echo "personalPage.php?b_tmp=".$row["UserBID"]."\"><p style=\"font-size:150%;font-weight:500;text-align:left\">".$row["Username"]."</p></td></a>";
				}else{
					echo "<a href=\"#\"><p style=\"font-size:150%;font-weight:500;text-align:left\">".$row["Username"]."</p></td></a>";
				}

				if($i%5==0){
					echo "</tr>";
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
		while($row = $myquery->fetch_assoc()) {echo $row["Username"];}
		echo ".</li>";

		while($row = $myreviews->fetch_assoc()) {
			if(!$row["Title"]){
				echo "<li style=\"color:grey\">There's no comment made by ";
				echo $row["Username"]."</li>";
			}else{
				echo "<li class=\"newReview\">Comment on <a href=\"moviePage.php?a_tmp=".$row['MovieID']."\"class=\"movieTitleInReview\">'".$row["Title"]."': </a><span>".$row["Content"]."</span></li>";
			}
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


	<div class="modal fade" id="addFriend" role="dialog">
		<div class="modal-dialog">
			<div class="modal-content">
				<?php
				echo "<form class=\"form-horizontal\" id=\"addFriend-form\" action=\"addFriend.php?bID=".$memberid."\" method=\"post\">";
				?>
				
					<div class="modal-header">
						<h2>Add as a friend</h2>
					</div>
					<div class="modal-body">

						<div class="form-group">
							<label id="addFriend-warning">       Do you want to add this user as a friend? </label>
						</div>
					</div>
					<div class="modal-footer">			
						<button class="btn btn-primary" type="submit">Yes</button>
						<a class="btn btn-default" data-dismiss="modal">No</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

</body>
</html>	