<?php
	session_start();

	include_once '../../assets/config.php';
	include '../../models/Model_Artikel.php';

	use models\_model_artikel\Model_Artikel as Artikel;

	$artikel = new Artikel();

	if ($_POST['search'] != "") {
		$data_artikel = $artikel->LIKE($_POST['search'], $_SESSION['id_author']);
	} else {
		$data_artikel = $artikel->SELECT_ALL_JOIN_A($_SESSION['id_author']);
	}

	$no = 1;
	foreach ($data_artikel as $value) {
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td>
				<img src="../assets/img/<?php echo $value['gambar_artikel']; ?>" style="width:200px;">
			</td>
			<td><?php echo $value['tgl_upload']; ?></td>
			<td><?php echo $value['judul_artikel']; ?></td>
			<td><?php echo substr($value['isi_artikel'], 0, 200); ?>...</td>
			<td><?php echo $value['jumlah_view']; ?></td>
			<td><?php echo $value['kategori']; ?></td>
			<td><?php echo $value['author']; ?></td>
			<td style="text-align: center;">
				<a href="update_artikel.php?id=<?php echo $value['id_artikel'] ?>">
					<button class="form-control btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Update</button>
				</a>
					<button class="form-control btn btn-danger hapus-artikel" data-id="<?php echo $value['id_artikel'] ?>" onclick="return confirm('Anda yakin menghapus ID ini?');"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
				<a href="../content.php?id=<?php echo $value['id_artikel'] ?>" target="_blank">
					<button class="form-control btn btn-info"><i class="glyphicon glyphicon-info-sign"></i> Lihat</button>
				</a>
			</td>
		</tr>
		<?php
		$no++;
	}
?>