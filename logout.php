<?php
session_start();
unset($_SESSION['email']);
	$_SESSION['msg'] = 'Logged out succesfully';
	$_SESSION['email']="";
header('Location: index2.html');
?>