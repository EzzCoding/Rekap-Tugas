<?php
	$POST = $_POST;
	// echo "Nama : " .$input['nama'] ."<br>";
	// echo "Alamat : " .$input['alamat'] ."<br>";
	// echo "Nomor Telp : " .$input['telp'] ."<br>";
	// echo "Jenis Kelamin : " .$input['jk'] ."<br>";
	// echo "Hoby : " .$input['hoby'];

	$Rata = 0;
	$JumlahNilai = count($POST['nilai']);

	for ($i=0; $i<$JumlahNilai; $i++) { 
		$Rata = $Rata + $POST['nilai'][$i];
	}

	//Sum Array
	$totalArray = array_sum($POST['nilai']);

	echo "Rata-rata nilai keseluruhan : " .($totalArray/$JumlahNilai);
?>