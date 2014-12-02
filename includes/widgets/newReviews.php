
		<h1 id="newReviewHeader">New Reviews</h1>
		<ul id="newReviewList">
		<?php
			$con = mysqli_connect("localhost:3306","root","");
				if(!$con)
				{
					die('Could not connect: ' . mysqli_error());
				}

			mysqli_select_db($con,"moviereviewwebsite");
			$newcommentquery=mysqli_query($con,"SELECT * FROM a6_comment
				inner join a6_user on a6_user.ID=a6_comment.UserID
				inner join a6_movie on a6_movie.ID=a6_comment.MovieID order by a6_comment.ID desc");
			$n=0;
				while($row = $newcommentquery->fetch_assoc()){
					if($n<5){
						echo "<li>";
						echo "<a href=\"viewpersonalPage.php?b_tmp=".$row["UserID"]."\">".$row["Username"]."</a>";
						echo" @ ";
						echo "<a href=\"moviePage.php?a_tmp=".$row["MovieID"]."\">".$row["Title"]."</a>".": ".$row["Content"]."</li>";
						$n=$n+1;
					}
				}
				

		?>

		</ul>
