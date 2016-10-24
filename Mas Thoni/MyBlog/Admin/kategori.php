<?php
	session_start();

	if (isset($_SESSION['username'])) {
		?>
		<?php include '_layout/header.php'; ?>
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1>Data Kategori</h1>
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row">
						<div class="col-md-4" style="padding: 0;">
							<a href="tambah_kategori.php">
								<button class="form-control btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
							</a>
						</div>
						<div class="col-md-4"></div>
						<div class="col-md-4" style="text-align:right; padding:0;">
							<!-- <form action="kategori.php" method="GET" class="form-inline"> -->
							<div class="form-inline">
								<div class="input-group form-group">
								  <span class="input-group-addon" id="sizing-addon2">
								  	<i class="glyphicon glyphicon-search"></i>
								  </span>
								  <input type="text" class="form-control" placeholder="Search" name="search" aria-describedby="sizing-addon2" id="search-kategori">
								</div>
								<!-- <input type="submit" class="btn btn-info" value="Cari"> -->
							</div>
							<!-- </form> -->
						</div>
					</div>

					<div class="row" style="margin-top: 10px;">
						<table class="table table-bordered table-striped table-hover">
							<thead style="text-align: center;">
								<tr>
									<th>No</th>
									<th>Nama Kategori</th>
									<th>Jumlah Artikel</th>
									<th style="text-align: center;">Aksi</th>
								</tr>
							</thead>
							<tbody id="list-kategori">
								
							</tbody>
						</table>	
					</div>
				</div>
				
		<?php include '_layout/footer.php'; ?>
		<?php
	} else {
		header('location: index.php');
	}
?>