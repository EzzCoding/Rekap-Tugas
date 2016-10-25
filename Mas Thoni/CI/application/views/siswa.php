<!DOCTYPE html>
<html>
	<head>
		<title>Siswa</title>

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
		        <li class="active"><a href="<?php echo site_url('Siswa'); ?>">Siswa</a></li>
		        <li><a href="<?php echo site_url('Nilai'); ?>">Nilai</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

		<div class="container">
			<div class="row well">
				<h1>Form Siswa</h1>
				<div class="col-md-offset-4 col-md-4 col-md-offset-4">
					<form action="#" class="form-horizontal" role="form">
						<div class="input-group form-group">
						  <span class="input-group-addon" id="sizing-addon2">
						  	<i class="glyphicon glyphicon-user"></i>
						  </span>
						  <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2">
						</div>

						<div class="input-group form-group">
						  <span class="input-group-addon" id="sizing-addon2">
						  <i class="glyphicon glyphicon-home"></i>
						  </span>
						  <textarea class="form-control" placeholder="Alamat" name="alamat" aria-describedby="sizing-addon2" style="resize: none;"></textarea>
						</div>

						<div class="input-group form-group" style="display: inline-block;">
						  <span class="input-group-addon" id="sizing-addon2">
						  <i class="glyphicon glyphicon-tag"></i>
						  </span>
						  <span class="input-group-addon">
					        <input type="radio" name="jk" value="1" id="laki">
							<label for="laki">Laki-laki</label>
					      </span>
					      <span class="input-group-addon">
					        <input type="radio" name="jk" value="2" id="perempuan"> 
							<label for="perempuan">Perempuan</label>
					      </span>
						</div>

						<div class="form-group">
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