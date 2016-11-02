<h1>Edit Data Mata Pelajaran</h1>
<a href="<?php echo base_url('Mapel'); ?>">Kembali</a>

<form action="<?php echo base_url('Mapel/act_updateMapel'); ?>" method="POST">
	<input type="hidden" name="id_mapel" value="<?php echo $data_mapel->id_mapel; ?>">
	<table>
		<tr>
			<th>Nama Mapel</th>
			<td> : </td>
			<td> <input type="text" name="mapel" value="<?php echo $data_mapel->mapel; ?>"> </td>
		</tr>
		<tr>
			<th></th>
			<td></td>
			<td> <input type="submit" value="Edit"> </td>
		</tr>
	</table>
</form>