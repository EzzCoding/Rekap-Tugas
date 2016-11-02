<a href="<?php echo base_url('Mapel/tambahMapel'); ?>">Tambah Data Mata Pelajaran</a>

<table border="1">
	<thead>
		<tr>
			<th>ID Mapel</th>
			<th>Nama Mapel</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($data_mapel as $mapel) {
		?>
			<tr>
				<td><?php echo $mapel->id_mapel; ?></td>
				<td><?php echo $mapel->mapel; ?></td>
				<td>
					<a href="<?php echo base_url('Mapel/updateMapel/' .$mapel->id_mapel); ?>">Edit</a>
					|
					<a href="<?php echo base_url('Mapel/hapusMapel/' .$mapel->id_mapel); ?>" onclick="return confirm('Yakin akan menghapus data ini ?')">Hapus</a>
				</td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>

<?php echo $pagging; ?>