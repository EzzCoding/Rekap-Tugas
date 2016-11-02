<h1>Edit Data Siswa</h1>
<a href="<?php echo base_url('Siswa'); ?>">Kembali</a>

<form action="<?php echo base_url('Siswa/act_updateSiswa'); ?>" method="POST">
	<input type="hidden" name="id_siswa" value="<?php echo $data_siswa->id_siswa; ?>">
	<table>
		<tr>
			<th>Nama Siswa</th>
			<td> : </td>
			<td> <input type="text" name="nama" value="<?php echo $data_siswa->nama; ?>"> </td>
		</tr>
		<tr>
			<th>Alamat</th>
			<td> : </td>
			<td> <textarea name="alamat" style="resize:none;width:300px;" rows="10"><?php echo $data_siswa->alamat; ?></textarea> </td>
		</tr>
		<tr>
			<th>Jenis Kelamin</th>
			<td> : </td>
			<td>
				<input type="radio" name="jk" value="1" id="laki" <?php if($data_siswa->jk == 1){echo 'checked="checked"';} ?>>
					<label for="laki">Laki-laki</label>
				<input type="radio" name="jk" value="2" id="perempuan" <?php if($data_siswa->jk == 2){echo 'checked="checked"';} ?>> 
					<label for="perempuan">Perempuan</label>
			</td>
		</tr>
		<tr>
			<th></th>
			<td></td>
			<td> <input type="submit" value="Edit Siswa"> </td>
		</tr>
	</table>
</form>