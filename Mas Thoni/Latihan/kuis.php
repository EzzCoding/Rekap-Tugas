<?php

	$arr = [
		'nama' => ['Thoni', 'Andik', 'Wawan'],
		'nun' => [30, 28.5, 27],
		'kelas' => ['A', 'B', 'C'],
		'keterangan' => 'Semua siswa dinyatakan lolos.'
	];

	// echo "SMA NEGERI XXX Malang memiliki siswa sebagai berikut : " ."\n" ;
	// for ($i=0; $i<count($arr['nama']); $i++) { 
	// 	echo ($i+1) .". " .$arr['nama'][$i] ."\n";
	// }

	// echo "masing masing mendapatkan nilai UN sebagai berikut : " ."\n";
	// for ($i=0; $i<count($arr['nun']); $i++) { 
	// 	echo ($i+1) .". " .$arr['nun'][$i] ."\n";
	// }

	// echo "dengan demikian " .$arr['keterangan'];

	echo "hasil ujian Nasional SMA NEGERI XXX Malang adalah sebagai berikut : \n";

	// foreach ($arr['nama'] as $key => $value) {
	// 	echo $no1 .". Nama      : " .$value ."\n";
	// 	echo "   Kelas     : " .$arr['kelas'][$key] ."\n";
	// 	echo "   Nilai     : " .$arr['nun'][$key] ."\n";

	// 	$no1++;
	// }

	// for ($i=0; $i<count($arr['nama']); $i++) {
	// 	echo ($i+1) .". Nama     : " .$arr['nama'][$i] ."\n";
	// 	echo "   Kelas    : " .$arr['kelas'][$i] ."\n";
	// 	echo "   Nilai    : " .$arr['nun'][$i] ."\n";
	// }

	//lebih Dinamis
	$no1 = 1;
	for ($i=0; $i < 3; $i++) {
		echo $no1 .". ";
		foreach ($arr as $key => $value) {
			if ($key != 'keterangan') {
				echo $key ."     : " .$arr[$key][$i] ."\n";
			}
		}
		$no1++;
	}






































	
	// $var = "Hello World";

	// $var2 = substr($var, 6);
	// echo lcfirst(strtoupper($var2));

	// $var = "Hello World";

	// $var2 = substr($var, 2, 7);
	// echo ucfirst($var2);

	// $var = "Umur Saya 18.9 tahun";

	// $umur = substr($var, 10, 4);

	// $Total = pow($umur * 3, 2);

	// echo ceil($Total);

	// $var = "Umur Saya 18 tahun";
	// $umur = substr($var, 10, 2);
	// if ($umur % 2 != 0) {
	// 	echo $umur ." adalah ganjil";
	// } else {
	// 	echo $umur ." adalah genap";
	// }

	// $var = "Saya punya anjing 1 dan kucing 2";
	// $anjing = substr($var, 18, 1);
	// $kucing = substr($var, 31, 1);
	// $kalimat1 = substr($var, 11, 12);
	// $kalimat2 = substr($var, 24, 9);
	// $total = $anjing + $kucing;

	// echo ucfirst($kalimat1) ." " .ucfirst($kalimat2) ." = " .$total;

	// for ($i=1; $i <=10; $i++) { 
	// 	if ($i%2 != 0) {
	// 		echo $i ." - Ganjil";
	// 		echo "\n";
	// 		for ($j=1; $j<=3; $j++) { 
	// 			echo "Ganjil - " .$j;
	// 			echo "\n";
	// 		}
	// 	} else {
	// 		echo $i ." - Genap";
	// 		echo "\n";
	// 	}
	// }

	// for ($i=1; $i<=10; $i++) { 
	// 	echo $i ." -";
	// 	if($i%3 == 0) {
	// 		echo " Ciyee";
	// 	}

	// 	if ($i%2 == 0) {
	// 		echo " Horeeee";
	// 	}
	// 	echo "\n";
	// }

	// $nama = [
	// 	"Thoni",
	// 	"Budi",
	// 	"Anto",
	// 	"Joko",
	// 	"Andik"
	// ];
	// $benda = [
	// 	"Piring",
	// 	"Gelas",
	// 	"Sendok"
	// ];

	// echo $nama[0] ." membawa " .$benda[0] ." dan " .$benda[1] ." Sedangkan " .$nama[3] ." membawa " .$benda[2] ." bersama " .$nama[1] .", " .$nama[2] ." dan " .$nama[4];

	// for ($i=0; $i<$jmlarr; $i++) { 
	// 	if ($i>0 && $i<=3) {
	// 		echo $ar1[$i] ."\n";
	// 	}
	// }
?>