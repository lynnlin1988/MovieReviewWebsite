<?php
include 'core/init.php';

$country=$_POST['country'];
$summary=$_POST['summary'];
$email=$_POST['email'];


$profile = updateProfile($country, $summary, $email);
echo '<script type="text/javascript">alert("Your profile is successfully changed!");</script>';
header("refresh: 0; url=personalPage.php");



//print_r($errors);

?>