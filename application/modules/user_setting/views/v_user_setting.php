
  <?php foreach( $getUser->result() as $res ){ ?>
<div id="page-content">
        <div class="panel">
  <div class="panel-body">
      <div class="fixed-fluid">
          <div class="fixed-md-200 pull-sm-left fixed-right-border">

              <!-- Simple profile -->
              <div class="text-center">
                  <div class="pad-ver">
                      <img src="<?php echo base_url(); ?>assets/img/<?php echo $res->foto?>" class="img-lg img-circle" alt="Profile Picture">
                  </div>
                  <h4 class="text-lg text-overflow mar-no"><?php echo $res->nama;  ?></h4>
                  <spann><?php echo $res->email; ?></span>

                  <a data-toggle="modal" data-target="#modal-edit<?php echo $res->id_user;?>">
                  <button class="btn btn-block btn-success btn-lg">Edit</button></a></br>
                  <a data-toggle="modal" data-target="#modal-logout">
                  <button class="btn btn-block btn-danger btn-lg">Logout</button></a>
              </div>
              <hr>

              <!-- Profile Details -->

          </div>
          <form action="<?php echo site_url('user_setting/editDataUser') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal" id="modal-edit<?php echo $res->id_user;?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">

                      <!--Modal header-->
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                          <h4 class="modal-title">Edit Pajak</h4>
                      </div>
                      <input type="hidden" name="id" value="<?php echo $res->id_user; ?>" />
                      <!--Modal body-->
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label class="control-label">Nama Pengguna</label>
    					                    <textarea name="nama" rows="3" class="form-control"><?php echo $res->nama ?></textarea>
                            </div>
                          </div>
                          </div>
                      <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Username</label>
                            <input type="text" class="form-control" value="<?php echo $res->username ?>" name="username">
                          </div>
                        </div>
                        <div class="form-group col-sm-6  ">
                          <label for="" class="control-label">Foto Pengguna</label><span class="red">*</span>
                           <input  type="file" value="<?php echo $res->foto; ?>" name="foto" id="userfile"  onchange="tampilkanPreview1(this,'preview1')"/>
                           <p class="help-block">
                              <?php //cek file apakah kosong?
                              if (empty($res->foto)) {
                                echo 'Belum Ada File Gambar Pada Item : ';
                              }else{
                                echo 'Gambar Saat Ini : ';
                              }?>
                            </p>
                      </div>
                        </div>
                        <div class="row">
                        <div class="col-sm-6">
                          <div class="form-group">
                            <label class="control-label">Email</label>
                            <input type="text" class="form-control" value="<?php echo $res->email ?>" name="email">
                          </div>
                        </div>
                          <div class="form-group col-sm-6  ">
                            <label for="" class="control-label"></label>Preview Foto Profile
                             <img src="<?php echo base_url()?>assets/img/<?php echo $res->foto ?>" id="preview1" width="200px" height="200px"/>
                          </div>
                          </div>
                         </div>

                      <!--Modal footer-->
                      <div class="modal-footer">
                          <button data-dismiss="modal" class="btn btn-default btn-rounded" type="button">Tutup</button>
                          <button class="btn btn-primary btn-rounded">Simpan Data</button>
                      </div>
                    </div>
                    </div>
                  </div>
                  </form>
          <div class="fluid">
          <div class="row pad-btm">
			<div class="col-sm-6 toolbar-left">
				<a data-toggle="modal" data-target="#tambahdata	">
					<button class=" btn btn-success">Tambah</button>
				</a>
			</div>
		</div>
          <div class="table-responsive">
			<table class="table table-striped">
				<thead>
					<tr>
						<th>Nama Peminjaman</th>
						<th>Nama Barang</th>
						<th>Status</th>
						<th>Catatan</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach( $joinPeminjamanUser->result() as $res ){ ?>
					<tr>
						<td><?php echo $res->nama?></td>
						<td><?php echo $res->nama_barang?></td>
						<td><?php echo $res->tanggal?></td>
						<td><?php echo $res->catatan?></td>
						<td>
							<a class="btn btn-warning" data-toggle="modal" data-target="#modal-update<?php echo $res->id_peminjaman ?>"><i class="fa fa-fw fa-edit"></i>Ubah</a></td>
					</tr>

									<form action="<?php echo site_url('user_setting/editDataPinjamUser') ?>" method="post" enctype="multipart/form-data">
            <div class="modal fade animated bounceIn" id="modal-update<?php echo $res->id_peminjaman;?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
            <div class="modal-dialog">
            <div class="modal-content">

              <!--Modal header-->
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                  <h4 class="modal-title">Edit Pajak</h4>
              </div>
              <input type="hidden" name="id" value="<?php echo $res->id_peminjaman; ?>" />
              <!--Modal body-->
              <div class="panel-body">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="form-group">
                        <label class="control-label">catatan</label>
                            <textarea name="catatan" rows="3" class="form-control"><?php echo $res->catatan ?></textarea>
                      </div>
                    </div>
					</div>
                     </div>

              <!--Modal footer-->
              <div class="modal-footer">
                  <button data-dismiss="modal" class="btn btn-default btn-rounded" type="button">Tutup</button>
                  <button class="btn btn-primary btn-rounded">Simpan Data</button>
              </div>
            </div>
            </div>
          </div>
		  </form>
		  
				<?php } // end foreach ?>
				</tbody>
			</table>
		</div>
        </div>
      </div>
  </div>
</div>

<div id="modal-logout" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                        <h4 class="modal-title" id="mySmallModalLabel">Keluar</h4>
                    </div>
                    <div class="modal-body">
                        <p>Apakah  pengguna <?php echo $res->nama ?> ingin keluar?</p>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <a class="btn btn-danger" href="<?php echo base_url('login/logoutApp') ?>">Keluar</a>
                    </div>
                </div>
            </div>
        </div>
        <?php echo form_open_multipart('user_setting/simpanPinjamUser');?>
<div class="modal fade animated " id="tambahdata" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <!--Modal header-->
  <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
      <h4 class="modal-title">Tambah Data</h4>
  </div>

  <!--Modal body-->
  <div class="panel-body">
    <div class="row">
      <div class="col-sm-12">
           <label>Nama Barang:</label>
             <select class="selectpicker" data-live-search="true" name="id_barang" data-width="100%">
  <?php foreach ($getBarang ->result() as $barang){?>
  <option value="<?php echo $barang->id_barang;?>"><?php echo $barang->nama_barang; ?> </option>
            <?php
              }
              ?>
          </select>
	</div>
			</div>
	<div class="row">
    <div class="col-sm-12">
         <label>Nama Peminjam:</label>
           <select class="selectpicker" data-live-search="true" name="id_user" data-width="100%">
    <?php foreach ($getUser ->result() as $user){?>
    <option value="<?php echo $user->id_user;?>"><?php echo $user->nama; ?> </option>
          <?php
            }
            ?>
        </select>
    </div>
  </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="form-group">
            <label>catatan</label>
            <textarea class="form-control" placeholder="Masukkan catatan" rows="19" style="resize: vertical; height:100px" name="catatan"></textarea>
                                </div>
        </div>
        </div>
                            </div>

  <!--Modal footer-->
  <div class="modal-footer">
      <button data-dismiss="modal" class="btn btn-default btn-rounded" type="button">Close</button>
      <button class="btn btn-primary btn-rounded">Save changes</button>
  </div>
</div>
</div>
</div>
<?php echo form_close()?>

</div>
                    <?php } // end foreach ?>
                    <script type="text/javascript">


function tampilkanPreview(userfile,idpreview)
{
  var gb = userfile.files;
  for (var i = 0; i < gb.length; i++)
  {
    var gbPreview = gb[i];
    var imageType = /image.*/;
    var preview=document.getElementById(idpreview);
    var reader = new FileReader();
    if (gbPreview.type.match(imageType))
    {
      //jika tipe data sesuai
      preview.file = gbPreview;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview);
    }
      else
      {
        //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
      }
  }
}
function tampilkanPreview1(userfile,idpreview1)
{
  var gb = userfile.files;
  for (var i = 0; i < gb.length; i++)
  {
    var gbPreview1 = gb[i];
    var imageType = /image.*/;
    var preview1=document.getElementById(idpreview1);
    var reader = new FileReader();
    if (gbPreview1.type.match(imageType))
    {
      //jika tipe data sesuai
      preview1.file = gbPreview1;
      reader.onload = (function(element)
      {
        return function(e)
        {
          element.src = e.target.result;
        };
      })(preview1);
      //membaca data URL gambar
      reader.readAsDataURL(gbPreview1);
    }
      else
      {
        //jika tipe data tidak sesuai
        alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
      }
  }
}
</script>

