<?php 
	session_start();

	include_once 'config.php';

	$user = $_POST['username'];
	$pass = md5($_POST['password']);

	$SQL = "SELECT * FROM login WHERE username = '{$user}'";
	$result = mysql_query($SQL);

	if (mysql_num_rows($result) == 1) {
		$data =mysql_fetch_array($result);

		if($pass == $data['password']) {
			$_SESSION['userdata'] = $data;
			header("location: dashboard.php");
		} else {
			header("location: login.php");
		}
	} else {
		header("location: login.php");
	}
?>