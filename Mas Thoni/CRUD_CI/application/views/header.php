<style type="text/css">
	nav ul li {
		display: inline-block;
	}
	nav ul li:after {
		content: "/";
	}
	nav ul li a{
		color: #000;
	}
	nav ul li a.active{
		color: red;
	}

	#pagination ul li {
		display: inline-block;
		background: #f8fcff;
		padding: 5px;
		margin-right: 2px;
		border-radius: 5px;
		border: 1px solid #94c8e7;
	}

	#pagination ul li.active {
		background: #59b4ea;
		color: #FFF;
	}

	#pagination ul li a {
		text-decoration: none;
		color: #688bcf;
	}
</style>

<h1><?php echo $judul; ?></h1>
<a href="<?php echo base_url('Home'); ?>">Home</a> |
<a href="<?php echo base_url('Siswa'); ?>">Data Siswa</a> |
<a href="<?php echo base_url('Mapel'); ?>">Data Mapel</a> |
<a href="<?php echo base_url('Nilai'); ?>">Data Nilai</a>
<br><br>