<html lang="en" class="no-js">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="Unique - Responsive vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Unique, portfolio" />
    <meta name="author" content="lmtheme" />
    <link rel="shortcut icon" href="favicon.ico">
	

	<link href="<?php echo base_url(); ?>assest_html/css/bootstrap.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assest_html/css/normalize.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assest_html/css/animate.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assest_html/css/transition-animations.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assest_html/css/jquery.mCustomScrollbar.min.css" rel="stylesheet" type="text/css"/>`
	<link href="<?php echo base_url(); ?>assest_html/css/magnific-popup.css" rel="stylesheet" type="text/css"/>
	<link href="<?php echo base_url(); ?>assest_html/css/main-red.css" rel="stylesheet" type="text/css"/> 


    <!-- This styles needs for demo -->
		<link href="<?php echo base_url(); ?>assest_html/preview/lmpixels-demo-panel.css" rel="stylesheet" type="text/css"/> 
    <!-- /This styles needs for demo -->


    <script src="<?php echo base_url(); ?>assest_html/js/jquery-2.1.3.min.js"></script>
    <script src="<?php echo base_url(); ?>assest_html/js/modernizr.custom.js"></script>

	

	
  </head>

  <body>
    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="dot1"></div>
        <div class="dot2"></div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div id="page" class="page">
      <!-- Header -->
      <header id="site_header" class="header mobile-menu-hide header-color-light">
        <div class="my-photo tilt-effect">
			
<img src="<?php echo base_url('uploads/profile_photos/' . $about_me->profile_image); ?>" alt="User Photo">

        </div>

        <div class="site-title-block">
		<a href="login/login.php">
          <h1 class="site-title"><?php echo $about_me->first_name?> </h1>
		    </a>
        </div>

        <!-- Navigation -->
        <div class="site-nav">
          <!-- Main menu -->
          <ul id="nav" class="site-main-menu">
            <li>
              <a class="pt-trigger" href="#home" data-animation="21"><i class="menu-icon pe-7s-icon pe-7s-home"></i>Home</a><!-- href value = data-id without # of .pt-page. -->
            </li>
            <li>
              <a class="pt-trigger" href="#about_me" data-animation="17"><i class="menu-icon pe-7s-icon pe-7s-user"></i>About me</a>
            </li>
            <li>
              <a class="pt-trigger" href="#resume" data-animation="18"><i class="menu-icon pe-7s-icon pe-7s-id"></i>Resume</a>
            </li>
            <li>
              <a class="pt-trigger" href="#portfolio" data-animation="19"><i class="menu-icon pe-7s-icon pe-7s-portfolio"></i>Portfolio</a>
            </li>
            <li>
              <a class="pt-trigger" href="#contact" data-animation="20"><i class="menu-icon pe-7s-icon pe-7s-mail"></i>Contact</a>
            </li>
				<li>
			<a class="pt-trigger" href="#edit-profile" data-animation="20"> <i class="menu-icon pe-7s-edit"></i>Edit Profile</a>
			</li>
				<li>
			<a class="pt-trigger" href="#e-invoice" data-animation="20"> <i class="menu-icon pe-7s-calculator"></i>E-Invoice</a>
			</li>
			<li>
			<a class="pt-trigger" href="#logout" data-animation="20"><i class="menu-icon pe-7s-key"></i>Log Out</a>
			</li>
		
          </ul>
          <!-- /Main menu -->
        </div>
        <!-- Navigation -->
      </header>
      <!-- /Header -->

      <!-- Mobile Header -->
      <div class="mobile-header mobile-visible">
        <div class="mobile-logo-container">
          <div class="mobile-site-title">Farah</div>
        </div>

        <a class="menu-toggle mobile-visible">
          <i class="fa fa-bars"></i>
        </a>
      </div>
      <!-- /Mobile Header -->