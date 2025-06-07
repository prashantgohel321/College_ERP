<?php session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) { // no data / not true
	$_SESSION['error_msg'] = "Login first!";
	header("Location: login_section2.php");
	exit();
}
?>