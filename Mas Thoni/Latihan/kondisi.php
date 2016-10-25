<?php
	//if
	$var = 9;
	if ($var < 10) {
		echo "Bad";
	}

	//If Else
	echo "\n";
	if ($var >= 10) {
		echo "Good";
	} else {
		echo "Bad";
	}

	//If Elseif
	echo "\n";
	if ($var == 7) {
		echo $var;
	} elseif($var >= 6 && $var <= 10) {
		echo "Angka Disini";
	} elseif($var > 7) {
		echo "Great";
	} else {
		echo "Bad";
	}

	//Switch Case
	echo "\n";
	switch ($var) {
		case 1:
			echo $var;
			break;

		case 2:
			echo $var;
			break;

		case 3:
			echo $var;
			break;
		
		default:
			echo "Ini Default";
			break;
	}
?>