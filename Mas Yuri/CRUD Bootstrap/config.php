<?php
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$db = 'cendana';

	$conn = mysql_connect($host, $username, $password);

	mysql_select_db($db, $conn);
?>