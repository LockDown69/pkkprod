 <title>E.Sarpras | Fitur Item Sarpras</title>

<?php echo form_open_multipart('item/cariItem'); ?>
  <div class="form-grup">
    <div class="box-header with-border">
     <div class="form-grup">
          <span class="new-button" >
                  <div class="col-xs-2" style="margin-top: 0px;width: 190px;padding-right: 4px;padding-left: 0px">
					                <input type="text" name="nama_item" placeholder="Cari Item" class="form-control">
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
                 <a class="btn btn-default " href="<?php echo base_url('item') ?>">
                 <span class="fa fa-refresh"></span>
                 </a>
           </span>
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

<div class="tab-base">


<td>
<div class="row text-center" style="margin-top: 20px;">
<?php foreach( $getItem->result() as $res ){ ?>
  <div class="col-md-4 pricing-featured">
    <div class="panel" style="margin-top: 10px;">
        <div class="pad-all bg-purple">
          Nama Barang
            <h4 class="mar-no text-light"><?php echo $res->nama_item;  ?></h4>
        </div>
          <div class="list-group bg-trans text-left pad-btm">
                            <!-- Deskripsi User -->
                            <a class="list-group-item">
                            <b> Keterangan: </b><?php echo substr($res->keterangan,0,27);?></a>
                          </div>
          <div class="panel-body">
            <span>
              <a data-toggle="modal" data-target="#modal-update<?php echo $res->id_item;?>" class=" btn btn-warning btn-rounded">
              <span class="fa fa-edit"></span>
              &nbsp;Edit
              </a>
            </span>
          <span>
            <a data-toggle="modal" data-target="#modal-delete<?php echo $res->id_item;?>" class=" btn btn-danger btn-rounded">
            <span class="fa fa-trash"></span>
            &nbsp;Hapus
            </a>
          </span>
          <span>
            <a data-toggle="modal" data-target="#modal-gambar<?php echo $res->id_item;?>" class=" btn btn-primary btn-rounded">
            <span class="fa fa-trash"></span>
            &nbsp;Gambar Item
            </a>
          </span>
          </div>
      </div>
  </div>

  <div class="modal" id="modal-gambar<?php echo $res->id_item;?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
                                <div class="modal-dialog ">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                                    </div>
                                    <div class="modal-body">
                                      <center>
                                                <img width="500px" height="500px" src="<?php echo base_url()?>assets/img/<?php echo $res->gambar_item ?>">
                                       </center>
                                    </div>
                                  </div>
                                </div>
                              </div>


                    <form action="<?php echo site_url('item/editItem') ?>" method="post" enctype="multipart/form-data">
                    <div class="modal fade animated bounceIn" id="modal-update<?php echo $res->id_item;?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">

                      <!--Modal header-->
                      <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                          <h4 class="modal-title">Edit Pajak</h4>
                      </div>
                      <input type="hidden" name="id" value="<?php echo $res->id_item; ?>" />
                      <!--Modal body-->
                      <div class="panel-body">
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <label class="control-label">Nama item</label>
                              <input type="text" class="form-control" value="<?php echo $res->nama_item ?>" name="nama_item">
                            </div>
                          </div>
                          </div>
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="form-group">
                            <label>Keterangan</label>
                            <textarea class="form-control" placeholder="Masukkan Keterangan" rows="19" style="resize: vertical; height:150px" name="keterangan"><?php echo $res->keterangan ?></textarea>
                          </div>
                        </div>
                    </div>
                      <div class="row">
                        <div class="form-group col-sm-6  ">
                          <label for="" class="control-label">Gambar Barang</label><span class="red">*</span>
                           <input  type="file" value="<?php echo $res->gambar_item; ?>" name="gambar_item" id="userfile"  onchange="tampilkanPreview1(this,'preview1')"/>
                           <p class="help-block">
                              <?php //cek file apakah kosong?
                              if (empty($res->gambar_item)) {
                                echo 'Belum Ada File Gambar Pada Item : ';
                              }else{
                                echo 'Gambar Saat Ini : ';
                              }?>
                            </p>
                      </div>
                      <div class="form-group col-sm-6  ">
                        <label for="" class="control-label"></label>Preview Foto Profile
                         <img src="<?php echo base_url()?>assets/img/<?php echo $res->gambar_item ?>" id="preview1" width="150px" />
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


                <div class="modal" id="modal-delete<?php echo $res->id_item;?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
                                              <div class="modal-dialog ">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                                                  </div>
                                                  <div class="modal-body">

                                                            <p>Apakah anda yakin ingin menghapus data Item『<b><?php echo $res->nama_item ?></b>』</p>
                                                  </div>
                                                  <div class="modal-footer">
                                                            <button class="btn btn-default btn-rounded" data-dismiss="modal" type="button">Batal</button>
                                                            <a class="btn btn-danger btn-rounded" href="<?php echo base_url('item/hapusItem/'. $res->id_item) ?>">Hapus Data!!</a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>


                <?php } // end foreach ?>

                </table>
              </div>
          <hr class="new-section-sm bord-no">



<!-- Start Modal Tambah -->
<?php echo form_open_multipart('item/simpanItem');?>
<div class="modal" id="tambahdata" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
  <!--Modal header-->
  <div class="modal-header">
      <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
      <h4 class="modal-title">Tambah Data</h4>
  </div>

  <!--Modal body-->
  <div class="panel-body">
  <div class="tab-content">
    <div class="row">
      <div class="col-sm-12">
        <div class="form-group">
          <label class="control-label">Nama Item</label>
          <input type="text" class="form-control" name="nama_item">
        </div>
      </div>
      </div>
  <div class="row">
    <div class="col-sm-12">
      <div class="form-group">
        <label>Keterangan</label>
        <textarea class="form-control" placeholder="Masukkan Keterangan" rows="19" style="resize: vertical; height:150px" name="keterangan"></textarea>
      </div>
    </div>
</div>
<div class="row">
  <div class="col-sm-6">
    <div class="form-group">
      <label for="" class="control-label">Foto Gambar</label>
      <input  type="file" name="gambar_item" id="userfile" onchange="tampilkanPreview(this,'preview')"/>
    </div>
  </div>
  <div class="form-group col-sm-6  ">
    <label for="" class="control-label"></label>Preview
     <img id="preview" width="150px" />
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
<!-- End Modal Tambah -->
