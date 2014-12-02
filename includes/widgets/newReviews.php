
		<h1 id="newReviewHeader">New Reviews</h1>
		<ul id="newReviewList">
			<li class="newReview">
				<span class="userInReview">
				@<?php
				$ID=rand(15, 26);
				$user=mysql_result(mysql_query("SELECT Username FROM a6_user WHERE ID = (SELECT UserID FROM a6_comment WHERE ID = '$ID')"),0);
				echo $user;
				?> 
				</span><span>commented on </span><span class="movieTitleInReview">
				<?php
				$movie=mysql_result(mysql_query("SELECT Title FROM a6_movie WHERE ID = (SELECT MovieID FROM a6_comment WHERE ID = '$ID')"),0);
				echo $movie;
				?>:  
				</span><span>
				<?php
				$comment=mysql_result(mysql_query("SELECT Content FROM a6_comment WHERE ID = '$ID'"),0);
				echo $comment;
				?>
				</span>
			</li>
			<li class="newReview">
				<span class="userInReview">
				@<?php
				$ID=rand(15, 26);
				$user=mysql_result(mysql_query("SELECT Username FROM a6_user WHERE ID = (SELECT UserID FROM a6_comment WHERE ID = '$ID')"),0);
				echo $user;
				?> 
				</span><span>commented on </span><span class="movieTitleInReview">
				<?php
				$movie=mysql_result(mysql_query("SELECT Title FROM a6_movie WHERE ID = (SELECT MovieID FROM a6_comment WHERE ID = '$ID')"),0);
				echo $movie;
				?>:  
				</span><span>
				<?php
				$comment=mysql_result(mysql_query("SELECT Content FROM a6_comment WHERE ID = '$ID'"),0);
				echo $comment;
				?>
				</span>
			</li>
			<li class="newReview">
				<span class="userInReview">
				@<?php
				$ID=rand(15, 26);
				$user=mysql_result(mysql_query("SELECT Username FROM a6_user WHERE ID = (SELECT UserID FROM a6_comment WHERE ID = '$ID')"),0);
				echo $user;
				?> 
				</span><span>commented on </span><span class="movieTitleInReview">
				<?php
				$movie=mysql_result(mysql_query("SELECT Title FROM a6_movie WHERE ID = (SELECT MovieID FROM a6_comment WHERE ID = '$ID')"),0);
				echo $movie;
				?>:  
				</span><span>
				<?php
				$comment=mysql_result(mysql_query("SELECT Content FROM a6_comment WHERE ID = '$ID'"),0);
				echo $comment;
				?>
				</span>
			</li>
			<li class="newReview">
				<span class="userInReview">
				@<?php
				$ID=rand(15, 26);
				$user=mysql_result(mysql_query("SELECT Username FROM a6_user WHERE ID = (SELECT UserID FROM a6_comment WHERE ID = '$ID')"),0);
				echo $user;
				?> 
				</span><span>commented on </span><span class="movieTitleInReview">
				<?php
				$movie=mysql_result(mysql_query("SELECT Title FROM a6_movie WHERE ID = (SELECT MovieID FROM a6_comment WHERE ID = '$ID')"),0);
				echo $movie;
				?>:  
				</span><span>
				<?php
				$comment=mysql_result(mysql_query("SELECT Content FROM a6_comment WHERE ID = '$ID'"),0);
				echo $comment;
				?>
				</span>
			</li>
			<li class="newReview">
				<span class="userInReview">
				@<?php
				$ID=rand(15, 26);
				$user=mysql_result(mysql_query("SELECT Username FROM a6_user WHERE ID = (SELECT UserID FROM a6_comment WHERE ID = '$ID')"),0);
				echo $user;
				?> 
				</span><span>commented on </span><span class="movieTitleInReview">
				<?php
				$movie=mysql_result(mysql_query("SELECT Title FROM a6_movie WHERE ID = (SELECT MovieID FROM a6_comment WHERE ID = '$ID')"),0);
				echo $movie;
				?>:  
				</span><span>
				<?php
				$comment=mysql_result(mysql_query("SELECT Content FROM a6_comment WHERE ID = '$ID'"),0);
				echo $comment;
				?>
				</span>
			</li>
			<li class="newReview">
				<span class="userInReview">
				@<?php
				$ID=rand(15, 26);
				$user=mysql_result(mysql_query("SELECT Username FROM a6_user WHERE ID = (SELECT UserID FROM a6_comment WHERE ID = '$ID')"),0);
				echo $user;
				?> 
				</span><span>commented on </span><span class="movieTitleInReview">
				<?php
				$movie=mysql_result(mysql_query("SELECT Title FROM a6_movie WHERE ID = (SELECT MovieID FROM a6_comment WHERE ID = '$ID')"),0);
				echo $movie;
				?>:  
				</span><span>
				<?php
				$comment=mysql_result(mysql_query("SELECT Content FROM a6_comment WHERE ID = '$ID'"),0);
				echo $comment;
				?>
				</span>
			</li>
		</ul>
