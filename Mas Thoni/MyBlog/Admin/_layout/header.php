<?php
	include_once '../assets/config.php';
	include '../models/Model_Artikel.php';
	include '../models/Model_Author.php';
	include '../models/Model_Komentar.php';
	include '../models/Model_Kategori.php';

	use models\_model_artikel\Model_Artikel as Artikel;
	use models\_model_author\Model_Author as Author;
	use models\_model_komentar\Model_Komentar as Komentar;
	use models\_model_kategori\Model_Kategori as Kategori;

	$artikel = new Artikel();
	$author = new Author();
	$komentar = new Komentar();
	$kategori = new Kategori();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Dashboard Admin</title>
		<meta charset="utf-8">

		<link rel="icon" href="../../assets/img/favicon.png" type="image/png">

		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/style.css">
	</head>
	<body>
		<nav class="navbar navbar-default" role="navigation">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Dashboard MyBlog For Admin</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li><a href="Home.php">Home</a></li>
		        <li><a href="artikel.php">Artikel</a></li>
		        <li><a href="kategori.php">Kategori</a></li>
		      </ul>
		      <ul class="nav navbar-nav navbar-right">
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="../assets/img/<?php echo $_SESSION['foto']; ?>" style="width:15px;border-radius:8px;"> <?php echo $_SESSION['username']; ?> <span class="caret"></span></a>
		          <ul class="dropdown-menu" role="menu">
		            <li><a href="author.php"><i class="glyphicon glyphicon-wrench"></i>  Setting</a></li>
		            <li><a href="process/logout.php"><i class="glyphicon glyphicon-log-out"></i> Logout</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>