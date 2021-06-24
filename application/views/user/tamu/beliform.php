 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Masukkan Alamat</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_user/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Alamat</li>
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
                <h3 class="card-title">Masukkan Pemesanan</h3>
              </div>
              <!-- /.card-header -->
    
              <!-- form start -->
              
              <form action="<?php echo site_url('c_user/pesan')?>" method="post">

                <div class="card-body">
                  <div class="form-group">
                    <input type="hidden" class="form-control" value="<?php echo $u->id_user ?>" id="exampleInputEmail1" placeholder="client" name="id_user" required readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $u->nama_barang ?>" placeholder="Masukkan Nama Kategori" name="nama_kategori" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Penerima</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Penerima" value="<?php echo $u->nama_penerima ?>" name="deskripsi" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Penerima" value="<?php echo $u->harga ?>" name="deskripsi" required>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Beli</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          </div>
        </div>
      </div>
    </section>