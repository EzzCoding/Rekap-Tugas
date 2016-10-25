<?php 
	// print_r($_POST);

	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "cendana";

	$conn = mysql_connect($host, $username, $password);

	mysql_select_db($db, $conn);

	$POST = $_POST;

	$nama = $POST['nama'];
	$kota = $POST['kota'];

	// echo "Halo " .$nama ." dari " .$kota;
	$SQL = "INSERT INTO calon_pegawai(nama, kota) VALUES('{$nama}', '{$kota}')";
	$result = mysql_query($SQL);


	// $angkaPertama = $POST['angkaPertama'];
	// $angkaKedua = $POST['angkaKedua'];
	// $total = $angkaPertama + $angkaKedua;

	// echo "\n";
	// echo "Hasil Penjumlahan $angkaPertama + $angkaKedua = {$total}";
?>