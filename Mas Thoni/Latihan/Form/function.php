<?php
	function tambah($nilai1, $nilai2) {
		$Total = $nilai1 + $nilai2;

		echo $Total;
	}

	//Kalau tidak menggunakan value, maka untuk menampilkan, hanya dengan memanggil fungsi tanpa echo
	function tampil() {
		echo "Ini Tanpa Return";
	}

	//Kalau menggunakan return, maka untuk menampilkan value harus menggunakan echo. / bisa dibilang fungsi akan menjadi variabel
	function tampil2() {
		return "Ini Menggunakan Return";
	}

	function ubahTempe($str) {
		echo "<br>" .$str ." dan tahu";
	}

	function kali($nilai) {
		$total = $nilai * 2;
		return $total;
	}

	function tampilkanKali($hasil) {
		echo "Hasil akhir adalah = " .$hasil;
	}

	tampil();
	echo "<br>";
	echo tampil2();

	$str = "Joni makan tempe";
	ubahTempe($str);
	
	$nilai1 = 10;
	$hasil = kali($nilai1);
	echo "<br>";
	echo "<br>";
	echo "Nilai dari function kali() = " .$hasil ."<br>";
	echo "" .tampilkanKali($hasil);
?>