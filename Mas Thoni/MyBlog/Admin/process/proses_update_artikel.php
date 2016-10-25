<?php
	session_start();
	include '../../assets/config.php';
	include '../../models/Model_Artikel.php';

	use models\_model_artikel\Model_Artikel as Artikel;

	$artikel = new Artikel;

	if (isset($_SESSION['username'])) {
		if (isset($_POST)) {
			$POST = $_POST;

			$data['id_author'] = $_SESSION['id_author'];
			$data['judul_artikel'] = $POST['judul_artikel'];
			$data['isi_artikel'] = $POST['isi_artikel'];
			$data['id_kategori'] = $POST['kategori'];
			$data['tgl_upload'] = 'NOW()';

			$id_artikel = $POST['id_artikel'];

			if ($_FILES['foto_profil']['name'] != "") {
				$folder = '../../assets/img/';
				$folderfile = $folder .$_FILES['gambar_artikel']['name'];

				if (move_uploaded_file($_FILES['gambar_artikel']['tmp_name'], $folderfile)) {
					$data['gambar_artikel'] = $_FILES['gambar_artikel']['name'];

					$result = $artikel->UPDATE($data, $id_artikel);
					if ($result) {
						echo '<script type="text/javascript">alert("Artikel berhasil diupdate");location.href = "../artikel.php";</script>';
					}
				} else {
					echo '<script type="text/javascript">alert("File Gagal diupload");location.href = "../tambah_artikel.php";</script>';
				}
			} else {
				echo '<script type="text/javascript">alert("Gambar Artikel Harus diisi");location.href = "../tambah_artikel.php";</script>';
			}
		}
	}
?>