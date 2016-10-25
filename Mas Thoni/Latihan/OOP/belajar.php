<?php
	/**
	* 
	*/
	class Coba {
		var $resultData = [];
		function __construct() {
			mysql_connect("localhost", "root", "");
			mysql_select_db("cendana");
		}

		public function buatArray() {
			$SQL = "SELECT * FROM calon_pegawai";
			$result = mysql_query($SQL);

			$index = 0;
			while ($data = mysql_fetch_array($result)) {
				$this->resultData[$index] = new stdClass;
				foreach ($data as $key => $value) {
					$this->resultData[$index]->$key = $value;
				}
				$index++;
			}
			return $this->resultData;
		}
	}

	$Coba = new Coba();
	echo "<pre>";
	print_r($Coba->buatArray());
	echo "</pre>";
	$data = $Coba->buatArray();

	foreach ($data as $value) {
		echo $value->kota ."<br>";
	}
?>