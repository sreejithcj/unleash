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
                <div class="top-left-part">
                    <!-- Logo -->
                    <a class="logo" href="index.html">
                        <!-- Logo icon image, you can use font-icon also --><b>
                        
                     </b>
                        <!-- Logo text image you can use text also --><span class="hidden-xs">
                        <!--This is dark logo text--><img src="<?php echo base_url();?>assets/plugins/images/admin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="<?php echo base_url();?>assets/plugins/images/logo-black.png" alt="home" class="light-logo" />
                     </span> </a>
                </div>
                <!-- /Logo -->
                <ul class="nav navbar-top-links navbar-right pull-right">
                    <li>
                        <b class="hidden-xs header-text"><?php echo $this->session->userdata('name')?></b>
                    </li>
                    <li>
                        <a href="<?php echo base_url();?>users/logout"> <b class="hidden-xs">Logout</b></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav slimscrollsidebar">
                <div class="sidebar-head">
                    <h3><span class="fa-fw open-close"><i class="ti-close ti-menu"></i></span> <span class="hide-menu">Navigation</span></h3>
                </div>
                <ul class="nav" id="side-menu">
                    <li style="padding: 70px 0 0;">
                        <a href="<?php echo base_url(); ?>messages/inbox/1" class="waves-effect"><i class="fa fa-inbox fa-fw" aria-hidden="true"></i>Inbox</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>messages/draft/1" class="waves-effect"><i class="fa fa-edit fa-fw" aria-hidden="true"></i>Draft</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>messages/sent/1" class="waves-effect"><i class="fa fa-arrow-left fa-fw" aria-hidden="true"></i>Sent</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>ideas" class="waves-effect"><i class="fa fa-star fa-fw" aria-hidden="true"></i>Ideas</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>projects" class="waves-effect"><i class="fa fa-table fa-columns fa-fw" aria-hidden="true"></i>Projects</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url(); ?>users" class="waves-effect"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Users</a>
                    </li>
                </ul>
            </div>            
        </div>
        <!-- ============================================================== -->
        <!-- End Left Sidebar -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page Content -->
        <!-- ============================================================== -->
        <div id="page-wrapper">
            <div class="container-fluid">    
                <?php if($this->session->flashdata('message_store')): ?> 
                <?php echo '<p class="alert alert-success">'.$this->session->flashdata('message_store').'</p>'; ?> 
                <?php endif; ?>