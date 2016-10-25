<?php
	session_start();

	if (isset($_SESSION['username'])) {
	?>
		<?php include '_layout/header.php'; ?>

		<div class="row">
			<div class="container">
				<div class="col-md-12" style="text-align:center;">
					<h3>Ubah Data Author</h3>
				</div>
			</div>
			<div class="container well">
				<div class="col-md-offset-3 col-md-6">
					<form action="process/proses_update_author.php" method="POST" enctype="multipart/form-data">
						<div class="input-group form-group">
						  <span class="input-group-addon" id="sizing-addon2">
						  	<i class="glyphicon glyphicon-picture"></i>
						  </span>
						  <input type="file" class="form-control" placeholder="Foto Profil" name="foto_profil" aria-describedby="sizing-addon2">
						</div>
						<div class="input-group form-group">
						  <span class="input-group-addon" id="sizing-addon2">
						  	<i class="glyphicon glyphicon-user"></i>
						  </span>
						  <input type="text" class="form-control" placeholder="Nama Author" name="nama" aria-describedby="sizing-addon2" value="<?php echo $_SESSION['nama']; ?>" required="required">
						</div>
						<div class="input-group form-group">
						  <span class="input-group-addon" id="sizing-addon2">
						  	<i class="glyphicon glyphicon-pencil"></i>
						  </span>
						  <textarea class="form-control" placeholder="Deskripsi Author" name="deskripsi_author" aria-describedby="sizing-addon2" rows="10" style="resize:none;" maxlength="125" required="required"><?php echo $_SESSION['deskripsi']; ?></textarea>
						</div>
						<div class="form-group">
							<div class="col-md-4">
								  <a href="home.php">
								  	<div class="form-control btn btn-danger"> <i class="glyphicon glyphicon-chevron-left"></i> Kembali</div>
								  </a>
							</div>
							<div class="col-md-4">
								  <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Ubah Data</button>
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