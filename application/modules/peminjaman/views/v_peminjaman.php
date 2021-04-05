<title>E.Sarpras | Peminjaman</title>

<!-- <?php echo form_open_multipart('peminjaman/cariPeminjaman'); ?>
<div class="form-grup">
  <div class="box-header with-border">
    <div class="form-grup">
      <span class="new-button">
        <div class="col-xs-2" style="margin-top: 0px;width: 190px;padding-right: 4px;padding-left: 0px">
        <select class="selectpicker" data-live-search="true" name="id_barang" data-width="100%">
  <?php foreach ($getBarang ->result() as $barang){?>
  <option value="<?php echo $barang->id_barang;?>"><?php echo $barang->nama_barang; ?> </option>
            <?php
              }
              ?>
          </select>
        </div>
      </span>
      <span class="new-button">
        <div class="col-xs-2" style="margin-top: 0px;width: 190px;padding-right: 4px;padding-left: 0px">
        <select class="selectpicker" data-live-search="true" name="id_user" data-width="100%">
           <?php foreach ($getUser ->result() as $user){?>
          <option value="<?php echo $user->id_user;?>"><?php echo $user->nama; ?> </option>
          <?php
            }
            ?>
        </select>
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
      </span>
      <span class="form-group pull-right">
        <div class="col-xs-2" style="margin-top: 0px;width: 100px;padding-right: 4px;padding-left: 0px">
          <a data-toggle="modal" data-target="#tambahdata" class=" btn btn-success">
            <span class="fa fa-plus"></span>
            &nbsp;Tambah
          </a>
        </div>
      </span>
    </div>
  </div>
</div>
<?php echo form_close(); ?> -->

<div class="panel">

	<!--Data Table-->
	<!--===================================================-->
	<div class="panel-body">
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
						<th>Tanggal Pinjam</th>
						<th>Catatan</th>
						<th>Opsi</th>
					</tr>
				</thead>
				<tbody>
					<?php foreach( $joinPeminjaman->result() as $res ){ ?>
					<tr>
						<td><?php echo $res->nama?></td>
						<td><?php echo $res->nama_barang?></td>
						<td><?php echo $res->tanggal?></td>
						<td><?php echo $res->catatan?></td>
						<td>
							<a class="btn btn-danger" data-toggle="modal"
								data-target="#modal-delete<?php echo $res->id_peminjaman ?>"><i
									class="fa fa-fw fa-trash"></i>Hapus</a>
							<a class="btn btn-warning" data-toggle="modal" data-target="#modal-update<?php echo $res->id_peminjaman ?>"><i class="fa fa-fw fa-edit"></i>Ubah</a></td>
					</tr>

									<form action="<?php echo site_url('peminjaman/editPinjam') ?>" method="post" enctype="multipart/form-data">
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
		  
		  <div class="modal fade animated " id="modal-delete<?php echo $res->id_peminjaman;?>" role="dialog" tabindex="-1" aria-labelledby="demo-default-modal" aria-hidden="true">
                                      <div class="modal-dialog ">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                                          </div>
                                          <div class="modal-body">

                                                    <p>Apakah anda yakin ingin menghapus data akun 『<b><?php echo $res->nama ?></b>』 ?</p>
                                          </div>
                                          <div class="modal-footer">
                                                    <button class="btn btn-default" data-dismiss="modal" type="button">Close</button>
                                                    <a class="btn btn-danger" href="<?php echo base_url('peminjaman/hapusPinjam/'.$res->id_peminjaman) ?>">Hapus Data!!</a>
                                                </div>
                                        </div>
                                      </div>
                                    </div>
					<?php } // end foreach ?>
				</tbody>
			</table>
		</div>
	</div>
	<!--===================================================-->
	<!--End Data Table-->
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
