<?php


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Optimal Detailing</title>
	<meta name="description" content="Optimal Detailing Business Website">
	<meta name="author" content="Ashton Heald">
	<link rel="icon" href="assets/img/temp-icon.png">
	<title>Bootstrap to WordPress</title>
	
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/normalize.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/fonts/font-awesome/css/all.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<!-- Google Fonts -->
	<?php wp_head();?>
</head>
<body>
	<!-- HEADER
	========== -->
	<header class="site-header" role="banner">
		<!-- HEADER LOGO
	========== -->
		<div class="header-logo">
			<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/girl-oil-painting.jpg" alt="logo">
		</div>
		
	<!-- navbar-wrapper -->
		<div class="navbar-wrapper sticky-wrapper"> 
<nav class="navbar navbar-expand-lg navbar-light bg-light top-navbar" data-toggle="sticky-onscroll"> 
<!-- Brand and toggle get grouped for better mobile display --> 
    
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
  <!-- Collect the nav links, forms, and other content for toggling --> 
  <div class="collapse navbar-collapse" id="navbarNav"> 
  <?php /* Primary navigation */
wp_nav_menu( array(
  'menu' => 'top_menu',
  'depth' => 2,
  'container' => false,
  'menu_class' => 'nav navbar-nav navbar-center mx-auto',
  //Process nav menu using our custom nav walker
  'walker' => new wp_bootstrap_navwalker())
);
?>
</div>
</nav><!-- End NAVBAR ========== -->
</div><!-- End navbar-wrapper -->
</header><!-- End top -->