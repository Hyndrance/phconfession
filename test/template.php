<?php
if(!isset($_SESSION["alias_session"]))
{
		$_SESSION["last_link"] = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
		header('Location: index.php?view=login&error=Please login to see the page');
 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../include/templates/assets/img/apple-icon.png">
    <link rel="icon" href="../include/img/icon.png">
    <title>
        Get Something off your chest anonymously!
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="../include/templates/assets/css/material-dashboard.css?v=2.0.0">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../include/templates/assets/assets-for-demo/demo.css" rel="stylesheet" />
    <!-- This is for recaptcha -->
		<script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="../include/templates/assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="index.php" class="simple-text logo-normal">
                    <img src="../include/img/header.png" height="35px">
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">

                    <li class="nav-item">
                        <a class="nav-link" href="index.php">
                            <i class="material-icons">whatshot</i>
                            <p>Hot</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?view=trending">
                            <i class="material-icons">trending_up</i>
                            <p>Trending</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?view=latest">
                            <i class="material-icons">open_in_new</i>
                            <p>Latest</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?view=myconfessions">
                            <i class="material-icons">drafts</i>
                            <p>My Confessions</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?view=category">
                            <i class="material-icons">dashboard</i>
                            <p>Categories</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?view=confess">
                            <i class="material-icons">create</i>
                            <p>Write your confession</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="process.php?action=check_notification">
                            <i class="material-icons">notification_important</i>
                            <p>Notification
															<?php if (notification()->count("recepient like '%".$_SESSION['alias_session']."' and status='1' order by Id desc")){ ?>
																<span style="background:red;color:white;border-radius:5px;padding:1px;">
																	<?=notification()->count("recepient like '%".$_SESSION['alias_session']."' and status='1' order by Id desc");?>
															</span>
														<?php } ?>
													</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?view=about">
                            <i class="material-icons">touch_app</i>
                            <p>About PH Confession</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?view=contactUs">
                            <i class="material-icons">perm_phone_msg</i>
                            <p>Contact Us</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="process.php?action=logout">
                            <i class="material-icons">remove_circle</i>
                            <p>Logout</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a href=""><?=$title;?></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" name="s" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                </button>
                            </div>
                        </form>
												<ul class="navbar-nav"></ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
											<!--End here-->
											     <?php include $content;?>
											<!--End here-->
                    </div>
                </div>
            </div>
            <footer class="footer ">
                <div class="container-fluid">
                    <nav class="pull-left">
                        <ul>
                            <li>
                                <a href="">
                                    Hyndrance
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    About Us
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Blog
                                </a>
                            </li>
                            <li>
                                <a href="">
                                    Licenses
                                </a>
                            </li>
                        </ul>
                    </nav>
                    <div class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, made with love by
                        <a href="" target="_blank">Hyndrance</a> for a better web.
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="../include/templates/assets/js/core/jquery.min.js"></script>
<script src="../include/templates/assets/js/core/popper.min.js"></script>
<script src="../include/templates/assets/js/bootstrap-material-design.js"></script>
<script src="../include/templates/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="../include/templates/assets/js/plugins/chartist.min.js"></script>
<!-- Library for adding dinamically elements -->
<script src="../include/templates/assets/js/plugins/arrive.min.js" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="../include/templates/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="../include/templates/assets/js/material-dashboard.js?v=2.0.0"></script>
<!-- demo init -->
<script src="../include/templates/assets/js/plugins/demo.js"></script>
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
