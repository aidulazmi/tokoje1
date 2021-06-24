<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?=base_url();?>/asset/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Fathiya Printing</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?=base_url();?>/asset/admin/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $this->session->userdata('username')?></a>
        </div>
      </div>
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-header">Data Master</li>
          <li class="nav-item">
            <a href="<?php echo site_url('C_admin/index')?>" class="nav-link js-scroll-trigger">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('C_admin/barang')?>" class="nav-link js-scroll-trigger">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Data Barang
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="<?php echo site_url('C_admin/kategori')?>" class="nav-link js-scroll-trigger">
              <i class="nav-icon fas fa-handshake"></i>
              <p>
                Data Kategori
              </p>
            </a>
          </li>
          
          <li class="nav-header">Pelanggan</li>
          <li class="nav-item">
            <a href="<?php echo site_url('')?>" class="nav-link js-scroll-trigger">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Data Pesanan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('')?>" class="nav-link js-scroll-trigger">
              <i class="nav-icon fas fa-tools"></i>
              <p>
                Data Pembayaran
              </p>
            </a>
          </li>
          <li class="nav-header">Control</li>
          <li class="nav-item">
            <a href="<?php echo site_url('C_admin/user')?>" class="nav-link js-scroll-trigger">
               <i class="nav-icon fas fa-user"></i>
              <p>Pelanggan</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?php echo site_url('C_login/logout')?>" class="nav-link js-scroll-trigger">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
