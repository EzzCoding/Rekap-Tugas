<?php
	// class partai {
	// 	var $partai = [
	// 	  		'pdi' => 0,
	// 	  		'pkb' => 0,
	// 	  		'ppp' => 0,
	// 	  		'hanura' => 0,
	// 	  		'golkar' => 0,
	// 	  	];

	// 	function voting($pilih) {
	// 		foreach ($this->partai as $key => $value) {
	// 			if ($key == $pilih) {
	// 				$this->partai[$key] = $value + 1;
	// 			}
	// 		}
	// 	}

	// 	function hasil() {
	// 		echo "<pre>";
	// 		print_r($this->partai);
	// 	}
	// }

	// $partai = new partai();
	// $partai->voting('pdi');
	// $partai->voting('golkar');
	// $partai->voting('pdi');
	// $partai->voting('golkar');
	// $partai->voting('pdi');
	// $partai->hasil();

echo "Are you sure you want to do this?  Type 'yes' to continue: ";
$handle = fopen ("php://stdin","r");
$line = fgets($handle);
if(trim($line) != 'yes'){
    echo "ABORTING!\n";
    exit;
}
fclose($handle);
echo "\n"; 
echo "Thank you, continuing...\n";
?>