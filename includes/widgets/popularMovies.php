	<script src="js/bootstrap-tooltip.js"></script>
	<script src="js/bootstrap-popover.js"></script>
	<table class="table" id="popularMoviesTable">
		 <h1 id="popularMovieListTitle">Popular Movies</h1>
	 	<tbody id="popularMovies">
	 		<?php
				$con = mysqli_connect("localhost:3306","root","");
					
					if(!$con)
					{
						die('Could not connect: ' . mysqli_error());
					}

					mysqli_select_db($con,"moviereviewwebsite");
					$moviequery = mysqli_query($con,"SELECT * FROM a6_movie order by id");
					$m=0;
					while($row = $moviequery->fetch_assoc()) {
						if($m<10){
							if($m%5==0){
							echo "<tr>";
							}
							$m=$m+1;
							echo "<td width='300px'>";
							echo "<a href=\"moviePage.php?a_tmp=".$m."\" id=\"example";
							if($m%5==0){
								echo "left";
							}
							echo "\" ><img src=\"img/sample".$m.".jpg\" alt=\"\" class=\"img-responsive\"  width=\"230px\" height=\"360px\"id=\"sample".$m."\"><span class=\"movieTitleInList\" >".$row["Title"]."</span></a></td>";
							echo "<script>$('#sample".$m."').popover({
								title:'".$row['Title']." (".$row['Rating']."/10)',
								content:'";
							echo "Length: ".$row["Length"]." "."Country: ".$row["Country"]."(".$row["Language"].")"."'})</script>";
							if($m%5==0){
								echo "</tr>";
							}
						}
					} 
					if($m%5!=0){
							echo "</tr>";
						}
						
		 				
	 		?>
	 	</tbody>
	</table>