<?php
	session_start();

	if (isset($_SESSION['username'])) {
	?>
		<?php include '_layout/header.php'; ?>
				<?php
					$data_kategori = $kategori->SELECT_ALL();
					$data_artikel = $artikel->SELECT_BY_ID($_GET['id']);
				?>
				<div class="container" style="background:transparent;">
					<div class="row">
						<div class="col-md-12 well" style="text-align:center;">
							<h1> <i class="glyphicon glyphicon-repeat"></i> Tambah Data Artikel</h1>
							<form action="process/proses_update_artikel.php" method="POST" enctype="multipart/form-data">
								<input type="hidden" name="id_artikel" value="<?php echo $_GET['id']; ?>">
								<div class="input-group form-group">
								  <span class="input-group-addon" id="sizing-addon2">
								  	<i class="glyphicon glyphicon-user"></i>
								  </span>
								  <input type="text" class="form-control" name="author" aria-describedby="sizing-addon2" value="<?php echo $_SESSION['username']; ?>" disabled="disabled">
								</div>
								<div class="input-group form-group">
								  <span class="input-group-addon" id="sizing-addon2">
								  	<i class="glyphicon glyphicon-picture"></i>
								  </span>
								  <input type="file" class="form-control" placeholder="Gambar Artikel" name="gambar_artikel" aria-describedby="sizing-addon2">
								</div>
								<div class="input-group form-group">
								  <span class="input-group-addon" id="sizing-addon2">
								  	<i class="glyphicon glyphicon-asterisk"></i>
								  </span>
								  <input type="text" class="form-control" placeholder="Judul Artikel" name="judul_artikel" aria-describedby="sizing-addon2" value="<?php echo $data_artikel['judul_artikel']; ?>" required="required">
								</div>
								<div class="input-group form-group">
								  <span class="input-group-addon" id="sizing-addon2">
								  	<i class="glyphicon glyphicon-pencil"></i>
								  </span>
								  <textarea class="form-control" placeholder="Konten Artikel" name="isi_artikel" aria-describedby="sizing-addon2" rows="20" style="resize:none;" required="required"><?php echo $data_artikel['isi_artikel']; ?></textarea>
								</div>
								<div class="input-group form-group">
								  <span class="input-group-addon" id="sizing-addon2">
								  	<i class="glyphicon glyphicon-tag"></i>
								  </span>
								  <select name="kategori" class="form-control"  aria-describedby="sizing-addon2">
										<?php
										foreach ($data_kategori as $value) {
											?>
											<option value="<?php echo $value['id_kategori']; ?>" <?php if($value['nama_kategori'] == $data_artikel['nama_kategori']){echo "selected='selected'";} ?>><?php echo $value['nama_kategori']; ?></option>
											<?php
										}
										?>
								  </select>
								</div>
								<div class="form-group">
									<div class="col-md-4">
										  <a href="artikel.php">
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