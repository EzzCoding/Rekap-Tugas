<!-- <!DOCTYPE html>
<html>
	<head>
		<title>Kuis</title>
	</head>
	<body>
		<form method="POST" action="act_kuis.php">
			<table>
				<?php
				//for ($i=0; $i < 10; $i++) { 
					?>
					<tr>
						<td>
							<label>
								Nilai <?php //echo ($i+1); ?>
							</label>
						</td>
						<td>
							<input type="text" name="nilai[]" value="10">
						</td>
					</tr>
					<?php
				//}
				?>
				<tr>
					<td></td>
					<td align="right">
						<input type="submit" name="simpan">
					</td>
				</tr>			
			</table>
		</form>
	</body>
</html> -->

<?php
	function tambah($nilai1, $nilai2) {
		$hasilTambah = $nilai1 + $nilai2;
		return $hasilTambah;
	}

	function bagi($hasilTambah) {
		$hasilBagi = $hasilTambah / 2;
		return $hasilBagi;
	}

	function kali($hasilBagi) {
		$hasilKali = $hasilBagi / 2;
		return $hasilKali;
	}

	function tampil($hasilKali) {
		echo $hasilKali;
	}

	$HasilTambah_F = tambah(5, 5);
	$HasilBagi_F = bagi($HasilTambah_F);
	$HasilKali_F = kali($HasilBagi_F);

	tampil($HasilKali_F);
?>