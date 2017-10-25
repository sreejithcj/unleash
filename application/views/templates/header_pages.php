<html>
    <head>
        <title>Unleash - the potential in you</title>
		<!-- Bootstrap Core CSS -->
		<link href="<?php echo base_url();?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Menu CSS -->
		<link href="<?php echo base_url();?>assets/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
		<!-- toast CSS -->
		<link href="<?php echo base_url();?>assets/plugins/bower_components/toast-master/css/jquery.toast.css" rel="stylesheet">
		<!-- morris CSS -->
		<link href="<?php echo base_url();?>assets/plugins/bower_components/morrisjs/morris.css" rel="stylesheet">
		<!-- chartist CSS -->
		<link href="<?php echo base_url();?>assets/plugins/bower_components/chartist-js/dist/chartist.min.css" rel="stylesheet">
		<link href="<?php echo base_url();?>assets/plugins/bower_components/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
		<!-- animation CSS -->
		<link href="<?php echo base_url();?>assets/css/animate.css" rel="stylesheet">
		<!-- Custom CSS -->
		<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet">
		<!-- color CSS -->
		<link href="<?php echo base_url();?>assets/css/colors/default.css" id="theme" rel="stylesheet">		
    </head>
    <body class="fix-header">
        <!-- ============================================================== -->
		<!-- Preloader -->
		<!-- ============================================================== -->
		<div class="preloader">
			<svg class="circular" viewBox="25 25 50 50">
				<circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
			</svg>
		</div>
		<!-- ============================================================== -->
		<!-- Wrapper -->
		<!-- ============================================================== -->
		<div id="wrapper">
		<!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header">
 
                <img src="<?php echo base_url();?>assets/plugins/images/logo-white.png" alt="home" class="logo-top-left" />
        
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <a href="<?php echo base_url();?>users/login"> <b class="hidden-xs">Login</b></a>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>users/signup"> <b class="hidden-xs">Signup</b></a>
                    </li>

                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper-public">
            <div class="container-fluid">
            <?php if($this->session->flashdata('signup_failed')): ?> 
                <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('signup_failed').'</p>'; ?> 
            <?php endif; ?>
            <?php if($this->session->flashdata('login_failed')): ?> 
                <?php echo '<p class="alert alert-danger">'.$this->session->flashdata('login_failed').'</p>'; ?> 
            <?php endif; ?>
            <?php if($this->session->flashdata('signup_success')): ?> 
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('signup_success').'</p>'; ?> 
            <?php endif; ?>