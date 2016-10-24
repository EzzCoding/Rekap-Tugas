<?php
	session_start();
	include '../../assets/config.php';
	include '../../models/Model_Artikel.php';

	use models\_model_artikel\Model_Artikel as Artikel;

	$artikel = new Artikel;

	if (isset($_SESSION['username'])) {
		if (isset($_POST)) {
			$POST = $_POST;

			$id = $POST['id'];

			$result = $artikel->DELETE($id);

			// if ($result) {
			// 	header("location: ../../Admin/artikel.php");
			// }
		}
	}
?>