<?php
include 'core/init.php';


$search=$_POST['search'];

$count=searchCount($search);


$n=0;
while($n<$count){
	$result=search($search, $n);
	$movieID=movie_id_from_title($result);
	echo "<li>";
	echo"<a href=\"moviePage.php?a_tmp=".$movieID."\">".$result."</a>"."</li>";
//	echo "</li>";
	$n=$n+1;

}

?>