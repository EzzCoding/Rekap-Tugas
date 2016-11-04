<?php echo $_header; ?>
    <?php echo $_sidebar; ?>
     <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Halaman <?php echo @$judul; ?>
          <small><?php echo @$deskripsi; ?></small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>
          <li class="active">Here</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <?php echo $_body; ?>
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php echo $_footer; ?>