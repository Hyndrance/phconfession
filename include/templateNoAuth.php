<!DOCTYPE html>
<html lang="en">

<head>
		<meta property="og:url"                content="https://phconfession.com" />
		<meta property="og:type"               content="article" />
		<meta property="og:title"              content="When Great Minds Don’t Think Alike" />
		<meta property="og:description"        content="How much does culture influence creative thinking?" />
		<meta property="og:image"              content="https://phconfession.com/include/img/test.png" />

    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="include/templates/assets/img/apple-icon.png">
    <link rel="icon" href="include/img/icon.png">
    <title>
        Get Something off your chest anonymously!
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="include/templates/assets/css/material-dashboard.css?v=2.0.0">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="include/templates/assets/assets-for-demo/demo.css" rel="stylesheet" />
    <!-- This is for recaptcha -->
		<script src='https://www.google.com/recaptcha/api.js'></script>


		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		  (adsbygoogle = window.adsbygoogle || []).push({
		    google_ad_client: "ca-pub-8483985932636139",
		    enable_page_level_ads: true
		  });
		</script>

		<style>
		.navBar {
		  background-color: #ff802a;
			position: fixed;
		  top: 0;
		  width: 100%;
			height: 50px;
			color: #FFFFFF;
		}
		</style>
</head>

<body class="">
    <div class="wrapper">
        <div class="main" style="background:#eeeeee;">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid navBar">
                    <div class="navbar-wrapper">
                        <img src="include/img/icon.png" width="40px"> &nbsp;&nbsp;&nbsp;
												PH Confession
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">

											<ul class="navbar-nav">
												<li class="nav-item"><button class="btn">FAQ</button>&nbsp;&nbsp;&nbsp;
												<li class="nav-item"><button class="btn">About Us</button>&nbsp;&nbsp;&nbsp;
												<li class="nav-item"><button class="btn">Blog</button>&nbsp;&nbsp;&nbsp;
												<li class="nav-item"><button onclick="location.href='?view=login'" class="btn">Log in</button>&nbsp;&nbsp;&nbsp;
											</ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
								<br><br>
                <div class="container-fluid">
									<!--End here-->
											 <!-- <?php include "message.php";?> -->
									<!--End here-->
                    <div class="row">
												<?php include $content;?>
                    </div>
                </div>
            </div>
            <footer class="footer ">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="">
                                    Terms and Condition
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Privacy Policy
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Contact Us
                                </a>
                            </li>
                            <li>
                                <a href="https://www.facebook.com/PHconfessioncom-915413495303290/">
																		<img src="include/img/fb_icon.png" height="50px">
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/PHconfession_">
																		<img src="include/img/twitter_icon.png" height="50px">
                                </a>
                            </li>
                            <li>
                                <a href="">
																		<img src="include/img/insta_icon.png" height="50px">
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made by
                        <a href="" target="_blank">SunsetCity</a>.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="include/templates/assets/js/core/jquery.min.js"></script>
<script src="include/templates/assets/js/core/popper.min.js"></script>
<script src="include/templates/assets/js/bootstrap-material-design.js"></script>
<script src="include/templates/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="include/templates/assets/js/plugins/chartist.min.js"></script>
<!-- Library for adding dinamically elements -->
<script src="include/templates/assets/js/plugins/arrive.min.js" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="include/templates/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="include/templates/assets/js/material-dashboard.js?v=2.0.0"></script>
<!-- demo init -->
<script src="include/templates/assets/js/plugins/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        //init wizard

        // demo.initMaterialWizard();

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initCharts();

    });
</script>

</html>
