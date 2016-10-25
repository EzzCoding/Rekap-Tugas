<?php
	$json = file_get_contents("http://api.football-data.org/v1/competitions");

	$dataJSON = json_decode($json);

	// echo "<pre>";
	// print_r($dataJSON);
?>

<table border="1">
	<thead>
		<th>ID</th>
		<th>Caption</th>
		<th>League</th>
		<th>Year</th>
		<th>Jumlah Team</th>
		<th>Jumlah Permainan</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php
		foreach ($dataJSON as $value) {
			$json_tim = file_get_contents("http://api.football-data.org/v1/competitions/{$value->id}/teams");
			$get_jsonTim = base64_encode($json_tim);
			?>
			<tr>
				<td><?php echo $value->id; ?></td>
				<td><?php echo $value->caption; ?></td>
				<td><?php echo $value->league; ?></td>
				<td><?php echo $value->year; ?></td>
				<td><?php echo $value->numberOfTeams; ?></td>
				<td><?php echo $value->numberOfGames; ?></td>
				<td><a href="tim.php?data=<?php echo $get_jsonTim; ?>">Lihat Tim</a></a></td>
			</tr>
			<?php
		}
		?>
	</tbody>
</table>