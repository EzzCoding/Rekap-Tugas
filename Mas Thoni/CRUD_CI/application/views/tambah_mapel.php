<h1>Tambah Data Mata Pelajaran</h1>
<a href="<?php echo base_url('Mapel'); ?>">Kembali</a>

<form action="<?php echo base_url('Mapel/act_tambahMapel'); ?>" method="POST">
	<table>
		<tr>
			<th>Nama Mapel</th>
			<td> : </td>
			<td> <input type="text" name="mapel"> </td>
		</tr>
		<tr>
			<th></th>
			<td></td>
			<td> <input type="submit" value="Tambah Mapel"> </td>
		</tr>
	</table>
</form>