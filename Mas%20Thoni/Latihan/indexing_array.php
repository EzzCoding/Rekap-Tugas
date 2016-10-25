<?php
	$arr = [
		'nama' => ['Achmad', 'Chadil', 'Auwfar'],
		'nilai' => [10, 11, 12],
		'kelas' => ['A', 'B', 'C']
	];

	foreach ($arr as $key => $value) {
		echo $value[0] ."\n";
	}

	echo "\n";

	$arr2 = [
		'nama1' => 'Auw',
		'nama2' => 'Cil',
		'nama3' => 'Lin'
	];

	foreach ($arr2 as $key2) {
		echo $key2['nama1'] ."\n";
	}
?>