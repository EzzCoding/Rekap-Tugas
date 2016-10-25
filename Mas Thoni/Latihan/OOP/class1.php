<?php
	class Hewan {
		function __construct($hewan) {
			echo "Ini adalah Constructor <br>";
			echo $hewan .$this->makan();
		}
		
		function Makan($apa = '') {
			return " sedang makan " .$apa;
		}

		function tampil($hewan) {
			echo $hewan .$this->makan();
		}
	}

	$hewan = new Hewan('Bebek');
?>