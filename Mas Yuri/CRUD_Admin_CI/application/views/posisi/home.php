<div class="msg"></div>

<div class="box">
  <div class="box-header">
    <div class="col-md-12" style="padding: 0;">
      <button class="form-control btn btn-primary" data-toggle="modal" data-target="#tambah-posisi"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="list-data" class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>#</th>
          <th>Nama Posisi</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="data-posisi">
        <?php
          $no = 1;
          foreach ($dataPosisi as $posisi) {
            ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $posisi->nama; ?></td>
              <td style="text-align: center;">
                  <button class="btn btn-warning update-dataPosisi" data-id="<?php echo $posisi->id; ?>"><i class="glyphicon glyphicon-repeat"></i> Update</button>
                  <button class="btn btn-danger hapus-dataPosisi" data-id="<?php echo $posisi->id; ?>"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
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

<?php echo $modal_tambah_posisi; ?>

<div id="modal-update"></div>