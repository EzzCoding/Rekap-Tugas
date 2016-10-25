<!DOCTYPE html>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<form method="POST" action="act.php">
			<table>
				<tr>
					<td>
						<label>
							Nama Depan
						</label>
					</td>
					<td>
						<input type="text" name="nama[]">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Nama Tengah
						</label>
					</td>
					<td>
						<input type="text" name="nama[]">
					</td>
				</tr>
				<tr>
					<td>
						<label>
							Nama Belakang
						</label>
					</td>
					<td>
						<input type="text" name="nama[]">
					</td>
				</tr>
				<tr>
					<td></td>
					<td align="right">
						<input type="submit" name="simpan">
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>