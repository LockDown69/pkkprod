<div class="tab-base">

  <div class="row pad-btm">
    <div class="col-sm-6 toolbar-left">
      <a data-toggle="modal" data-target="#modal-tambah">
        <button class=" btn btn-success">Tambah</button>
      </a>
    </div>
  </div>
  <!---------------------------------->


  <div class="row">
    <?php foreach( $getUser->result() as $res ){ ?>
    <div class="col-sm-4 col-md-3">
      <div class="panel pos-rel">
        <div class="pad-all text-center">
          <a href="#">
            <img alt="Profile Picture" class="img-lg img-circle mar-ver"
              src="<?php echo base_url(); ?>assets/img/<?php echo $res->foto?>">
            <p class="text-lg text-semibold mar-no text-main"><?php echo $res->nama;  ?></p>
          </a><br />
          <p class="pad-btm bord-bt text-sm text-left"><?php echo $res->username;  ?></p>
          <p class="pad-btm bord-bt text-sm text-left"><?php echo $res->email;  ?></p>
          <div class="text-center pad-to">
            <div class="btn-group">
              <a data-toggle="modal" data-target="#modal-delete<?php echo $res->id_user;?>" class="btn btn-md btn-danger"><i
                  class="demo-pli-pen-5 icon-md icon-fw"></i> Hapus</a>
            </div>
          </div>
        </div>
      </div>
    </div>




    <div class="modal" id="modal-delete<?php echo $res->id_user;?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
                                              <div class="modal-dialog ">
                                                <div class="modal-content">
                                                  <div class="modal-header">
                                                    <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                                                  </div>
                                                  <div class="modal-body">

                                                            <p>Apakah anda yakin ingin menghapus data Barang『<b><?php echo $res->nama ?></b>』</p>
                                                  </div>
                                                  <div class="modal-footer">
                                                            <button class="btn btn-default btn-rounded" data-dismiss="modal" type="button">Batal</button>
                                                            <a class="btn btn-danger btn-rounded" href="<?php echo base_url('user/hapusDatauser/'. $res->id_user) ?>">Hapus Data!!</a>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>


    <?php }?>



    <?php echo form_open_multipart('user/simpanDatauser');?>
    <div class="modal" id="modal-tambah" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal"
      aria-hidden="true">
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
                    <label class="control-label">Nama</label>
                    <input type="text" class="form-control" name="nama">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Username</label>
                    <input type="text" class="form-control" name="username">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group">
                    <label for="" class="control-label">Foto</label><span class="red">*</span>
                    <input type="file" name="foto" id="userfile" onchange="tampilkanPreview(this,'preview')" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group">
                    <label class="control-label">Password</label>
                    <input type="password" class="form-control" name="password">
                  </div>
                </div>
                <div class="col-sm-6">
                  <label for="" class="control-label"></label>Preview Foto Profile
                  <img id="preview" width="150px" />
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6 ">
                  <div class="form-group">
                    <label class="control-label">Email</label>
                    <input type="email" class="form-control" name="email">
                  </div>
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
</div>