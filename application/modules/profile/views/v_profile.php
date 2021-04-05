<!DOCTYPE html>
<html lang="en">



<!-- Mirrored from www.themeon.net/nifty/v2.9.1/layouts-offcanvas-navigation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:05:11 GMT -->

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>E.Sarpras | Profile</title>


  <!--STYLESHEET-->
  <!--=================================================-->

  <!--Open Sans Font [ OPTIONAL ]-->
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


  <!--Bootstrap Stylesheet [ REQUIRED ]-->
  <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">


  <!--Nifty Stylesheet [ REQUIRED ]-->
  <link href="<?php echo base_url() ?>assets/css/nifty.min.css" rel="stylesheet">


  <!--Nifty Premium Icon [ DEMONSTRATION ]-->
  <link href="<?php echo base_url() ?>assets/css/demo/nifty-demo-icons.min.css" rel="stylesheet">


  <!--=================================================-->



  <!--Pace - Page Load Progress Par [OPTIONAL]-->
  <link href="<?php echo base_url() ?>assets/plugins/pace/pace.min.css" rel="stylesheet">
  <script src="<?php echo base_url() ?>assets/plugins/pace/pace.min.js"></script>

  <!--Dropzone [ OPTIONAL ]-->
  <link href="<?php echo base_url() ?>assets/plugins/dropzone/dropzone.min.css" rel="stylesheet">

  <!--=================================================

    REQUIRED
    You must include this in your project.


    RECOMMENDED
    This category must be included but you may modify which plugins or components which should be included in your project.


    OPTIONAL
    Optional plugins. You may choose whether to include it in your project or not.


    DEMONSTRATION
    This is to be removed, used for demonstration purposes only. This category must not be included in your project.


    SAMPLE
    Some script samples which explain how to initialize plugins or components. This category should not be included in your project.


    Detailed information and more samples can be found in the document.

    =================================================-->

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
  <div id="container" class="effect aside-float aside-bright push mainnav-out">

    <!--NAVBAR-->
    <!--===================================================-->
    <header id="navbar">
      <div id="navbar-container" class="boxed">

        <!--Brand logo & name-->
        <!--================================-->
        <div class="navbar-header">

        </div>
        <!--================================-->
        <!--End brand logo & name-->


        <!--Navbar Dropdown-->
        <!--================================-->
        <div class="navbar-content">

        </div>
        <!--================================-->
        <!--End Navbar Dropdown-->

      </div>
    </header>
    <!--===================================================-->
    <!--END NAVBAR-->

    <div class="boxed">

      <!--CONTENT CONTAINER-->
      <!--===================================================-->



      <!--Page content-->
      <!--===================================================-->
      <div id="page-content">


        <hr class="new-section-sm bord-no">
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">
            <div class="panel panel-body text-center">
              <div class="panel-heading">
                <h3>Profile</h3>
              </div>
              <div class="panel-body">
                <?php foreach( $getProfile->result() as $res ){ ?>
                <div class="col-md-12">
                  <img width="300px" height="300px" src="<?php echo base_url()?>assets/img/<?php echo $res->foto ?>">
                </div>
                <div class="col-md-12" style="padding: 0px;margin-top: 2%">
                  <div class="col-md-3" style="padding: 0px">
                    <h5 style="text-align: left">Nama : </h5>
                  </div>
                  <div class="col-md-8">
                    <input name="nama" value=" <?php echo $res->nama;?>" readonly class="form-control">
                  </div>
                </div>
                <div class="col-md-12" style="padding: 0px;margin-top: 2%">
                  <div class="col-md-3" style="padding: 0px">
                    <h5 style="text-align: left">Email : </h5>
                  </div>
                  <div class="col-md-8">
                    <input name="email" value=" <?php echo $res->email;?>" readonly class="form-control">
                  </div>
                </div>
                <div class="col-md-12" style="padding: 0px;margin-top: 2%">
                  <div class="col-md-3" style="padding: 0px">
                    <h5 style="text-align: left">Username : </h5>
                  </div>
                  <div class="col-md-8">
                    <input name="username" value=" <?php echo $res->username;?>" readonly class="form-control">
                  </div>
                </div>
                <div class="col-md-2" style="margin-top: 10%;margin-left: 40%">
                  <button data-toggle="modal" data-target="#modal-update<?php echo $res->id_user;?>"
                    class=" btn btn-primary btn-rounded" style="width: 100%">Edit</button>
                </div>

                <form action="<?php echo site_url('profile/editDataProfile') ?>" method="post"
                  enctype="multipart/form-data">
                  <div class="modal fade" id="modal-update<?php echo $res->id_user;?>" role="dialog" tabindex="-1"
                    aria-labelledby="demo-default-modal" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content">

                        <!--Modal header-->
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal"><i
                              class="pci-cross pci-circle"></i></button>
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
                                <input type="text" class="form-control" value="<?php echo $res->username ?>"
                                  name="username">
                              </div>
                            </div>
                            <div class="form-group col-sm-6  ">
                              <label for="" class="control-label">Foto Pengguna</label><span class="red">*</span>
                              <input type="file" value="<?php echo $res->foto; ?>" name="foto" id="userfile"
                                onchange="tampilkanPreview1(this,'preview1')" />
                              <!-- <p class="help-block">
                                <?php //cek file apakah kosong?
                                  if (empty($res->foto)) {
                                    echo 'Belum Ada File Gambar Pada Item : ';
                                  }else{
                                    echo 'Gambar Saat Ini : ';
                                 }?>
                              </p> -->
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
                              <img src="<?php echo base_url()?>assets/img/<?php echo $res->foto ?>" id="preview1"
                                width="200px" height="200px" />
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

                <?php } ?>
              </div>
            </div>
          </div>
        </div>



      </div>
      <!--===================================================-->
      <!--END CONTENT CONTAINER-->







    </div>





    <!-- SCROLL PAGE BUTTON -->
    <!--===================================================-->
    <button class="scroll-top btn">
      <i class="pci-chevron chevron-up"></i>
    </button>
    <!--===================================================-->
  </div>
  <!--===================================================-->
  <!-- END OF CONTAINER -->





  <!--JAVASCRIPT-->
  <!--=================================================-->

  <!--jQuery [ REQUIRED ]-->
  <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>


  <!--BootstrapJS [ RECOMMENDED ]-->
  <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>


  <!--NiftyJS [ RECOMMENDED ]-->
  <script src="<?php echo base_url() ?>assets/js/nifty.min.js"></script>

  <!--Dropzone [ OPTIONAL ]-->
  <script src="<?php echo base_url() ?>assets/plugins/dropzone/dropzone.min.js"></script>


  <!--=================================================-->



  <script type="text/javascript">


    function tampilkanPreview(userfile, idpreview) {
      var gb = userfile.files;
      for (var i = 0; i < gb.length; i++) {
        var gbPreview = gb[i];
        var imageType = /image.*/;
        var preview = document.getElementById(idpreview);
        var reader = new FileReader();
        if (gbPreview.type.match(imageType)) {
          //jika tipe data sesuai
          preview.file = gbPreview;
          reader.onload = (function (element) {
            return function (e) {
              element.src = e.target.result;
            };
          })(preview);
          //membaca data URL gambar
          reader.readAsDataURL(gbPreview);
        }
        else {
          //jika tipe data tidak sesuai
          alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
        }
      }
    }
    function tampilkanPreview1(userfile, idpreview1) {
      var gb = userfile.files;
      for (var i = 0; i < gb.length; i++) {
        var gbPreview1 = gb[i];
        var imageType = /image.*/;
        var preview1 = document.getElementById(idpreview1);
        var reader = new FileReader();
        if (gbPreview1.type.match(imageType)) {
          //jika tipe data sesuai
          preview1.file = gbPreview1;
          reader.onload = (function (element) {
            return function (e) {
              element.src = e.target.result;
            };
          })(preview1);
          //membaca data URL gambar
          reader.readAsDataURL(gbPreview1);
        }
        else {
          //jika tipe data tidak sesuai
          alert("Tipe file tidak sesuai. Gambar harus bertipe .png, .gif atau .jpg.");
        }
      }
    }
  </script>
</body>

<!-- Mirrored from www.themeon.net/nifty/v2.9.1/layouts-offcanvas-navigation.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:05:11 GMT -->

</html>