<?php
  show_succ_msg($this->session->flashdata('msg'), '20px');
?>

<div class="box">
  <div class="box-header">
    <!-- <h3 class="box-title">Data Pegawai</h3> -->
    <div class="col-md-12" style="padding: 0;">
      <a href="<?php echo base_url('Pegawai/tambah');; ?>">
        <button class="form-control btn btn-primary"><i class="glyphicon glyphicon-plus-sign"></i> Tambah Data</button>
      </a>
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
      <tbody id="dataPegawai">
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
                <a href="<?php echo base_url('Pegawai/update/' .$pegawai->id); ?>">
                  <button class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Update</button>
                </a>
                <a href="<?php echo base_url('Pegawai/delete/' .$pegawai->id); ?>">
                  <button class="btn btn-danger hapus-dataPegawai" data-id="<?php echo $pegawai->id; ?>" onclick="return confirm('Anda yakin menghapus ID ini?')"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
                </a>
                <!-- <a href="<?php echo base_url('Pegawai/detail/' .$pegawai->id); ?>">
                  <button class="btn btn-info"><i class="glyphicon glyphicon-info-sign"></i> Detail</button>
                </a> -->
              </td>
            </tr>
            <?php
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