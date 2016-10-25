<?php
	class Kendaraan {
		var $bensin_out;

		function __construct($bensin) {
			echo "Bensin Awal = " .$bensin ."<br>";
			$this->bensin_out = $bensin;
		}

		function isiBensin() {
			$this->bensin_out = $this->bensin_out + 2;
			echo "Mobil isi bensin. isi bensin jadi = " .$this->bensin_out ."<br>";
		}

		function jalan() {
			$this->bensin_out = $this->bensin_out - 1;
			echo "Mobil berjalan, bensin tinggal = " .$this->bensin_out ."<br>";
		}
	}

	$bensin_awal = 10;

	$Kendaraan = new Kendaraan($bensin_awal);

	$Kendaraan->jalan();
	$Kendaraan->jalan();
	$Kendaraan->jalan();
	$Kendaraan->jalan();
	$Kendaraan->isiBensin();

	// class ATM {
	// 	var $saldo;

	// 	function deposit($saldo) {
	// 		$this->saldo = $saldo;
	// 	}

	// 	function debit($minta) {
	// 		$this->saldo = $this->saldo - $minta;
	// 	}

	// 	function kredit($tambah) {
	// 		$this->saldo = $this->saldo + $tambah;
	// 	}

	// 	function cekSaldo() {
	// 		echo "Sisa Saldo ATM = " .$this->saldo;
	// 	}
	// }

	// $ATM = new ATM();

	// $Saldo = 2000000;
	// $ATM->deposit($Saldo);
	// $ATM->debit(10000);
	// $ATM->kredit(20000);

	// $ATM->cekSaldo();

	// class ATM {
	// 	var $saldo;
	// 	var $Buku = [
	// 			[
	// 				'nama' => 'Belajar PHP',
	// 				'stok' => 100,
	// 				'harga' => 250000
	// 			],
	// 			[
	// 				'nama' => 'Belajar HTML',
	// 				'stok' => 100,
	// 				'harga' => 75000
	// 			],
	// 			[
	// 				'nama' => 'Seminggu belajar Codeigniter',
	// 				'stok' => 50,
	// 				'harga' => 50000
	// 			]
	// 		];

	// 	function deposit($saldo) {
	// 		$this->saldo = $saldo;
	// 	}

	// 	function debit($minta) {
	// 		$this->saldo = $this->saldo - $minta;
	// 	}

	// 	function kredit($tambah) {
	// 		$this->saldo = $this->saldo + $tambah;
	// 	}

	// 	function cekSaldo() {
	// 		echo "\n";
	// 		echo "Sisa Saldo ATM = " .$this->saldo;
	// 	}

	// 	function beliBuku() {
	// 		$no = 1;

	// 		for($i=0; $i<count($this->Buku); $i++) {
	// 			echo $no .". ";
	// 			foreach ($this->Buku[$i] as $key => $value) {
	// 				echo $key ." = " .$value ."\n";
	// 			}
	// 			$no++;
	// 		}

	// 		echo "\n\nPilih Buku yang di beli : ";
	// 		$handle = fopen ("php://stdin","r");
	// 		$line = fgets($handle);
	// 		fclose($handle);

	// 		if (trim($line) != "exit") {
	// 			$this->saldo = $this->saldo - $this->Buku[$line-1]['harga'];
	// 			$this->Buku[$line-1]['stok'] = $this->Buku[$line-1]['stok'] - 1;
	// 		} else {
	// 			return trim($line);
	// 		}

	// 	}
	// }

	// $ATM = new ATM();

	// $Saldo = 2000000;
	// $ATM->deposit($Saldo);

	// do {
	// 	$input = $ATM->beliBuku();
	// 	$ATM->cekSaldo();
	// } while ($input != "exit");

	// class Pegawai {
	// 	var $Gaji = 15000000;
	// 	var $Pegawai;

	// 	function tampil() {
	// 		echo "Gaji " .$this->Pegawai ." = " .$this->Gaji ."\n";
	// 	}
	// }

	// class Dosen extends Pegawai {
	// 	function __construct() {
	// 		$this->Pegawai = "Dosen";
	// 	}

	// 	function tambahSKS($SKS) {
	// 		$Tambahan = $SKS * 15000;
	// 		$this->Gaji += $Tambahan;
	// 	}
	// }

	// class Staff extends Pegawai {
	// 	function __construct() {
	// 		$this->Pegawai = "Staff";
	// 	}

	// 	function tambahHadir($hadir) {
	// 		$Tambahan = $hadir * 5000;
	// 		$this->Gaji += $Tambahan;
	// 	}	
	// }

	// $Pegawai = new Pegawai();
	// $Dosen = new Dosen();
	// $Staff = new Staff();

	// $Dosen->tambahSKS(2);
	// $Dosen->tampil();
	// $Staff->tambahHadir(5);
	// $Staff->tampil();

	// class Pegawai {	
	// 	function __construct() {
	// 		$this->gajiPokok = 1500000;
	// 	}
	// }

	// class Dosen extends Pegawai {
	// 	public function __construct() {
	// 		parent::__construct();
	// 		$this->gajiDosen = $this->gajiPokok;
			
	// 	}
		
	// 	public function gajiDosen($sks='') {
	// 		$total = ($sks * 15000);
	// 		$this->gajiDosen += $total ;
	// 	}

	// 	public function getGajiDosen() {
	// 		echo "Gaji dosen adalah " . $this->gajiDosen . "\n";
	// 	}
		
	// }

	// class Staff extends Pegawai {
	// 	public function __construct() {
	// 		parent::__construct();
	// 		$this->gajiStaff = $this->gajiPokok;
	// 	}
		
	// 	public function gajiStaff($pertemuan='') {
	// 		$total = ($pertemuan * 5000);
	// 		$this->gajiStaff += $total ;
	// 	}
		
	// 	public function getGajiStaff() {
	// 		echo "Gaji staff adalah " . $this->gajiStaff . "\n";
	// 	}
		
	// }

	// $dosen = new Dosen();
	// $dosen->gajiDosen(2);
	// $dosen->getGajiDosen();
	
	// $staff = new Staff();
	// $staff->gajiStaff(2);
	// $staff->getGajiStaff();

	class a {

	}

	class b extends a {

	}

?>