<?php session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
	$_SESSION['error_msg'] = "Login first!";
	header("Location: \Try 02\login_section2.php");
	exit();
}
?>