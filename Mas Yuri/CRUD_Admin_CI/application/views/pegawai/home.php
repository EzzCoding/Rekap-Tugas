<div class="msg"></div>

<div class="box">
  <div class="box-header">
    <div class="col-md-12" style="padding: 0;">
        <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-pegawai"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>Nama</th>
          <th>No Telp</th>
          <th>Asal kota</th>
          <th>Jenis Kelamin</th>
          <th>Posisi</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-pegawai">
        <?php
          foreach ($dataPegawai as $pegawai) {
            ?>
            <tr>
              <td><?php echo $pegawai->pegawai; ?></td>
              <td><?php echo $pegawai->telp; ?></td>
              <td><?php echo $pegawai->kota; ?></td>
              <td><?php echo $pegawai->kelamin; ?></td>
              <td><?php echo $pegawai->posisi; ?></td>
              <td style="text-align: center;">
                  <button class="btn btn-warning update-dataPegawai" data-id="<?php echo $pegawai->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
                  <button class="btn btn-danger hapus-dataPegawai" data-id="<?php echo $pegawai->id; ?>"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
              </td>
            </tr>
            <?php
          }
        ?>
      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_pegawai; ?>

<div id="modal-update"></div>

