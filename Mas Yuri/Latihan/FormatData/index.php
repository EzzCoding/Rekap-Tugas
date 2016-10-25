<?php
	// $data["mobil"]["sedan"][0] = "city";
	// $data["mobil"]["sedan"][1] = "civic";
	// $data["mobil"]["suv"][0] = "fortuner";
	// $data["mobil"]["suv"][1] = "pajero";
	// $data["mobil"]["minibus"][0] = "grandmax";
	// $data["mobil"]["minibus"][1] = "alphard";

	// echo "<pre>";
	// print_r($data);

	// $dataJSON = base64_encode(json_encode($data));
?>

<!-- <a href="ambildata.php?data=<?php echo $dataJSON; ?>">Kirim</a> -->



<?php
//------------------------------------------
	$dataKota = '{
		"data_kota" : [
			{
				"id" : 1,
				"nama" : "Malang"
			},
			{
				"id" : 2,
				"nama" : "Nganjuk"
			},
			{
				"id" : 3,
				"nama" : "Blitar"
			}
		],

		"data_pegawai" : [
			{
				"id" : 1,
				"nama" : "Achmad Chadil Auwfar",
				"jenis_kelamin" : "Laki"
			},
			{
				"id" : 2,
				"nama" : "Redika Angga Pratama",
				"jenis_kelamin" : "Laki"
			},
			{
				"id" : 3,
				"nama" : "Antony Febriansyah H",
				"jenis_kelamin" : "Laki"
			},
			{
				"id" : 4,
				"nama" : "Wirda Salamah Ulya",
				"jenis_kelamin" : "Perempuan"
			}
		]
	}';

	$dataKotaObject = json_decode($dataKota);
	echo "<pre>";
	print_r($dataKotaObject);

	echo $dataKotaObject->data_pegawai[3]->nama;
?>