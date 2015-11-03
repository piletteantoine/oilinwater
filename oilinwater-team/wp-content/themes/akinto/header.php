<!doctype html>
<html
<?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
    
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css">
	<link href="https://get.gridsetapp.com/30892/" rel="stylesheet" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<!-- <?php bloginfo('template_directory'); ?> -->

	<script src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/modernizr.custom.js"></script> <!-- // Menu Mobile -->
</head>
<body <?php post_class(); ?>>


<div class="nav overlay overlay-hugeinc">
	<nav class="navigation">
		<div class="wrapper">
			<h1 class="logotype">Akin to</h1>
			<a href="home" class="logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" alt="Akin To - Logo"></a>
			<?php wp_nav_menu(); ?>
		</div>
	</nav>
</div>

<!-- Open Main -->
<main role="main">




