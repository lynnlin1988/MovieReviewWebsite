<?php
include 'core/init.php';

if(empty($_POST)==false){
	$username=$_POST['username'];
	$password=$_POST['password'];

//	if(empty($username) || empty($password)){
//		$errors[]='You need to enter a username and password';
//	}
	 if (user_exists($username)===false) {
		echo '<script type="text/javascript">alert("This username does not exist.");</script>';
		header("refresh: 0; url=index.php?");
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