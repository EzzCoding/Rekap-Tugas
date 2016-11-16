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