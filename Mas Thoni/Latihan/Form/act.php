<?php
	// $input = $_POST;
	// echo "<pre>";
	// print_r($input);
	// $input['nama'];

	$POST = $_POST;
	echo "<pre>";
	print_r($POST);
	echo $POST['nama'][0] ." " .$POST['nama'][1];
?>