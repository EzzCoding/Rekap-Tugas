<?php
	session_start();

	if (isset($_SESSION['username'])) {
	?>
		<?php include '_layout/header.php'; ?>
				<div class="container" style="background:transparent;">
					<div class="row">
						<div class="col-md-12 well" style="text-align:center;">
							<h1> <i class="glyphicon glyphicon-plus-sign"></i> Tambah Data Kategori</h1>
							<form action="process/proses_tambah_kategori.php" method="POST">
								<div class="input-group form-group">
								  <span class="input-group-addon" id="sizing-addon2">
								  	<i class="glyphicon glyphicon-tag"></i>
								  </span>
								  <input type="text" class="form-control" placeholder="Nama Kategori" name="nama_kategori" aria-describedby="sizing-addon2" required="required">
								</div>
								<div class="form-group">
									<div class="col-md-4">
										  <a href="kategori.php">
										  	<div class="form-control btn btn-danger"> <i class="glyphicon glyphicon-chevron-left"></i> Kembali</div>
										  </a>
									</div>
									<div class="col-md-4">
										  <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>

		<?php include '_layout/footer.php'; ?>
<?php 
	} else {
		header('location: index.php');
	}
?>