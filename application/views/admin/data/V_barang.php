  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo site_url('C_admin/index')?>">Home</a></li>
              <li class="breadcrumb-item active">Informasi Barang</li>
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
                    Tambah Data Barang</button>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>

                  <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Foto Utama</th>
                    <th>Foto Kedua</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php $i=0; foreach($user as $u){ echo ''; $i++; ?>
                  <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $u->nama_barang ?></td>
                    <td><?php echo $u->deskripsi ?></td>
                    <td>Rp. <?php echo $u->harga ?></td>
                    <td>
                      <a href="<?=base_url()?>uploads/barang/<?=$u->foto1;?>" data-toggle="lightbox" data-title="gambarawallwo" data-gallery="gallery" width="100%" height="100%">
                      <img src="<?=base_url()?>uploads/barang/<?=$u->foto1;?>" width="100" height="100" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                    </td>

                    <td>
                      <a href="<?=base_url()?>uploads/barang/<?=$u->foto2;?>" data-toggle="lightbox" data-title="gambar ke dua" data-gallery="gallery" width="100%" height="100%">
                      <img src="<?=base_url()?>uploads/barang/<?=$u->foto2;?>" width="100" height="100" class="img-fluid mb-2" alt="white sample"/>
                    </a>
                    </td>

                    <td>

                      <a class="btn btn-danger btn-sm" href="<?php echo site_url('C_admin/hapus_barang/'.$u->id_barang);?>" onclick="return confirm('Anda yakin mau menghapus item ini ?')">
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
                    <th>Nama Barang</th>
                    <th>Deskripsi</th>
                    <th>Harga</th>
                    <th>Foto Utama</th>
                    <th>Foto Kedua</th>
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



        <!-- Tambah Kategori -->
        <div class="modal fade" id="modal-primary">
        <div class="modal-dialog">
          <div class="modal-content bg-primary">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Data Kategori</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <form enctype="multipart/form-data" action="<?php echo site_url('C_admin/simpan_barang')?>" method="POST">
                <div class="card-body">
                  <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="id_kategori" id="id_kategori">
                          <option value="" selected>Silahkan Isi Kategoti Barang</option>
                            <?php                                
                              foreach ($user2 as $row) {  
                              echo "<option value='".$row->id_kategori."'>".$row->nama_kategori."</option>";
                              }
                            ?>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Barang</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Nama Nama Barang" name="nama_barang" required>
                  </div>

                  <div class="form-group">
                    <label for="exampleInputEmail1">Deskripsi</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Deskripsi" name="deskripsi" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Harga(Rp)</label>
                    <input type="text" class="form-control" onkeyup="sum();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Masukkan Harga" name="harga" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah</label>
                    <input type="text" class="form-control" onkeyup="sum();" onkeypress="return event.charCode >= 48 && event.charCode <=57" id="exampleInputEmail1" placeholder="Masukkan Jumlah" name="stock" required>
                  </div>
                  

                  <div class="form-group">
                    <label for="exampleInputFile">Foto1</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="foto1" class="custom-file-input" id="exampleInputFile" onchange="readURL(this);">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="text-center">
                            <img id="blah" class="profile-user-img img-fluid img-circle"
                                 src="<?=base_url();?>/asset/admin/avatar(1).png"
                                 alt="your image">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto2</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="foto2" class="custom-file-input" id="exampleInputFile" onchange="readURL2(this);">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="text-center">
                            <img id="blah2" class="profile-user-img img-fluid img-circle"
                                 src="<?=base_url();?>/asset/admin/avatar(1).png"
                                 alt="your image">
                      </div>
                    </div>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Foto 3</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="foto3" class="custom-file-input" id="exampleInputFile" onchange="readURL3(this);">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="text-center">
                            <img id="blah3" class="profile-user-img img-fluid img-circle"
                                 src="<?=base_url();?>/asset/admin/avatar(1).png"
                                 alt="your image">
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Foto 4</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="foto4" class="custom-file-input" id="exampleInputFile" onchange="readURL4(this);">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="text-center">
                            <img id="blah4" class="profile-user-img img-fluid img-circle"
                                 src="<?=base_url();?>/asset/admin/avatar(1).png"
                                 alt="your image">
                      </div>
                    </div>
                  </div>
                                    
                </div>
                <!-- /.card-body -->
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-light" data-dismiss="modal">Tutup</button>
              <button type="Submit" name="Simpan" class="btn btn-outline-light">Simpan</button>
            </div>

            </form>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
      <!-- /.modal -->


<script type="text/javascript">
       function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
         function readURL2(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah2')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL3(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah3')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        function readURL4(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah4')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        } 
    </script>