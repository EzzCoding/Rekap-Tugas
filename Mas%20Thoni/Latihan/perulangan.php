<?php
	//perulangan menggunakan for
	//Increment
	for ($i = 0; $i <= 10; $i++) { 
		echo $i ."\n";
	}

	echo "\n";

	//Decrement
	for ($i=10; $i > 0; $i--) { 
		echo $i ."\n";
	}

	echo "\n";

	//Perulangan Kondisi
	for ($i = 0; $i <= 10; $i++) { 
		if ($i > 5) {
			echo $i ."\n";
		}
	}

	echo "\n";

	for ($i = 0; $i <= 10; $i++) { 
		if ($i == 5) {
			for ($j=1; $j<=3; $j++) { 
				echo "Perulangan J = " .$j;
				echo "\n";
			}
		} else {
			echo "Perulangan I = " .$i;
			echo "\n";
		}
	}
?>