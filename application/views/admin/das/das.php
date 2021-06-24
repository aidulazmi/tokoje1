 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_admin/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

     <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
                <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php
                    $jumlah = $this->db->query("SELECT count(*) as jumlah_data FROM barang")->result();
                    foreach ($jumlah as $jow) {
                    echo "<h3>$jow->jumlah_data</h3>";                
                    }
                ?>

                <p>Informasi Barang</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-handshake"></i>
              </div>
              <a href="<?php echo site_url('C_admin/barang')?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php
                    $jumlah = $this->db->query("SELECT count(*) as jumlah_data FROM user")->result();
                    foreach ($jumlah as $jow) {
                    echo "<h3>$jow->jumlah_data</h3>";                
                    }
                ?>

                <p>Informasi Data User</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-weight-hanging"></i>
              </div>
              <a href="<?php echo site_url('C_admin/user')?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php
                    $jumlah = $this->db->query("SELECT count(*) as jumlah_data FROM kategori")->result();
                    foreach ($jumlah as $jow) {
                    echo "<h3>$jow->jumlah_data</h3>";                
                    }
                ?>

                <p>Kategori</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-tools"></i>
              </div>
              <a href="<?php echo site_url('C_admin/kategori')?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-light">
              <div class="inner">
                <?php
                    $jumlah = $this->db->query("SELECT count(*) as jumlah_data FROM bayar")->result();
                    foreach ($jumlah as $jow) {
                    echo "<h3>$jow->jumlah_data</h3>";                
                    }
                ?>

                <p>Informasi Bayar</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-hands-helping"></i>
              </div>
              <a href="<?php echo site_url('C_admin/bayar')?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-secondary">
              <div class="inner">
                <?php
                    $jumlah = $this->db->query("SELECT count(*) as jumlah_data FROM pesan")->result();
                    foreach ($jumlah as $jow) {
                    echo "<h3>$jow->jumlah_data</h3>";                
                    }
                ?>

                <p>Informasi Pemesanan</p>
              </div>
              <div class="icon">
                <i class="nav-icon fas fa-toolbox"></i>
              </div>
              <a href="<?php echo site_url('C_admin/pesan')?>" class="small-box-footer">Lihat <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
        </div>
        <!-- /.row -->
      </div>
    </section>
</div>