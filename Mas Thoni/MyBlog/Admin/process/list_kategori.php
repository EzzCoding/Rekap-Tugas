<?php
	include_once '../../assets/config.php';
	include '../../models/Model_Artikel.php';
	include '../../models/Model_Kategori.php';

	use models\_model_artikel\Model_Artikel as Artikel;
	use models\_model_kategori\Model_Kategori as Kategori;

	$artikel = new Artikel();
	$kategori = new Kategori();

	if ($_POST['search'] != "") {
		$data_kategori = $kategori->LIKE($_POST['search']);
	} else {
		$data_kategori = $kategori->SELECT_ALL();
	}

	$no = 1;
	foreach ($data_kategori as $value) {
		$data_artikel_by_kt = $artikel->SELECT_COUNT_BY_KATEGORI($value['id_kategori']);
		?>
		<tr>
			<td><?php echo $no; ?></td>
			<td><?php echo $value['nama_kategori']; ?></td>
			<td><?php echo $data_artikel_by_kt['jumlah_artikel']; ?></td>
			<td style="text-align: center;">
				<a href="update_kategori.php?id=<?php echo $value['id_kategori'] ?>">
					<button class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Update</button>
				</a>
					<button class="btn btn-danger hapus-kategori" data-id="<?php echo $value['id_kategori'] ?>" onclick="return confirm('Anda yakin menghapus ID ini?');"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
				</a>
		</tr>
		<?php
		$no++;
	}
?>