  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pembayaran</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_admin/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Pembayaran</li>
            </ol>
          </div>
        </div>
      </div>
    </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <button type="button" class="btn btn-block btn-primary" data-toggle="modal" data-target="#modal-primary"><i class="fas fa-file-import"> </i>   
                    Data Pembayaran</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>No Pengiriman</th>
                    <th>Nama Pengirim</th>
                    <th>Tanggal Transfer</th>
                    <th>No Rekening</th>
                    <th>Foto</th>
                    <th>Nama Penerima</th>
                    <th>No Resi</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; foreach($user as $u){ echo ''; $i++; ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $u->no_acak ?></td>
                    <td><?php echo $u->nama_pengirim ?></td>
                    <td><?php echo $u->tgl_transfer ?></td>
                    <td><?php echo $u->no_rek ?></td>
                    <td>
                      <a href="<?=base_url()?>uploads/bayar/<?=$u->foto;?>" data-toggle="lightbox" data-title="gambarawallwo" data-gallery="gallery" width="100%" height="100%">
                      <img src="<?=base_url()?>uploads/bayar/<?=$u->foto;?>" width="100" height="100" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                    </td>
                    <td><?php echo $u->nama_penerima ?></td>
                    <td><?php 
                    if($u->no_resi ==""){
                      echo "Belum Dikirim";
                    }else{
                      echo $u->no_resi;
                    }

                ?></td>
                    <td>
                      <a class="btn btn-info btn-sm" href="<?php echo site_url('C_admin/edit_bayar/'.$u->id_bayar);?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Resi
                      </a>
                      <a class="btn btn-danger btn-sm" href="<?php echo site_url('C_admin/hapus_bayar/'.$u->id_bayar);?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
                              <i class="fas fa-trash">
                              </i>
                              Hapus
                      </a> 
                    
                      
                    </td>
                  </tr>
                  <?php } ?>
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>No</th>
                    <th>No Pengiriman</th>
                    <th>Nama Pengirim</th>
                    <th>Tanggal Transfer</th>
                    <th>No Rekening</th>
                    <th>Foto</th>
                    <th>Nama Penerima</th>
                    <th>No Resi</th>
                    <th>Action</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->

