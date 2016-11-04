<!DOCTYPE html>
<html>
	<head>
		<title>Detail Data Pegawai</title>
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>">
	</head>
	<body style="background: palegreen;">
		<div class="container" style="margin-top: 120px;">
			<div class="row">
				<div class="col-md-offset-3 col-md-6 well" style="text-align: center;">
					<h1>Detail Data Pegawai</h1>
					<div class="input-group form-group" style="display: inline-block;">
					  <span class="input-group-addon" id="sizing-addon2">
					  	<i class="glyphicon glyphicon-user"></i>
					  </span>
					  <p class="form-control"><?php echo $dataPegawai->nama_pegawai; ?></p>
					</div>
					<div class="input-group form-group" style="display: inline-block;">
					  <span class="input-group-addon" id="sizing-addon2">
					  	<i class="glyphicon glyphicon-phone-alt"></i>
					  </span>
					 <p class="form-control"><?php echo $dataPegawai->telp; ?></p>
					</div>
					<div class="input-group form-group" style="display: inline-block;">
					  <span class="input-group-addon" id="sizing-addon2">
					  	<i class="glyphicon glyphicon-home"></i>
					  </span>
					  <p class="form-control"><?php echo $dataPegawai->kota; ?></p>
					</div>
					<div class="input-group form-group" style="display: inline-block;">
					  <span class="input-group-addon" id="sizing-addon2">
					  	<i class="glyphicon glyphicon-tag"></i>
					  </span>
					  <p class="form-control"><?php echo $dataPegawai->kelamin; ?></p>
					</div>
					<div class="input-group form-group" style="display: inline-block;">
					  <span class="input-group-addon" id="sizing-addon2">
					  	<i class="glyphicon glyphicon-briefcase"></i>
					  </span>
					  <p class="form-control"><?php echo $dataPegawai->posisi; ?></p>
					</div>
					<div class="form-group">
						<div class="col-md-6">
							  <a href="<?php echo base_url('Home'); ?>">
							  	<button class="form-control btn btn-danger"> <i class="glyphicon glyphicon-chevron-left"></i> Kembali</button>
							  </a>
						</div>
					</div>
				</div>
			</div>
		</div>

		<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js'); ?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap.min.js'); ?>"></script>
	</body>
</html>