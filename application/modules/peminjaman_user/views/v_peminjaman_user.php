 <title>E.Sarpras | Fitur Peminjaman</title>

<?php echo form_open_multipart('peminjaman/cariPinjam'); ?>
  <div class="form-grup">
    <div class="box-header with-border">
     <div class="form-grup">
          <!-- <span class="new-button" >
                  <div class="col-xs-2" style="margin-top: 0px;width: 190px;padding-right: 4px;padding-left: 0px">
                    <select class="selectpicker" data-live-search="true" name="nama_barang" data-width="100%">
         <?php foreach ($getBarang ->result() as $barang){?>

         <option value="<?php echo $barang->id_barang;?>"><?php echo $barang->nama_barang; ?> </option>
                   <?php
                     }
                     ?>
                 </select>
					        </div>
           </span>
           <span class="new-button" >
                   <div class="col-xs-2" style="margin-top: 0px;width: 190px;padding-right: 4px;padding-left: 0px">
                          <input type="text" name="nama_peminjam" placeholder="Cari Nama Peminjam" class="form-control">
                  </div>
            </span>
           <span class="new-button">
             <a>
            <button class="btn btn-success btn-flat">
              <i class="fa fa-filter"></i>
            </button>
          </a>
           </span>
           <span class="new-button">
                 <a class="btn btn-default " href="<?php echo base_url('peminjaman') ?>">
                 <span class="fa fa-refresh"></span>
                 </a>
           </span> -->
            <span class="form-group pull-right">
              <div  class="col-xs-2" style="margin-top: 0px;width: 100px;padding-right: 4px;padding-left: 0px">
              <a data-toggle="modal" data-target="#tambahdata" class=" btn btn-success">
              <span class="fa fa-plus"></span>
              &nbsp;Tambah
              </a>
            </div>
            </span>
          </div>
        </div>
      </div>
<?php echo form_close(); ?>

<div class="panel" style="margin-top: 50px;">
    <!-- <div class="panel-heading">
        <h3 class="panel-title"></h3>
    </div> -->
    <div class="panel-body">
        <table id="demo-foo-accordion" class="table table-striped table-bordered" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th data-toggle="true">Nama Barang</th>
                    <th data-hide="all">Jumlah Pinjam</th>
                    <th data-hide="all">Nama Peminjam</th>
                    <th>jam</th>
                    <th>status</th>
                    <th data-hide="all">Gambar</th>
                    <th data-hide="all">Keterangan</th>
                    <th>Opsi</th>
                </tr>
            </thead>
            <tbody>
                   <?php foreach( $joinPeminjaman->result() as $res ){ ?>
                     <tr>
                         <td><?php echo $res->nama_barang?></td>
                         <td><?php echo $res->jumlah_pinjam?></td>
                         <td><?php echo $res->nama?></td>
                         <td><?php echo $res->jam?></td>
                         <td><?php
                         if($res->status=='0'){
                           ?> <div class="label label-table label-danger">Dipinjam</div> <?php
                         }else{
                          ?> <div class="label label-table label-success">Kembali</div> <?php
                         } ?></td>
                         <td>
                           <a data-toggle="modal" class="btn btn-primary btn-bg" data-target="#modal-gambar-barang<?php echo $res->id_peminjaman ?>"><i class="fa fa-fw fa fa-cubes"></i>Barang</a>
                           <a data-toggle="modal" class="btn btn-primary btn-bg" data-target="#modal-gambar-kpelajar<?php echo $res->id_peminjaman ?>"><i class="fa fa-fw fa-address-card"></i>Kartu Pelajar</a>
                       </td>
                          <td><?php echo $res->catatan?></td>
                         <td>
                          <div class="btn-group">
                         	 <div class="dropdown">
                         	  <button class="btn dropdown-toggle" data-toggle="dropdown" type="button">
                         	   Opsi | <i class="dropdown-caret"></i>
                         	  </button>
                         <ul class="dropdown-menu dropdown-menu-right">
                         <li>
                          <?php
                          if($res->status=='0'){}else{ ?>
                          <li><a class="btn btn-danger" data-toggle="modal" data-target="#modal-delete<?php echo $res->id_peminjaman ?>"><i class="fa fa-fw fa-trash"></i>Hapus</a></li>
                          <?php } ?>
                          </li>
 					                <li>
                          <li><a class="btn btn-warning" data-toggle="modal" data-target="#modal-update<?php echo $res->id_peminjaman ?>"><i class="fa fa-fw fa-edit"></i>Ubah</a></li>
                          </li>
                         	</ul>
                         </div>
                        </div>
                      </td>
                     </tr>
            </tbody>

            <form action="<?php echo site_url('peminjaman_user/editPinjam') ?>" method="post" enctype="multipart/form-data">
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
                    <label class="control-label">Status</label>
                    <select class="selectpicker" name="status" data-width="100%">
                       <?php
                       if($res->status=='0'){ ?>
                       <option selected="selected" value="0">Dipinjam</option>
                       <option value="1">Sudah Kembali</option>
                     <?php }
                     else{?>
                       <option selected="selected" value="1">Sudah Kembali</option>
                       <option value="0">Dipinjam</option>
                       <?php } ?>
                   </select>
                  </div>
                  </div>
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

            <div class="modal" id="modal-gambar-barang<?php echo $res->id_peminjaman;?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
                                          <div class="modal-dialog ">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                                              </div>
                                              <div class="modal-body">
                                                <center>
                                                          <img width="500px" height="500px" src="<?php echo base_url()?>assets/img/<?php echo $res->gambar_barang ?>">
                                                 </center>
                                              </div>
                                            </div>
                                          </div>
                                        </div>

            <div class="modal" id="modal-gambar-kpelajar<?php echo $res->id_peminjaman;?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
              <div class="modal-dialog ">
                <div class="modal-content">
                 <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                   </div>
                    <div class="modal-body">
                     <center>
                      <img width="500px" height="500px" src="<?php echo base_url()?>assets/img/<?php echo $res->gambar_kpelajar ?>">
                     </center>
                    </div>
                  </div>
              </div>
            </div>

<div class="modal fade animated " id="modal-delete<?php echo $res->id_peminjaman;?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
                                      <div class="modal-dialog ">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                                          </div>
                                          <div class="modal-body">

                                                    <p>Apakah anda yakin ingin menghapus data akun 『<b><?php echo $res->nama_barang ?></b>』 ?</p>
                                          </div>
                                          <div class="modal-footer">
                                                    <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                                    <a class="btn btn-danger" href="<?php echo base_url('peminjaman/hapusPinjam/'.$res->id_peminjaman) ?>">Hapus Data!!</a>
                                                </div>
                                        </div>
                                      </div>
                                    </div>
        <?php } // end foreach ?>

        </table>
      </div>
    </div>
<?php echo form_open_multipart('peminjaman/simpanPinjam');?>
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
      <div class="col-sm-6">
           <label>Nama Barang:</label>
             <select class="selectpicker" data-live-search="true" name="id_barang" data-width="100%">
  <?php foreach ($getBarang ->result() as $barang){?>
  <option value="<?php echo $barang->id_barang;?>"><?php echo $barang->nama_barang; ?> </option>
            <?php
              }
              ?>
          </select>
    </div>
    <div class="col-sm-6">
         <label>Nama Barang:</label>
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
    <div class="col-sm-6">
      <div class="form-group">
        <label class="control-label">Jumlah Pinjam</label>
        <input type="number" class="form-control" name="jumlah_pinjam">
      </div>
    </div>
    <div class="col-sm-6">
      <div class="form-group">
        <label class="control-label">Jam Pinjam</label>
        <input type="time" class="form-control" name="jam">
      </div>
    </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <label class="control-label">Status</label>
          <select class="selectpicker" name="status" data-width="100%">
            <option selected="selected" readonly value="0">Dipinjam</option>
       </select>
      </div>
      <div class="col-sm-6">
        <div class="form-group">
          <label for="" class="control-label">Foto Gambar</label><span class="red">*</span>
          <input  type="file" name="gambar_kpelajar" id="userfile" onchange="tampilkanPreview(this,'preview')"/>
        </div>
      </div>
      </div>
      <div class="row">
        <div class="col-sm-6 ">
          <div class="form-group">
            <label>catatan</label>
            <textarea class="form-control" placeholder="Masukkan catatan" rows="19" style="resize: vertical; height:300px" name="catatan"></textarea>
                                </div>
        </div>
        <div class="form-group col-sm-6">
          <label for="" class="control-label"></label>Preview Foto Profile
           <img id="preview" width="220px" />
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
