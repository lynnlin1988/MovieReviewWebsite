<?php
include 'core/init.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>My Home Page</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="search.css" rel="stylesheet">
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
<div class="movielist">
	<h1> Search Result</h1>
<?php
$search=$_POST['search'];

$count=searchCount($search);

$n=0;
if($count==0){
	echo "<li>No Resutl Found!</li>";
}
while($n<$count){
	$result=search($search, $n);
	$movieID=movie_id_from_title($result);
	echo "<img src=\"img/sample".$movieID.".jpg\" alt=\"\" class=\"img-responsive\"  width=\"230px\" height=\"360px\"id=\"sample".$movieID."\">";
	echo "<li>";
	echo"<a href=\"moviePage.php?a_tmp=".$movieID."\">".$result."</a>"."</li>";
//	echo "</li>";
	$n=$n+1;

}

?>
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