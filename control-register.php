<?php

include_once 'function.php';

$s = $_POST; // alias
$fullname	= $s['fullname'];
$no_ahli	= $s['no-ahli'];
$mykad		= $s['mykad'];
$kawasan	= $s['kawasan'];
$email		= $s['email'];
$password	= crypt( $s['password'] , 'istiqamah');

$sql = "INSERT INTO users (fullname,no_ahli,mykad,kawasan,email,password) VALUES ('$fullname','$no_ahli','$mykad',$kawasan,'$email','$password')";

$run = $conn->query($sql);
if ($run != FALSE) {
	$_SESSION['user']['id'] = $conn->insert_id;
	$_SESSION['user']['fullname'] = $fullname;
	header('Location: index.php?p=profile');
}else{
	$_SESSION['noti'] = $failure_msg;
}

?>