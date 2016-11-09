<?php
  show_succ_msg($this->session->flashdata('msg'), '20px');
?>

<div class="box">
  <div class="box-header">
    <!-- <h3 class="box-title">Data Pegawai</h3> -->
    <div class="col-md-12" style="padding: 0;">
      <a href="<?php echo base_url('Kota/tambah');; ?>">
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
          <th>Nama Kota</th>
          <th style="text-align: center;">Aksi</th>
        </tr>
      </thead>
      <tbody id="dataPegawai">
        <?php
          $no = 1;
          foreach ($dataKota as $kota) {
            ?>
            <tr>
              <td><?php echo $no; ?></td>
              <td><?php echo $kota->nama; ?></td>
              <td style="text-align: center;">
                <a href="<?php echo base_url('Kota/update/' .$kota->id); ?>">
                  <button class="btn btn-warning"><i class="glyphicon glyphicon-repeat"></i> Update</button>
                </a>
                <a href="<?php echo base_url('Kota/delete/' .$kota->id); ?>">
                  <button class="btn btn-danger hapus-dataPegawai" data-id="<?php echo $kota->id; ?>" onclick="return confirm('Anda yakin menghapus ID ini?')"><i class="glyphicon glyphicon-remove-sign"></i> Delete</button>
                </a>
                <!-- <a href="<?php echo base_url('Kota/detail/' .$kota->id); ?>">
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