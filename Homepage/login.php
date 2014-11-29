<?php
session_start();

function check_password($username, $password) {

  return true;
}

$username = $_GET['username'];
$password = $_GET['password'];

if (check_password($username, $password)) {
  header('Content-type: application/json');

  // Generate authorization cookie
  $_SESSION['username'] = $username;
  $_SESSION['authsalt'] = time();

  $auth_cookie_val = md5($_SESSION['username'] . $_SERVER['REMOTE_ADDR'] . $_SESSION['authsalt']);

  setcookie('MovieReviewAUTH', $auth_cookie_val, 0, '/Courses/comp426-f12/kmp/lec24', 'wwwp.cs.unc.edu', true);
  
  print(json_encode(true));

} else {
  unset($_SESSION['username']);
  unset($_SESSION['authsalt']);

  header('HTTP/1.1 401 Unauthorized');
  header('Content-type: application/json');
  print(json_encode(false));
}