<!DOCTYPE html>

    <html class="no-js"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>OpenCode</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        
  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />


	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="<?php echo base_url('assetsWeb/favicon/favicon.png') ?>">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url('assetsWeb/css/animate.css')?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url('assetsWeb/css/icomoon.css')?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url('assetsWeb/css/bootstrap.css')?>">

	<link rel="stylesheet" href="<?php echo base_url('assetsWeb/css/style.css')?>">


	<!-- Modernizr JS -->
	<script src="<?php echo base_url('assetsWeb/js/modernizr-2.6.2.min.js')?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
    <script src="https://use.fontawesome.com/1ca4075295.js"></script>



	</head>
	<body>
    
<?php $this->load->helper('url');
		?>

	<nav id="fh5co-main-nav" role="navigation">
		<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle active"><i></i></a>
		<div class="js-fullheight fh5co-table">
			<div class="fh5co-table-cell js-fullheight">
				<ul>
					<li><?php echo anchor('Opencode/home','Home');?></li>
                    <li><?php echo anchor('Opencode/about','About');?></li>
                    <li><?php echo anchor('Opencode/team','Team');?></li>
					<li><?php echo anchor('Opencode/projects','Projects');?></li>
					<li><?php echo anchor('Opencode/start_project','Start a project');?></li>
					<?php
						if($this->session->userdata('isUserLoggedIn')){
          						 $data['Mopencode'] = $this->Mopencode->getRows(array('id'=>$this->session->userdata('userId')));
           			 //load this header
           					 $this->load->view('templates/header2');
       					 }else{
          					 $this->load->view('templates/header1');
       						 } ?>
				</ul>
			</div>
		</div>
	</nav>
	
		<header>
			<div class="container">
				<div class="fh5co-navbar-brand">
					<a class="fh5co-logo" href="<?php echo base_url(); ?>Opencode/home">Open<strong>Code</strong></a>
				</div>
				<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
			</div>
		</header>