<?php
include 'core/init.php';

$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];

if(user_exists($username)==true){	
	echo '<script type="text/javascript">alert("This username has been registered, please choose another one.");</script>';
	header("refresh: 0; url=index.php?");
//	header("refresh: 0; url=index.php?action='registerAgain'");
//	echo '<script type="text/javascript">$(\'#login\').modal(\'show\');</script>';	
} 

else {
	$register = register($username, $password, $email);
	$login = login($username, $password);
	echo '<script type="text/javascript">alert("You are successfully registered!");</script>';
	$_SESSION['user_id']=$login;
	header("refresh: 0; url=index.php");
	exit();	
}

//print_r($errors);

?>