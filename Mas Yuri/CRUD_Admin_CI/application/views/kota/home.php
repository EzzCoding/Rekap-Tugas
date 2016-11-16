<div class="msg"></div>

<div class="box">
  <div class="box-header">
    <div class="col-md-12" style="padding: 0;">
        <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-kota"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Kota</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-kota">
        <?php
          $no = 1;
          foreach ($dataKota as $kota) {
            ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $kota->nama; ?></td>
              <td style="text-align: center;">
                  <button class="btn btn-warning update-dataKota" data-id="<?php echo $kota->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
                  <button class="btn btn-danger hapus-dataKota" data-id="<?php echo $kota->id; ?>"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
              </td>
            </tr>
            <?php
            $no++;
          }
        ?>
      </tbody>
    </table>
  </div>
</div>

<?php echo $modal_tambah_kota; ?>

<div id="modal-update"></div>