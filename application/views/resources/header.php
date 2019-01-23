<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Grayscale - Start Bootstrap Theme</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url("assets/vendor/bootstrap/css/bootstrap.min.css"); ?>" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo base_url("assets/vendor/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet" type="text/css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> -->
	
	<!-- Advanced Weather Icon -->
    <link href="<?php echo base_url("assets/vendor/weather-icon/css/weather-icons.css"); ?>" rel="stylesheet">

    <!-- Theme CSS -->
	<link href="<?php echo base_url("assets/css/grayscale.min.css"); ?>" rel="stylesheet">
	
	<!-- Styled CSS -->
	<link href="<?php echo base_url("assets/css/banana-app.css"); ?>" rel="stylesheet">

    <!-- Bootstrap Datetimepicker CSS -->
	<link href="<?php echo base_url("assets/vendor/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css"); ?>" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	    <!-- Navigation -->
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="<?php echo site_url("/"); ?>">
                    <span class="light">Start</span> Banana
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="javascript:void(0);">HackBdg</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>	

    <div class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="weather-panel-box">
							<div class="row">
								<div class="col-md-6">
									<div class="input-group">
										<input type="text" class="form-control" name="district-search" placeholder="Cari Daerah">
										<div class="input-group-btn">
											<button class="btn btn-default">
												<i class="fa fa-search" aria-hidden="true"></i>
											</button>
										</div>
									</div>
								</div>
								<div class="col-md-6">
									<!-- <select name="action" id="" class="form-control">
										<option value="report">Lapor</option>
									</select> -->
									<div class="dropdown">
										<button class="btn btn-default dropdown-toggle action-dropdown" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
											Lapor Kejadian
											<span class="caret"></span>
										</button>
										<ul class="dropdown-menu action-dropdown" aria-labelledby="dropdownMenu1">
											<li><a href="<?php echo site_url("report/citizen_report/banjir"); ?>">Banjir</a></li>
											<li><a href="<?php echo site_url("report/citizen_report/hujan-es"); ?>">Hujan Es</a></li>
											<li><a href="<?php echo site_url("report/citizen_report/angin-badai"); ?>">Angin Badai</a></li>
										</ul>
									</div>
								</div>
							</div>