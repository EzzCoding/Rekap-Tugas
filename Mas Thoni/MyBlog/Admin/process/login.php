<?php
	session_start();
	include '../../assets/config.php';
	include '../../models/Model_Auth.php';

	use models\_model_auth\Model_Auth as Auth;

	$auth = new Auth;

	if (isset($_POST)) {
		$data['username'] = $_POST['username'];
		$data['password'] = md5($_POST['password']);

		$result = $auth->LOGIN($data);

		if (count($result) != 0) {
			foreach ($result as $value) {
				$_SESSION['id_author'] = $value['id_author'];
				$_SESSION['username'] = $value['username'];
				$_SESSION['nama'] = $value['nama'];
				$_SESSION['deskripsi'] = $value['deskripsi'];
				$_SESSION['foto'] = $value['foto'];
			}
			header('location: ../Home.php');
		} else {
			header('location: ../index.php');
		}
	}
?>