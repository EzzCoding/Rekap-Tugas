<?php

	include 'interface.php';
	include 'class.php';
	include 'Twitter.php';
	include 'Facebook.php';
	include 'GooglePlus.php';

	use _class\Medsos as Medsos;
	use facebook\Facebook as Facebook;
	use twitter\Twitter as Twitter;
	use googlePlus\GooglePlus as GooglePlus;

	$Facebook = new Facebook;
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->Like();
	$Facebook->totalLike();

	$Twitter = new Twitter;
	$Twitter->Like();
	$Twitter->Like();
	$Twitter->Like();
	$Twitter->Like();
	$Twitter->Like();
	$Twitter->Like();
	$Twitter->Like();
	$Twitter->totalLike();

	$GooglePlus = new GooglePlus;
	$GooglePlus->Like();
	$GooglePlus->Like();
	$GooglePlus->Like();
	$GooglePlus->Like();
	$GooglePlus->Like();
	$GooglePlus->Like();
	$GooglePlus->Like();
	$GooglePlus->totalLike();

	$Medsos = new Medsos;
	$Medsos->compareMedsos($Facebook, $Twitter, $GooglePlus);
?>