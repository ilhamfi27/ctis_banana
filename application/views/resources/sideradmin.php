<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
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