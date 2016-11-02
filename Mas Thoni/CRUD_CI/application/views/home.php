<?php
foreach ($data_nilai as $mapel => $index_nilai) {
?>
	<table border="1" style="display:inline-block; vertical-align:top;">
		<thead>
			<tr>
				<th colspan="3"><?php echo $mapel ?></th>
			</tr>
			<tr>
				<th>Nama Siswa</th>
				<th>Nilai</th>
			</tr>
		</thead>
		<tbody>
			<?php
			foreach ($data_nilai[$mapel] as $nilai) {
				?>
				<tr>
					<td><?php echo $nilai->nama;?></td>
					<td><?php echo $nilai->nilai; ?></td>
				</tr>
				<?php
			}
			?>
		</tbody>
	</table>
<?php
}
?>