<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('assets/css/bootstrap.min.css'); ?>" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo base_url('assets/vendor/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('assets/css/styleadmin.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('assets/css/style-responsiveadmin.css'); ?>" rel="stylesheet">
</head>

<body>
    <section>
        <header class="header black-bg">
            <div class="sidebar-toggle-box">
                <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
            </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>DASH<span>IO</span></b></a>
            <!--logo end-->
            <div class="top-menu">
                <ul class="nav pull-right top-menu">
                    <li><a class="logout" href="login.html">Logout</a></li>
                </ul>
            </div>
        </header>
        <aside>
            <div id="sidebar" class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu" id="nav-accordion">
                    <p class="centered">
                        <a href="profile.html"><img src="<?php echo base_url('assets/img/user.png'); ?>" class="img-circle" width="80"></a>
                    </p>
                    <h5 class="centered">Admin</h5>
                    <li class="mt">
                        <a href="admin.php">
                            <i class="fa fa-dashboard"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sub-menu">
                        <a href="">
                            <i class="fa fa-flag"></i>
                            <span>Set Lokasi</span>
                        </a>

                    </li>
                    <li class="sub-menu">
                        <a href="">
                            <i class="fa fa-book"></i>
                            <span>Laporan</span>
                        </a>

                    </li>
                    <li class="sub-menu">
                        <a href="">
                            <i class="fa fa-twitter"></i>
                            <span>cek twitter</span>
                        </a>

                    </li>
                    <li>
                        <a href="google_maps.html">
                            <i class="fa fa-map-marker"></i>
                            <span>Maps </span>
                        </a>
                    </li>
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
    </section>
    <script src=<?php echo base_url('assets/jquery/jquery.min.js'); ?>></script>
    <script src=<?php echo base_url('assets/venndor/common-scripts.js'); ?>></script>
    <script class="include" type="text/javascript" src=<?php echo base_url('assets/vendor/jquery/jquery.dcjqaccordion.2.7.js'); ?>></script>
</body>

</html>