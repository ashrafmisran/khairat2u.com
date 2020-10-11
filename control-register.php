<?php

include_once 'function.php';

$s = $_POST; // alias
$fullname	= htmlspecialchars( $s['fullname'] );
$no_ahli	= htmlspecialchars( $s['no-ahli' )];
$mykad		= htmlspecialchars( $s['mykad'] );
$kawasan	= htmlspecialchars( $s['kawasan'] );
$email		= htmlspecialchars( $s['email'] );
$password	= crypt( htmlspecialchars( $s['password'] ) , 'istiqamah');

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