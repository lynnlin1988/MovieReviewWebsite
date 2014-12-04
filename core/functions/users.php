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

function username_from_id($userID){
	return mysql_result(mysql_query("SELECT Username FROM a6_user WHERE ID='$userID'"), 0);
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

function addFriend($userID1, $userID2){
	$mysql1=mysql_query("INSERT INTO a6_friend (UserAID, UserBID) VALUES ('$userID1', '$userID2')");
	$mysql2=mysql_query("INSERT INTO a6_friend (UserAID, UserBID) VALUES ('$userID2', '$userID1')");
	return true;
}

function isFriend($userID1, $userID2){
	$query=mysql_query("SELECT COUNT(*) FROM a6_friend WHERE UserAID = '$userID1' AND UserBID='$userID2'");
	return (mysql_result($query, 0)==1 ) ? true : false;
}

function updateProfile($country, $summary, $email){
	$userID=$_SESSION['user_id'];
	$mysql=mysql_query("UPDATE a6_user SET Email='$email', Country='$country', Summary='$summary' WHERE ID='$userID'");
	return true;
}

function contactUs($email, $content, $username){
	$userID=user_id_from_username($username);
	$mysql=mysql_query("INSERT INTO a6_contactus (Email, UserID, Content) VALUES ('$email', '$userID', '$content')");
	return true;
}

function searchCount($search){
	$mysql=mysql_query("SELECT COUNT(*) FROM a6_movie WHERE Title LIKE '%$search%'");
	return mysql_result($mysql, 0);
}

function search($search, $row){
	$mysql=mysql_query("SELECT Title FROM a6_movie WHERE Title LIKE '%$search%'");
	return mysql_result($mysql, $row);
}

function movie_id_from_title($title){
	return mysql_result(mysql_query("SELECT ID FROM a6_movie WHERE Title='$title'"), 0);
}



?>