<?php
include 'core/init.php';

$newcomment=$_POST['newcomment'];
$movieID=$moviebumber;
$userID=$usernumber;


$upload = upload($userID, $movieID, $newcomment);
echo '<script type="text/javascript">alert("You are successfully registered!");</script>'
header("refresh: 0; url=index.php");
exit();	


//print_r($errors);

?>