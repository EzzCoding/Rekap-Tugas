<?php
	$arrM = [
		["Buku A1", "Buku B1", "Buku C1"],
		["Buku A2", "Buku B2", "Buku C2", "Buku D2"],
		["Buku A3", "Buku B3", "Buku C3", "Buku D3", "Buku E3"],
		["Buku A4", "Buku B4", "Buku C4", "Buku D4", "Buku E4", "Buku F4"],
		["Buku A5", "Buku B5", "Buku C5", "Buku D5", "Buku E5", "Buku F5", "Buku G5"]
	];
	$JmlArrParent = count($arrM);

	for ($i=0; $i<$JmlArrParent; $i++) { 
		$JmlArrChild = count($arrM[$i]);

		echo "Array Parent Index ke - " .$i ."\n";
		for ($j=0; $j < $JmlArrChild; $j++) { 
			echo "   Mempunyai Value = " .$arrM[$i][$j] ."\n";
		}
		echo "\n";
	}

	// for ($i=0; $i<count($arrM); $i++) { 
	// 	echo implode(" ", $arrM[$i]);
	// 	echo "\n";
	// }
?>