 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Masukkan Resi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_admin/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Masukkan Resi</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Masukkan Data Resi</h3>
              </div>
              <!-- /.card-header -->
    
              <!-- form start -->

              <?php foreach($user as $u){ ?>
              
              <form enctype="multipart/form-data" action="<?php echo site_url('c_admin/update_data_bayar')?>" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" value="<?php echo $u->id_bayar ?>" id="exampleInputEmail1" placeholder="client" name="id_bayar" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Resi Pengiriman</label>
                    <input type="text" class="form-control" value="<?php echo $u->no_resi ?>" id="exampleInputEmail1" value="<?php echo $u->no_resi ?>" placeholder="Masukkan No Resi" name="no_resi" required>
                  </div>
                  <div class="form-group">
                        <label>Verifikasi Pengiriman</label>
                        <select class="form-control" name="verifikasi" id="verifikasi_client">
                          <option value="<?php echo $u->verifikasi ?>" selected></option>
                          <option value="" selected>Silahkan Isi Verifikasi</option>
                          <option value="1">Pending</option>
                          <option value="2">Belum Dikirim</option>
                          <option value="3">Sudah Dikirim</option>
                        </select>
                  </div> 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit</button>
                </div>
              </form>
               <?php } ?>
            </div>
            <!-- /.card -->
            </div>
          </div>
        </div>
      </div>
    </section>