<?php
	$Arr = [
		['A', 'B', 'C'],
		[1, 2, 3, 4, 5, 6],
		['Joko', 'Budi', 'Yuni'],
	];

	$jml1 = $Arr[1][1] + $Arr[1][2] + $Arr[1][3];
	$jml2 = $Arr[1][4] + $Arr[1][5];

	echo $Arr[2][0] ." mempunyai anak sebanyak " .$Arr[1][3] ." orang dan sekelas dengan anaknya " .$Arr[2][2] ." yaitu di kelas " .$Arr[0][0] .", mereka menambahkan angka " .$Arr[1][1] .", " .$Arr[1][2] ." dan " .$Arr[1][3] ." menjadi " .$jml1 .". " .$Arr[2][1] ." menjumlahkan angka " .$Arr[1][4] ." dan " .$Arr[1][5] ." menjadi " .$jml2;

	//Joko mempunyai anak 4 orang dan sekelas dengan anakya Yuni yaitu di kelas A, mereka menambahkan angka 2,3 dan 4 menjadi 9. Budi menjumlahkan angka 5 dan 6 menjadi 11.
?>