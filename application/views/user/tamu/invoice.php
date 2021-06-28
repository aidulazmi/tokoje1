<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fathiya Printing</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Invoice</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_user/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  

    <section class="content">
      <div class="container-fluid">
         
        <div class="row">
           
          <div class="col-12">
            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->

              <div class="row">
                <div class="col-12">
                  <h4>
                    <i class="fas fa-globe"></i> Fathiya Printing
                    <small class="float-right">Tanggal: <?php echo date("d-m-y");?></small>
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-4 invoice-col">
                  From
                  <address>
                    <strong>Fathiya Printing</strong><br>
                  </address>
                </div>
                <!-- /.col -->

              </div>
              <!-- /.row -->

              <!-- Table row -->
              <div class="row">
                <div class="col-12 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>Nama Barang</th>
                      <th>Harga</th>
                      <th>Jumlah</th>
                      <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                      <?php foreach($user as $u){ ?>
                    <tr>
                      <th><?php echo $u->nama_barang ?></th>
                      <th><?php echo $u->harga ?></th>
                      <th><?php echo $u->jumlah ?></th>
                      <th><a class="btn btn-danger btn-sm" href="<?php echo site_url('C_invoice/hapus_pesan/'.$u->id_pesan);?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                      </a> </th>
                    </tr>
                     <?php } ?>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->


              </div>
              <!-- /.row -->

              <div class="row">
                <!-- accepted payments column -->
                <div class="col-6">

                </div>
                <!-- /.col -->
                <div class="col-6">
                  <p class="lead">Tanggal Pembelian <?php echo date("d-m-y");?></p>

                  <div class="table-responsive">
                    <table class="table">
                      <tr>

                        <th style="width:50%">Total Belanja:</th>
                        <td> <?php foreach($user2 as $u){ ?> Rp. <?php echo $u->hargg ?> <?php } ?></td>
                      </tr>
                      <tr>
                        <th></th>
                        <td><a href="<?php echo site_url('C_user/Pembayaran')?>" class="btn btn-app bg-danger">
                          <i class="fas fa-inbox"></i> Lakukan Pembayaran
                          </a></td>
                      </tr>
                    </table>
                  </div>
                </div>
                <!-- /.col -->
              </div>
          </div><!-- /.col -->
          
        </div><!-- /.row -->

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

</div>
</div>
</div>
</section>
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>

<!-- jQuery -->
<script src="<?=base_url();?>/asset/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?=base_url();?>/asset/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?=base_url();?>/asset/admin/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=base_url();?>/asset/admin/dist/js/demo.js"></script>
</body>
</html>
