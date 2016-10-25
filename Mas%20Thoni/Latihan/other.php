<?php
	function searchArray($arr, $input) {
		$arr_out = [];
		foreach ($arr as $key => $value) {
			for ($i=0; $i<strlen($key); $i++) {
				for ($j=0; $j<(strlen($key)-1); $j++) { 
					$cek = substr($key, $j, strlen($input));
					if ($cek == $input) {
						if (! in_array($key, $arr_out)) {
							$arr_out[$key] = $value;
						}
					}
				}
			}
		}

		$no = 1;
		foreach ($arr_out as $key_out => $value_out) {
			echo $no .". " .$key_out ." - " .$value_out ."<br>";
			$no++;
		}
	}

	$input = 'al';

	$arr = [
		'badak' => 1,
		'singa' => 2,
		'kuda' => 3,
		'kucing' => 4,
		'cacing' => 5,
		'lalat' => 6
	];

	searchArray($arr, $input);

	//---------------------------------------------
	// function searchArray($arr, $input) {
	// 		$arr_out = [];
	// 	foreach ($arr as $key => $value) {
	// 		for ($i=0; $i<strlen($value); $i++) {
	// 			for ($j=0; $j<(strlen($value)-1); $j++) { 
	// 				$cek = substr($value, $j, strlen($input));
	// 				if ($cek == $input) {
	// 					if (! in_array($value, $arr_out)) {
	// 						array_push($arr_out, $value);
	// 					}
	// 				}
	// 			}
	// 		}
	// 	}

	// 	echo "<pre>";
	// 	print_r($arr_out);
	// }

	// $input = 'badak';

	// $arr = [
	// 	'badak',
	// 	'singa',
	// 	'kuda',
	// 	'kucing',
	// 	'cacing',
	// 	'lalat'
	// ];

	// searchArray($arr, $input);
	
	//---------------------------------------------
	// function checkChild($arr) {
	// 	foreach ($arr as $key => $value) {
	// 		$arrChild = [];
	// 		foreach ($arr[$key] as $key2 => $value2) {
	// 			$arrChild[$key][$key2] = [];
	// 			if (count($value2) == 0) {
	// 				$arr[$key][$key2] = $arrChild;
	// 			}
	// 		}
	// 	}	

	// 	echo "<pre>";
	// 	print_r($arr);
	// }

	// $arr = [
	// 	'a' => [
	// 		'child' => []
	// 	],
	// 	'b' => [
	// 		'child' => []
	// 	]
	// ];

	// checkChild($arr);

	//---------------------------------------------

	// function UbahArray($arr) {
	// 	$Sum = 0;
	// 	foreach ($arr['Nilai'] as $keySum => $valueSum) {
	// 		$Sum = $Sum + $valueSum;
	// 	}
	// 	foreach ($arr as $key1 => $value1) {
	// 		foreach ($arr[$key1] as $keyNama => $valueNama) {
	// 			if ($key1 == 'Nilai') {
	// 				$Nilai = $valueNama / $Sum;
	// 				$arr_out[$keyNama][$key1] = round($Nilai, 2);
	// 			} else {
	// 				$arr_out[$keyNama][$key1] = $valueNama;
	// 			}
	// 		}
	// 	}

	// 	echo "<pre>";
	// 	print_r($arr_out);
	// }

	// $arr = [
	// 	'Alamat' => [
	// 		'Budi' => 'Kalimantan',
	// 		'Thoni' => 'Malang',
	// 		'Jarwo' => 'Surabaya'
	// 	],
	// 	'Hobi' => [
	// 		'Thoni' => 'SepakBola',
	// 		'Jarwo' => 'Nonton TV',
	// 		'Budi' => 'Baca Buku'
	// 	],
	// 	'Nilai' => [
	// 		'Thoni' => 80,
	// 		'Jarwo' => 90,
	// 		'Budi' => 40
	// 	]
	// ];

	// UbahArray($arr);

	//---------------------------------------------
	// function UbahArray($nilaiArr) {
	// 	$arr_out = [];

	// 	foreach ($nilaiArr as $keyNama => $valueNama) {
	// 		$arr_out[$valueNama] = [];
	// 	}

	// 	foreach ($nilaiArr as $key => $value) {
	// 		array_push($arr_out[$value], $key);
	// 	}
		
	// 	echo "<pre>";
	// 	print_r($arr_out);
	// }

	// $arr = [
	// 	'Piring' => 'Budi',
	// 	'Sendok' => 'Seno',
	// 	'Gelas' => 'Budi'
	// ];

	// UbahArray($arr);

	// function UbahArray($arr) {
	// 	foreach ($arr as $key1 => $value1) {
	// 		foreach ($arr[$key1] as $keyNama => $valueNama) {
	// 			$arr_out[$keyNama][$key1] = $valueNama;
	// 		}
	// 	}

	// 	echo "<pre>";
	// 	print_r($arr_out);
	// }

	// $arr = [
	// 	'Alamat' => [
	// 		'Budi' => 'Kalimantan',
	// 		'Thoni' => 'Malang',
	// 		'Jarwo' => 'Surabaya'
	// 	],
	// 	'Hobi' => [
	// 		'Thoni' => 'SepakBola',
	// 		'Jarwo' => 'Nonton TV',
	// 		'Budi' => 'Baca Buku'
	// 	]
	// ];

	// UbahArray($arr);

	//---------------------------------------------
	// function UbahKalimat($kalimat) {
	// 	$arr = explode(" ", $kalimat);
	// 	$Kalimat_Jadi = "";

	// 	foreach ($arr as $key => $value) {
	// 		$Kalimat_Jadi = $Kalimat_Jadi ." " .ucfirst($value);
	// 	}

	// 	echo $Kalimat_Jadi;
	// }

	// $kalimat = "Budi pergi ke sekolah menggunakan becak";
	// UbahKalimat($kalimat);
?>