<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Pembayaran</title>
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?=base_url();?>/asset/jualan/assets/css/style-liberty.css">
  <!-- Template CSS -->
  <link href="//fonts.googleapis.com/css?family=Oswald:300,400,500,600&display=swap" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,900&display=swap" rel="stylesheet">
  <!-- Template CSS -->

</head>
<body>
<section class="w3l-banner-slider-main inner-pagehny">
  <div class="breadcrumb-infhny">

    <div class="top-header-content">

      <header class="tophny-header">
        <div class="container-fluid">
          <div class="top-right-strip row">
            <!--/left-->
            <div class="top-hny-left-content col-lg-6 pl-lg-0">
            </div>
            <!--//left-->
            <!--/right-->
            <ul class="top-hnt-right-content col-lg-6">

              <li class="button-log usernhy">
                <a class="btn-open" href="#">
                  <span class="fa fa-user" aria-hidden="true"></span>
                </a>
              </li>
              <li class="transmitvcart galssescart2 cart cart box_1">
                <form action="#" method="post" class="last">
                  <input type="hidden" name="cmd" value="_cart">
                  <input type="hidden" name="display" value="1">
                  <button class="top_transmitv_cart" type="submit" name="submit" value="">
                    Keranjang
                    <span class="fa fa-shopping-cart"></span>
                  </button>
                </form>
              </li>
            </ul>
            <!--//right-->
            <div class="overlay-login text-left">
              <button type="button" class="overlay-close1">
                <i class="fa fa-times" aria-hidden="true"></i>
              </button>
              <div class="wrap">
                <h5 class="text-center mb-4">TokoSeribu</h5>
                <div class="login-bghny p-md-5 p-4 mx-auto mw-100">
                  <!--/login-form-->
                  <form action="#" method="post">
                    <div class="form-group">
                      <p class="login-texthny mb-2">No Telpon</p>
                      <input type="No Telpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="" required="">
                      <small id="emailHelp" class="form-text text-muted">Verifikasi No Telpon</small>
                    </div>
                    <button type="submit" class="submit-login btn mb-4">Login</button>

                  </form>
                  <!--//login-form-->
                </div>
                <!---->
              </div>
            </div>
          </div>
        </div>
        <!--/nav-->
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid serarc-fluid">
            <a class="navbar-brand" href="index.php">
             Fathiya Printing</a>
            <!-- if logo is image enable this   
                    <a class="navbar-brand" href="#index.html">
                      <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
                    </a> -->
            <!--/search-right-->
            <div class="search-right">
              <div id="search" class="pop-overlay">
                <div class="popup">

                  <form action="#" method="post" class="search-box">
                    <input type="search" placeholder="Keyword" name="search" required="required" autofocus="">
                    <button type="submit" class="btn">Search</button>
                  </form>

                </div>

                <a class="close" href="#">×</a>
              </div>
              <!-- /search popup -->
            </div>
            <!--//search-right-->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa fa-bars"> </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('C_user/index')?>">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('C_user/pembayaran')?>">Pembayaran</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('C_user/about')?>">About</a>
              </li>

              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('C_user/kontak')?>">Kontak</a>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('C_login/Logout')?>">Logout</a>
              </li>
            </ul>


            </div>
          </div>
        </nav>
        <!--//nav-->
      </header>
      <div class="breadcrumb-contentnhy">
        <div class="container">
          <nav aria-label="breadcrumb">
            <h2 class="hny-title text-center">Pembayaran</h2>
            <ol class="breadcrumb mb-0">
              <li><a href="<?php echo site_url('C_user/index')?>">Home</a>
                <span class="fa fa-angle-double-right"></span></li>
              <li class="active">Pembayaran</li>
            </ol>
          </nav>
        </div>
      </div>
    </div>
</section>

<section class="features-4">
  <div class="features4-block py-5">
    <div class="container py-lg-5">
      <h6>Pembayaran</h6>
      <h3 class="hny-title text-center"><span>Pemilihan BANK</span></h3>
      
      <div class="features4-grids text-center row mt-5">
        <div class="col-lg-3 col-md-6 features4-grid">
          <div class="features4-grid-inn">
            <span><img src="<?=base_url();?>/asset/build/credit/bri1.png" alt="Mastercard"></span>
            <h5><a href="#URL">BRI</a></h5>
            <p>No Rekening : 1212452252 <br>
              Nama : UDIN 
            </p>

          </div>
        </div>
        <div class="col-lg-3 col-md-6 features4-grid sec-features4-grid">
            <div class="features4-grid-inn">
              <span><img src="<?=base_url();?>/asset/build/credit/bni1.png" alt="Mastercard"></span>
              <h5><a href="#URL">BNI</a></h5>
              <p>No Rekening : 1212452252 <br>
              Nama : UDIN 
            </p>
  
            </div>
          </div>
          <div class="col-lg-3 col-md-6 features4-grid">
              <div class="features4-grid-inn">
<span><img src="<?=base_url();?>/asset/build/credit/mandiri1.png" alt="Mastercard"></span>
                <h5><a href="#URL">Mandiri</a></h5>
                <p>No Rekening : 1212452252 <br>
              Nama : UDIN 
            </p>
    
              </div>
            </div>
            <div class="col-lg-3 col-md-6 features4-grid">
                <div class="features4-grid-inn">
              <span><img src="<?=base_url();?>/asset/build/credit/visa.png" alt="Mastercard"></span>
                  <h5><a href="#URL">Barcode</a></h5>
                  <p>GoPay, LinkAja, Vivo<br>
             <img src="<?=base_url();?>/asset/build/credit/barcode.png" alt="Mastercard">
            </p>
      
                </div>
              </div>
            
      </div>
    </div>
  </div>
</section>
<!-- features-4 -->

  <!--/Upload Bayar-->
  <section class="w3l-team-main">
    <div class="team py-5">
      <div class="container py-lg-5">
        <h3 class="hny-title text-center">
            No Pembayaran : <?php $i=0; foreach($user as $u){ echo ''; $i++;  ?>(<?php echo $i ?>. <?php echo $u->no_acak ?>) <?php } ?>
           
  </h3>
  <center><h2>
            Harap Simpan Nomor Kode Pembayaran untuk Proses Verifikasi Barang yang akan Dibeli jika muncul 2 kode pembayaran anda telah melakukan 2 transaksi barang sekaligus
  </h2>
</center>
  <br>
  <br><br>
          <h3 class="hny-title text-center">
            Pembayaran <span>Form</span></h3>
                        <?php echo form_open_multipart('C_user/bayar');?>
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kode Pengiriman</label>
                    <input type="text" name="no_acak" class="form-control" id="exampleInputEmail1" placeholder="Kode Diatas">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pengirim</label>
                    <input type="text" name="nama_pengirim" class="form-control" id="exampleInputEmail1" placeholder="Nama Pengirim Bank anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tanggal Transfer</label>
                    <input type="date" name="tgl_transfer" class="form-control" id="exampleInputEmail1" placeholder="Tanggal">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">No Rekening</label>
                    <input type="text" name="no_rek" class="form-control" id="exampleInputEmail1" placeholder="No Rekening">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Bank</label>
                    <input type="text" name="nama_bank" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Bank Anda">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Penerima</label>
                    <input type="text" name="nama_penerima" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Penerima">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Alamat</label>
                    <input type="text" name="alamat" class="form-control" id="exampleInputEmail1" placeholder="Masukkan No Rekening">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Bukti Transfer</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="foto" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  </div>
                 <button type="submit" name="Simpan" value="Simpan" class="btn btn-primary">Simpan</button>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                 
                </div>
</div>
</div>
</section>

  <!--/team-sec-->
  <section class="w3l-team-main">
    <div class="team py-5">
      <div class="container py-lg-5">
          <h3 class="hny-title text-center">
            Produk <span>Pending</span></h3>
          <div class="row team-row mt-5">
            <table class="table table-bordered">
              <thead>
              <tr>
                <th>Nomor Pengiriman</th>
                <th>Tanggal Transfer</th>
                <th>Status</th>
                <th>No Resi</th>
              </tr> 
              <thead>
               <tbody> 
                    <?php foreach($user2 as $u){ ?>     
              <tr>
                <td><?php echo $u->no_acak ?></td>
                <td><?php echo $u->tgl_transfer ?></td>
                 <td><?php 
                    if($u->verifikasi =="2"){
                      echo "Sedang Di Proses";
                    }elseif($u->verifikasi =="1"){
                      echo "Sudah Dibayar";
                    } elseif($u->verifikasi =="3"){
                      echo "Sudah dikirim";
                    }else{
                      echo "Belum Dibayar";
                    }

                ?></td>
                <td><?php 
                    if($u->no_resi ==""){
                      echo "Belum Dikirim";
                    }else{
                      echo $u->no_resi;
                    }

                ?></td>
<?php } ?>
              </tr>
            </tbody>
                          <thead>
                 
              <tr>
                <th>Nama Barang</th>
                <th>Harga</th>
                <th>Status</th>
                <th>No Resi</th>
              </tr> 
              
              <thead>
            </table>
        </div>
      </div>


  </section>
  <!--//team-sec-->

  </body>

  </html>

<script src="<?=base_url();?>/asset/build/home/assets/js/jquery-3.3.1.min.js"></script>
<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->
<script src="<?=base_url();?>/asset/build/home/assets/js/jquery-2.1.4.min.js"></script>
<!--/login-->
<script>
    $(document).ready(function () {
      $(".button-log a").click(function () {
        $(".overlay-login").fadeToggle(200);
        $(this).toggleClass('btn-open').toggleClass('btn-close');
      });
    });
    $('.overlay-close1').on('click', function () {
      $(".overlay-login").fadeToggle(200);
      $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
      open = false;
    });
  </script>
<!--//login-->
<!-- //jQuery-Photo-filter-lightbox-portfolio-plugin -->
<script src="<?=base_url();?>/asset/build/home/assets/js/bootstrap.min.js"></script>