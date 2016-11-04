<div class="container" style="margin-top: 20px;">
	<div class="row">
		<div class="col-md-offset-3 col-md-6 well">
			<h1 style="display:block; text-align:center;">Tambah Data kota</h1>
			<form action="<?php echo base_url('Kota/prosesTambah'); ?>" method="POST">
				<div class="input-group form-group">
				  <span class="input-group-addon" id="sizing-addon2">
				  	<i class="glyphicon glyphicon-user"></i>
				  </span>
				  <input type="text" class="form-control" placeholder="Nama Kota" name="kota" aria-describedby="sizing-addon2">
				</div>
				<div class="form-group">
					<div class="col-md-6">
						  <a href="<?php echo base_url('Kota'); ?>">
						  	<div class="form-control btn btn-danger"> <i class="glyphicon glyphicon-chevron-left"></i> Kembali</div>
						  </a>
					</div>
					<div class="col-md-6">
						  <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Tambah Data</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>