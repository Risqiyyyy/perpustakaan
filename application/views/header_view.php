<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title_web;?> PERPUSTAKAAN </title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_style/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_style/assets/bower_components/font-awesome/css/font-awesome.min.css">
	
	
	<!-- Select2 -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_style/assets/bower_components/select2/dist/css/select2.min.css">
	
	<!-- Ionicons -->
	<link rel="stylesheet" href="<?php echo base_url();?>assets_style/assets/bower_components/Ionicons/css/ionicons.min.css">
	<!-- Theme style -->  
	
	<link href="<?php echo base_url();?>assets_style/assets/plugins/summernote/summernote-lite.css" rel="stylesheet">

  <link rel="stylesheet" href="<?php echo base_url();?>assets_style/assets/dist/css/AdminLTE.css">
	<link rel="stylesheet" href="<?php echo base_url();?>assets_style/assets/dist/css/responsive.css">
	
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_style/assets/plugins/timepicker/bootstrap-timepicker.min.css">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_style/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_style/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="<?php echo base_url();?>assets_style/assets/dist/css/skins/_all-skins.min.css">

  <link rel="stylesheet" href="<?php echo base_url();?>assets_style/assets/plugins/pace/pace.min.css">
  <!-- jQuery 3 -->
  <script src="<?php echo base_url();?>assets_style/assets/bower_components/jquery/dist/jquery.min.js"></script>
  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

  <!-- template dark -->
    <!-- Favicon -->
    <link href="<?php echo base_url();?>img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="<?php echo base_url();?>https://fonts.googleapis.com">
    <link rel="preconnect" href="<?php echo base_url();?>https://fonts.gstatic.com" crossorigin>
    <link href="<?php echo base_url();?>https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet"> 
    3
    <!-- Icon Font Stylesheet -->
    <link href="<?php echo base_url();?>https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php echo base_url();?>vendor/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>vendor/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php echo base_url();?>vendor/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php echo base_url();?>vendor/css/style.css" rel="stylesheet">
  <!--  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
	<!-- offline -->
  <script type="text/javascript">
      $(document).ajaxStart(function() { Pace.restart(); });
  </script>
</head>
<body class="hold-transition">
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-secondary navbar-dark sticky-top px-4 py-0">
                <a href="index.html" class="navbar-brand d-flex d-lg-none me-4">
                    <h2 class="text-primary mb-0"><i class="fa fa-user-edit"></i></h2>
                </a>

                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                    <ul class="nav navbar-nav">
                  <li>
                      <?php
                        $d = $this->db->query("SELECT * FROM tbl_login WHERE id_login = '$idbo'")->row();
                      ?>
                      <a href="<?= base_url('user/edit/'.$idbo);?>">
                      <i class="fa fa-edit"> </i> <?php echo $d->nama; ?></a>
                    </li>
                    <li>
                      <a href="<?php echo base_url();?>login/logout">Sign out</a>
                    </li>
                  </ul>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->
  <!--loading-->
  <!-- Left side column. contains the logo and sidebar -->
