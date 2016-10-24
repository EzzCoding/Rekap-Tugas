<?php
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'blog';

	$conn = mysql_connect($host, $username, $password);

	mysql_select_db($db, $conn);
?>