<!DOCTYPE html>
<html>
	<head>
		<title>Home</title>

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
		        <li class="active"><a href="<?php echo site_url(); ?>">Home</a></li>
		        <li><a href="<?php echo site_url('Siswa'); ?>">Siswa</a></li>
		        <li><a href="<?php echo site_url('Nilai'); ?>">Nilai</a></li>
		      </ul>
		    </div>
		  </div>
		</nav>

		<div class="container">
			<div class="jumbotron">
			  <h1>Belajar CodeIgniter</h1>
			  <p>...</p>
			  <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a></p>
			</div>
		</div>

		<script src="<?php echo base_url(); ?>assets/js/jquery-3.1.1.min.js"></script>

		<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
	</body>
</html>