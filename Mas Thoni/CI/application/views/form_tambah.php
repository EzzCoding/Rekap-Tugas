<!-- Jika untuk src="/........" -> menggunakan base_url
jika untuk aksi -> menggunakan site_url -->

<!DOCTYPE html>
<html>
	<head>
		<title>Form Tambah</title>
	</head>
	<body>
		<form action="<?php echo site_url('Belajar/tambahData'); ?>" method="POST">
			Nama <input type="text" name="nama">
			Alamat <input type="text" name="alamat">
			<input type="submit" name="Tambah">
		</form>

		<?php
			if (isset($nama)) {
				echo "<hr>";
				echo "Nama : " .$nama ."<br>";
				echo "Alamat : " .$alamat ."<br>";
			}
		?>
	</body>
</html>