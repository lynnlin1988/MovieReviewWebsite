<?php
include 'core/init.php';

if(empty($_POST)==false){
	$username=$_POST['username'];
	$password=$_POST['password'];

	if(empty($username) || empty($password)){
		$errors[]='You need to enter a username and password';
	}
	else if (user_exists($username)===false) {
		$errors[]=$username;
	}
	else {
		$login = login($username, $password);
		if ($login===false) {
			$errors[]='This username/password combination is incorrect';
		} else {
			$_SESSION['user_id']=$login;
			header('Location: index.php');
			exit();
		}
	}

	print_r($errors);

}

?>