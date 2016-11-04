
<div class="container" style="margin-top:20px;">
	<div class="row">
		<div class="col-md-offset-3 col-md-6 well">
			<h1 style="display:block; text-align:center;">Update Data Pegawai</h1>
			<form action="<?php echo base_url('Pegawai/prosesUpdate'); ?>" method="POST">
				<input type="hidden" name="id" value="<?php echo $dataPegawai->id_pegawai; ?>">
				<div class="input-group form-group">
				  <span class="input-group-addon" id="sizing-addon2">
				  	<i class="glyphicon glyphicon-user"></i>
				  </span>
				  <input type="text" class="form-control" placeholder="Nama" name="nama" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->nama_pegawai; ?>">
				</div>
				<div class="input-group form-group">
				  <span class="input-group-addon" id="sizing-addon2">
				  	<i class="glyphicon glyphicon-phone-alt"></i>
				  </span>
				  <input type="text" class="form-control" placeholder="Nomor Telepon" name="telp" aria-describedby="sizing-addon2" value="<?php echo $dataPegawai->telp; ?>">
				</div>
				<div class="input-group form-group">
				  <span class="input-group-addon" id="sizing-addon2">
				  	<i class="glyphicon glyphicon-home"></i>
				  </span>
				  <select name="kota" class="form-control select2"  aria-describedby="sizing-addon2">
						<?php
						foreach ($dataKota as $kota) {
							?>
							<option value="<?php echo $kota->id; ?>" <?php if($kota->id == $dataPegawai->id_kota){echo "selected='selected'";} ?>><?php echo $kota->nama; ?></option>
							<?php
						}
						?>
				  </select>
				</div>
				<div class="input-group form-group" style="display: inline-block;">
				  <span class="input-group-addon" id="sizing-addon2">
				  <i class="glyphicon glyphicon-tag"></i>
				  </span>
				  <span class="input-group-addon">
			        <input type="radio" name="jk" value="1" id="laki" class="minimal" <?php if($dataPegawai->id_kelamin == 1){echo "checked='checked'";} ?>>
					<label for="laki">Laki-laki</label>
			      </span>
			      <span class="input-group-addon">
			        <input type="radio" name="jk" value="2" id="perempuan" class="minimal" <?php if($dataPegawai->id_kelamin == 2){echo "checked='checked'";} ?>> 
					<label for="perempuan">Perempuan</label>
			      </span>
				</div>
				<div class="input-group form-group">
				  <span class="input-group-addon" id="sizing-addon2">
				  	<i class="glyphicon glyphicon-briefcase"></i>
				  </span>
				  <select name="posisi" class="form-control select2"  aria-describedby="sizing-addon2">
						<?php
						foreach ($dataPosisi as $posisi) {
							?>
							<option value="<?php echo $posisi->id; ?>" <?php if($posisi->id == $dataPegawai->id_posisi){echo "selected='selected'";} ?>><?php echo $posisi->nama; ?></option>
							<?php
						}
						?>
				  </select>
				</div>
				<div class="form-group">
					<div class="col-md-6">
						  <a href="<?php echo base_url('Pegawai'); ?>">
						  	<div class="form-control btn btn-danger"> <i class="glyphicon glyphicon-chevron-left"></i> Kembali</div>
						  </a>
					</div>
					<div class="col-md-6">
						  <button type="submit" class="form-control btn btn-primary"> <i class="glyphicon glyphicon-ok"></i> Update Data</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(function () {
	    $(".select2").select2();

	    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
	      checkboxClass: 'icheckbox_flat-blue',
	      radioClass: 'iradio_flat-blue'
	    });
	});
</script>