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

			if (isset($_FILES)) {
				$folder = '../../assets/img/';
				$folderfile = $folder .$_FILES['gambar_artikel']['name'];

				if (move_uploaded_file($_FILES['gambar_artikel']['tmp_name'], $folderfile)) {
					$data['gambar_artikel'] = $_FILES['gambar_artikel']['name'];
					$result = $artikel->INSERT($data);
					if ($result) {
						echo '<script type="text/javascript">alert("Artikel berhasil diposting");location.href = "../artikel.php";</script>';
					}
				} else {
					echo "File gagal diupload";
				}
			}
		}
	}
?>