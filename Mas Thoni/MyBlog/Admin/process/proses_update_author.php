<?php
	session_start();
	include '../../assets/config.php';
	include '../../models/Model_Author.php';

	use models\_model_author\Model_Author as Author;

	$author = new Author;

	if (isset($_SESSION['username'])) {
		if (isset($_POST)) {
			$POST = $_POST;

			$id_author = $_SESSION['id_author'];

			$data['nama'] = $POST['nama'];
			$data['deskripsi'] = $POST['deskripsi_author'];

			if ($_FILES['foto_profil']['name'] != "") {
				$folder = '../../assets/img/';
				$folderfile = $folder .$_FILES['foto_profil']['name'];

				if (move_uploaded_file($_FILES['foto_profil']['tmp_name'], $folderfile)) {
					$data['foto'] = $_FILES['foto_profil']['name'];

					$result = $author->UPDATE($data, $id_author);
					if ($result) {
						$data_author = $author->SELECT_BY_ID($id_author);

						$_SESSION['nama'] = $data_author['nama'];
						$_SESSION['foto'] = $data_author['foto'];
						$_SESSION['deskripsi'] = $data_author['deskripsi'];
						echo '<script type="text/javascript">alert("Data Author berhasil diupdate");location.href = "../home.php";</script>';
					}
				} else {
					echo '<script type="text/javascript">alert("File Gagal diupload");location.href = "../author.php";</script>';
				}
			} else {
				$result = $author->UPDATE($data, $id_author);
				if ($result) {
					$data_author = $author->SELECT_BY_ID($id_author);

					$_SESSION['nama'] = $data_author['nama'];
					$_SESSION['foto'] = $data_author['foto'];
					$_SESSION['deskripsi'] = $data_author['deskripsi'];
					echo '<script type="text/javascript">alert("Data Author berhasil diupdate");location.href = "../home.php";</script>';
				}
			}
		}
	}
?>