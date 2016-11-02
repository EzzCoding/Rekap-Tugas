<a href="<?php echo base_url('Nilai/tambahNilai'); ?>">Tambah Data Nilai</a>
<table border="1">
	<thead>
		<tr>
			<th>Nama Siswa</th>
			<th>Mata Pelajaran</th>
			<th>Nilai</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($data_nilai as $nilai) {
		?>
			<tr>
				<td><?php echo $nilai->nama; ?></td>
				<td><?php echo $nilai->mapel; ?></td>
				<td><?php echo $nilai->nilai; ?></td>
				<td>
					<a href="<?php echo base_url('Nilai/updateNilai/' .$nilai->id_nilai); ?>">Edit</a>
					|
					<a href="<?php echo base_url('Nilai/hapusNilai/' .$nilai->id_nilai); ?>" onclick="return confirm('Yakin akan menghapus data ini ?')">Hapus</a>
				</td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>

<?php echo $pagging; ?>