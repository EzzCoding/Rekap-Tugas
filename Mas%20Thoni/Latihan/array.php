<?php
	$ar1 = [
		"Buku 1",
		"Buku 2",
		"Buku 3",
		"Buku 4",
		"Buku 5",
		"Buku 6",
		"Buku 7"
	];

	$jmlArr = count($ar1);

	echo $ar1[0] ." " .$ar1[1] ." " .$ar1[2];
	echo "\n\n";
	for ($i=0; $i<$jmlArr; $i++) { 
		echo "Value Buku ke-" .($i+1) ." Adalah " .$ar1[$i] ."\n";
	}
?>