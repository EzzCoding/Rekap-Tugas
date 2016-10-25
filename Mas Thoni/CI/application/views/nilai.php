<!DOCTYPE html>
<html>
	<head>
		<title>Nilai</title>

		<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.min.css">
	</head>
	<body>
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">CodeIgniter</a>
		    </div>

		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="<?php echo site_url(); ?>">Home</a></li>
		        <li><a href="<?php echo site_url('Siswa'); ?>">Siswa</a></li>
		        <li class="active"><a href="<?php echo site_url('Nilai'); ?>">Nilai</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

		<div class="container">
			<div class="row well">
				<h1>Form Nilai</h1>
				<div class="col-md-offset-4 col-md-4 col-md-offset-4">
					<form action="" class="form-horizontal" role="form">
						<div class="input-group form-group">
						  <span class="input-group-addon" id="sizing-addon2">
						  	<i class="glyphicon glyphicon-user"></i>
						  </span>
						  <select name="siswa" class="form-control" aria-describedby="sizing-addon2">
						  	<option value="1">Achmad</option>
						  	<option value="2">Chadil</option>
						  	<option value="3">Auwfar</option>
						  </select>
						</div>

						<div class="input-group form-group">
						  <span class="input-group-addon" id="sizing-addon2">
						  <i class="glyphicon glyphicon-home"></i>
						  </span>
						  <select name="mapel" class="form-control" aria-describedby="sizing-addon2">
						  	<option value="1">PHP</option>
						  	<option value="2">HTML</option>
						  	<option value="3">SQL</option>
						  </select>
						</div>

						<div class="input-group form-group">
						  <span class="input-group-addon" id="sizing-addon2">
						  <i class="glyphicon glyphicon-home"></i>
						  </span>
						  <input type="number" class="form-control" placeholder="Nilai" name="nilai" aria-describedby="sizing-addon2">
						</div>

						<div class="form-group" style="text-align: right;">
						  <input type="submit" class="form-control btn btn-primary" value="Submit">
						  <input type="button" class="form-control btn btn-danger" value="Cancel">
						</div>
					</form>
				</div>
			</div>
		</div>

		<script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>

		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	</body>
</html>