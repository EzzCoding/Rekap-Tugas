<h1>Edit Data Siswa</h1>
<a href="<?php echo base_url('Nilai'); ?>">Kembali</a>

<form action="<?php echo base_url('Nilai/act_updateNilai'); ?>" method="POST">
	<input type="hidden" name="id_nilai" value="<?php echo $data_nilai->id_nilai; ?>">
	<table>
		<tr>
			<th>Nama Siswa</th>
			<td> : </td>
			<td>
				<select name="id_siswa">
					<?php
					foreach ($data_siswa as $siswa) {
						?>
						<option value="<?php echo $siswa->id_siswa; ?>" <?php if($siswa->id_siswa == $data_nilai->id_siswa){echo 'selected="selected"';} ?>><?php echo $siswa->nama; ?></option>
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
						<option value="<?php echo $mapel->id_mapel; ?>" <?php if($mapel->id_mapel == $data_nilai->id_mapel){echo 'selected="selected"';} ?>><?php echo $mapel->mapel; ?></option>
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
				<input type="number" name="nilai" value="<?php echo $data_nilai->nilai; ?>">
			</td>
		</tr>
		<tr>
			<th></th>
			<td></td>
			<td> <input type="submit" value="Edit Nilai"> </td>
		</tr>
	</table>
</form>