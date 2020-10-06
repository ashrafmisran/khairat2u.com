<?php
session_start();
include 'connect.php';


function recordlog($action, $detail){
	global $conn;
	global $_SESSION;

	$user = $_SESSION['user']['id'];

	$sql = "INSERT INTO logs (user,action,detail) VALUES ('$user','$action','$detail')";
	$run = $conn->query($sql);

	if ($run != FALSE) {
		$run = TRUE;
	}

	return $run;
}



include_once 'classes/user.php';