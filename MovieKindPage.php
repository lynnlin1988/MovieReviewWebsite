

<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Movie Review Website</title>
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-responsive.css" rel="stylesheet">
		<link href="MovieKindPage/styles.css" rel="stylesheet">
		<script src="jquery-1.11.1.js" type="text/javascript"></script>
	  	<script src="MovieKindPage/index.js" type="text/javascript"></script>
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
		echo "<div class=\"movielist\">";
		$categorynumber=$_GET["c_tmp"];
		
		$con = mysqli_connect("localhost:3306","root","");
		if(!$con)
		{
			die('Could not connect: ' . mysqli_error());
		}

		mysqli_select_db($con,"moviereviewwebsite");

		echo "<div id=\"categorymovie\">";
		echo "<table class=\"categorytable\">";

		$categoryquery = mysqli_query($con,"SELECT * FROM a6_category where id=$categorynumber");
		echo "<h1>";
			
			while($row = $categoryquery->fetch_assoc()) {
				echo $row["Category"];
			}

		echo "</h1>";

		$samecategory = mysqli_query($con,"SELECT * FROM a6_movie
			inner join a6_moviecategory on a6_moviecategory.MovieID=a6_movie.ID
			inner join a6_category on a6_category.ID=a6_moviecategory.CategoryID
			where a6_category.ID=$categorynumber");
		$i=0;
		while($row = $samecategory->fetch_assoc()) {
				if(!$row["Title"]){
					echo "<p style=\"color:grey \">There is no movie in this category!</p>";
				}else
				{
					if($i%5==0){
						echo "<tr>";
					}
					$i=$i+1;
					echo "<td class=\"singleblank\">";
					$picname="img/sample".$row["MovieID"].".jpg";
					if (file_exists($picname)) {
						echo "<p width=\"300px\"id=\"imgtd\"><img width=\"230px\" src=".$picname." alt=\"\" class=\"intropic\"></p>" ;
					} else {
						echo "<p id=\"imgtd\"><img src=\"img/no-profile-img.gif\" alt=\"\" class=\"intropic\"></p>";
					}
					echo "<a href=\"moviePage.php?a_tmp=".$row["MovieID"]."\"><p id=\"movietitle\" style=\"font-size:150%;font-weight:500;text-align:center\">".$row["Title"]."</a></p></td>";
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

		$con->close();
		?>


</body>
</html>	