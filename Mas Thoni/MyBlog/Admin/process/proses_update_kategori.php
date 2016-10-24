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
			$id_kategori = $POST['id_kategori'];

			$result = $kategori->UPDATE($data, $id_kategori);
			if ($result) {
				echo '<script type="text/javascript">alert("Kategori berhasil diupdate");location.href = "../kategori.php";</script>';
			}
		}
	}
?>