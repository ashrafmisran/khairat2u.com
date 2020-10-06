<?php

include_once 'function.php';

$s = $_POST; // alias
$email		= $s['email'];
$password	= crypt( $s['password'] , 'istiqamah');

$sql = "SELECT id,fullname FROM users WHERE email = '$email' AND password = '$password'";

$run = $conn->query($sql);
if ($run->num_rows > 0) {
	$_SESSION['user']['id'] = $conn->insert_id;
	$_SESSION['user']['fullname'] = $fullname;
	header('Location: index.php');
}else{
	$_SESSION['noti'] = $failure_msg;
}

?>