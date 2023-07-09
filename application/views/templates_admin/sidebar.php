<body class="hold-transition skin-black sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>CV</b>school</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url('assets/assets_admlte/dist/img/').$this->session->userdata('photo') ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
        <br>
          <p><?php echo $this->session->userdata('nama') ?></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN MENU</li>
        <li>
          <a href="<?php echo base_url('admin/dashboard') ?>">
          <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/konfirmasi') ?>">
          <i class="fa fa-check-square-o"></i> <span>Registration Confirmation</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/dataGuru') ?>">
          <i class="fa fa-graduation-cap"></i> <span>Teacher</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/dataSiswa') ?>">
          <i class="fa fa-user"></i> <span>Student</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/schedule') ?>">
          <i class="fa fa-calendar-plus-o"></i> <span>Schedule</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('admin/mySchedule') ?>">
          <i class="fa fa-calendar-check-o"></i> <span>My Schedule</span>
          </a>
        </li>
        <li>
          <a href="<?php echo base_url('login/logout') ?>">
            <i class="fa fa-sign-out"></i> <span>Log out</span>
          </a>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>