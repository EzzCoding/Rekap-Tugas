<?php
	session_start();

	if (isset($_SESSION['username'])) {
	?>
		<?php include '_layout/header.php'; ?>

		<div class="row">
			<div class="container">
				<div class="col-md-12" style="text-align:center;">
					<h3>Selamat Datang Author</h3>
				</div>
			</div>
			<div class="container well">
				<div class="col-md-2" style="text-align:center;padding:0;margin:0">
					<img src="../assets/img/<?php echo $_SESSION['foto']; ?>" style="width:90%;border-radius:50%;">
				</div>
				<div class="col-md-10 well" style="margin-top:20px;">
					<div class="col-md-12">
						<h3><?php echo $_SESSION['nama']; ?></h3>
					</div>
					<div class="col-md-12">
						<?php echo $_SESSION['deskripsi']; ?>
					</div>
				</div>
			</div>
		</div>

		<?php include '_layout/footer.php'; ?>
	<?php 
	} else {
		header('location: index.php');
	}
?>