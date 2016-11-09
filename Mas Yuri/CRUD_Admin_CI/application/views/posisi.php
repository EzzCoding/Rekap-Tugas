<?php
  show_succ_msg($this->session->flashdata('msg'), '20px');
?>

<div class="box">
  <div class="box-header">
    <!-- <h3 class="box-title">Data Pegawai</h3> -->
    <div class="col-md-12" style="padding: 0;">
      <a href="<?php echo base_url('Posisi/tambah');; ?>">
        <button class="form-control btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
      </a>
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
      <tbody id="dataPegawai">
        <?php
          $no = 1;
          foreach ($dataPosisi as $posisi) {
            ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $posisi->nama; ?></td>
              <td style="text-align: center;">
                <a href="<?php echo base_url('Posisi/update/' .$posisi->id); ?>">
                  <button class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Update</button>
                </a>
                <a href="<?php echo base_url('Posisi/delete/' .$posisi->id); ?>">
                  <button class="btn btn-danger hapus-dataPegawai" data-id="<?php echo $posisi->id; ?>" onclick="return confirm('Anda yakin menghapus ID ini?')"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
                </a>
                <!-- <a href="<?php echo base_url('Posisi/detail/' .$posisi->id); ?>">
                  <button class="btn btn-info"><i class="glyphicon glyphicon-info-sign"></i> Detail</button>
                </a> -->
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

<script>
  $(function () {
    $('#list-data').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": false
    });
  });
</script>