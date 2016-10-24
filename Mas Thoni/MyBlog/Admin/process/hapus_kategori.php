<?php
	session_start();
	include '../../assets/config.php';
	include '../../models/Model_Kategori.php';

	use models\_model_kategori\Model_Kategori as Kategori;

	$kategori = new Kategori;

	if (isset($_SESSION['username'])) {
		if (isset($_POST)) {
			$POST = $_POST;

			$id = $POST['id'];

			$result = $kategori->DELETE($id);

			// if ($result) {
			// 	header("location: ../../Admin/kategori.php");
			// }
		}
	}
?>