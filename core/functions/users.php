<?php
function logged_in(){
	return (isset($_SESSION['user_id'])) ? true:false;
}


function user_exists($username){
	$username=sanitize($username);
	$query=mysql_query("SELECT COUNT(*) FROM a6_user WHERE Username = '$username'");

	return (mysql_result($query, 0)==1) ? true : false;
}

function user_id_from_username($username){
	$username = sanitize($username);
	return mysql_result(mysql_query("SELECT ID FROM a6_user WHERE Username='$username'"), 0, ID);
}

function login($username, $password){
	$userID=user_id_from_username($username);

	$username=sanitize($username);
	$password=md5($password);
	$query=mysql_query("SELECT COUNT(*) FROM a6_user WHERE Username='$username' AND Password = '$password'");
	return (mysql_result($query, 0)==1 ) ? $userID : false;
}

function register($username, $password, $email){
	$password=md5($password);
	$mysql=mysql_query("INSERT INTO a6_user (Username, Password, Email) VALUES ('$username', '$password', '$email')");
	$userID=user_id_from_username($username);
	return $username;
}


?>