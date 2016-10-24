<?php
	session_start();
	include '../../assets/config.php';
	include '../../models/Model_Kategori.php';

	use models\_model_kategori\Model_Kategori as Kategori;

	$kategori = new Kategori;

	if (isset($_SESSION['username'])) {
		if (isset($_POST)) {
			$POST = $_POST;

			$data['nama_kategori'] = $POST['nama_kategori'];
			$result = $kategori->INSERT($data);
			if ($result) {
				echo '<script type="text/javascript">alert("Kategori Berhasil ditambahkan");location.href = "../kategori.php";</script>';
			}
		}
	}
?>