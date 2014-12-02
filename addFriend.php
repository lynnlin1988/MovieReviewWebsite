<?php
include 'core/init.php';

$userID1=$_SESSION['user_id'];
$username1=username_from_id($userID1);
$userID2=$_GET["bID"];
$username2=username_from_id($userID2);

if(isFriend($userID1, $userID2)==true){
	echo '<script type="text/javascript">alert("You are already friends");</script>';
	header("refresh: 0; url=viewpersonalPage.php?b_tmp=".$userID2."");
} else {
	$addFriend = addFriend($userID1,$userID2);
	echo '<script type="text/javascript">alert("You are now friends");</script>';
	header("refresh: 0; url=viewpersonalPage.php?b_tmp=".$userID2."");
}



?>