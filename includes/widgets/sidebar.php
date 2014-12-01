	<div id="sidebar-wrapper"> 
		<ul class="sidebar-nav">
			<li class="sidebar-brand"><a href="#">Browse</a></li>
			<?php
				$con = mysqli_connect("localhost:3306","root","");
				if(!$con)
				{
					die('Could not connect: ' . mysqli_error());
				}

				mysqli_select_db($con,"moviereviewwebsite");
				$moviequery = mysqli_query($con,"SELECT * FROM a6_category order by Category");
				while($row = $moviequery->fetch_assoc()){
					echo "<li><a href\"#\">".$row["Category"]."</a></li>";
				}
				$con->close();
			?>
		</ul>
	</div>