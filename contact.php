<?php
include 'core/init.php';

$username=$_POST['username'];
$content=$_POST['content'];
$email=$_POST['email'];


$contact = contactUs($email, $content, $username);

echo '<script type="text/javascript">alert("Thank you for contacting us.");</script>';
header("refresh: 0; url=index.php");
	

//print_r($errors);

?>