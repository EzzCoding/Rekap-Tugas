<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AdminCRUD | Dashboard</title>

    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

    <!-- css -->
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/eksternal/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/eksternal/ionicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/select2/select2.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/iCheck/all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- jQuery 2.2.3 -->
    <script src="<?php echo base_url(); ?>assets/plugins/jQuery/jquery-2.2.3.min.js"></script>
    <!-- <script src="<?php echo base_url(); ?>assets/js/ajax.js"></script> -->
  </head>

  <body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="<?php echo base_url(); ?>" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><small>CRUD</small></span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>CRUD</span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="<?php echo base_url(); ?>assets/#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="<?php echo base_url(); ?>assets/#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $userdata->nama; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php echo base_url(); ?>assets/img/<?php echo $userdata->foto; ?>" class="img-circle" alt="User Image">

                  <p>
                    <?php echo $userdata->nama; ?> - Web Developer
                    <small>Member since Sep. 2016</small>
                  </p>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <!-- <div class="pull-left">
                    <a href="<?php echo base_url(); ?>assets/#" class="btn btn-default btn-flat">Profile</a>
                  </div> -->
                  <div class="pull-right">
                    <a href="<?php echo base_url('Auth/logout'); ?>" class="btn btn-default btn-flat">Sign out</a>
                  </div>
                </li>
              </ul>
            </li>
          </ul>
        </div>
      </nav>
    </header>