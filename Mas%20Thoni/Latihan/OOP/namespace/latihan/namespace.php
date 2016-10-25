<?php namespace running;

	include 'file1.php';
	include 'file2.php';
	// include 'file3.php';
	include 'file4.php';
	include 'lib/file5.php';

	use foo as veline;
	// use foo2 as veline2;
	// use bar as bro;
	// use animate;
	// use lib\man as man;

	$Cat = new veline\Cat;
	// $Cat2 = new veline2\Cat;
	// $Woman = new man\Woman;

	echo $Cat->Says();
	echo $Cat::Eat();
	// echo $Cat2->Says();
	// echo bro\Dog::Says();
	// echo animate\Animal::Breathe();
	
	// echo $Woman::Walk();
?>