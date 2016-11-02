<a href="<?php echo base_url('Siswa/tambahSiswa'); ?>">Tambah Data Siswa</a>
<table border="1">
	<thead>
		<tr>
			<th>ID Siswa</th>
			<th>Nama Siswa</th>
			<th>Alamat</th>
			<th>Jenis Kelamin</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php
		foreach ($data_siswa as $siswa) {
		?>
			<tr>
				<td><?php echo $siswa->id_siswa ?></td>
				<td><?php echo $siswa->nama ?></td>
				<td><?php echo $siswa->alamat ?></td>
				<td>
					<?php
						if ($siswa->jk == 1) {
							echo "Laki-laki";
						} else {
							echo "Perempuan";
						}
					?>		
				</td>
				<td>
					<a href="<?php echo base_url('Siswa/updateSiswa/' .$siswa->id_siswa); ?>">Edit</a>
					|
					<a href="<?php echo base_url('Siswa/hapusSiswa/' .$siswa->id_siswa); ?>" onclick="return confirm('Yakin akan menghapus data ini ?')">Hapus</a>
				</td>
			</tr>
		<?php
		}
		?>
	</tbody>
</table>

<?php echo $pagging; ?>