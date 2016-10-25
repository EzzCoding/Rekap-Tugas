<?php
	$dataJSON = json_decode(base64_decode($_GET['data']));

	// echo "<pre>";
	// print_r($dataJSON);
	// exit();
?>
<a href="index.php">Kembali</a>
<table border="1">
	<thead>
		<th>No</th>
		<th>Nama Team</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php
		$nomor = 1;
		foreach ($dataJSON->teams as $value) {
			$json_player = file_get_contents($value->_links->players->href);
			$get_jsonPlayer = base64_encode($json_player);

			?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $value->name; ?></td>
				<td><a href="tim.php?data=<?php echo $get_jsonPlayer; ?>">Lihat Player</a></a></td>
			</tr>
			<?php
			$nomor++;
		}
		?>
	</tbody>
</table>