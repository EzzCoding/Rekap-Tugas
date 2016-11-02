<h1>Tambah Data Nilai</h1>
<a href="<?php echo base_url('Nilai'); ?>">Kembali</a>

<form action="<?php echo base_url('Nilai/act_tambahNilai'); ?>" method="POST">
	<table>
		<tr>
			<th>Nama Siswa</th>
			<td> : </td>
			<td>
				<select name="id_siswa">
					<?php
					foreach ($data_siswa as $siswa) {
						?>
						<option value="<?php echo $siswa->id_siswa; ?>"><?php echo $siswa->nama; ?></option>
						<?php
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<th>Mapel</th>
			<td> : </td>
			<td>
				<select name="id_mapel">
					<?php
					foreach ($data_mapel as $mapel) {
						?>
						<option value="<?php echo $mapel->id_mapel; ?>"><?php echo $mapel->mapel; ?></option>
						<?php
					}
					?>
				</select>
			</td>
		</tr>
		<tr>
			<th>Nilai</th>
			<td> : </td>
			<td>
				<input type="number" name="nilai">
			</td>
		</tr>
		<tr>
			<th></th>
			<td></td>
			<td> <input type="submit" value="Tambah Nilai"> </td>
		</tr>
	</table>
</form>