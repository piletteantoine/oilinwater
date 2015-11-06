<!doctype html>
<html
<?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>


	<!--[if IE]>
		<script type="text/javascript">
			 var console = { log: function() {} };
		</script>
	<![endif]-->

    
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/assets/css/screen.css">
	<link href="https://get.gridsetapp.com/30892/" rel="stylesheet" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<!-- <?php bloginfo('template_directory'); ?> -->

	<script src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- LAUNCH ASSETS FROM Oilinwater.be --> 

	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>

	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/vendor/jquery.slimscroll.min.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.fullPage.js"></script>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/assets/js/examples.js"></script>


	<script type="text/javascript">
		$(document).ready(function() {
			$('#fullpage').fullpage({
				anchors: ['firstPage', 'secondPage', '3rdPage', '4rdPage'],
				css3: true,
				loopTop: true,
				loopBottom: true
			});
		});
	</script>
</head>
<body <?php post_class(); ?>>

<!-- # Header Start # -->
  <header class="navigation" id="header">
    <nav class="navigation-menu">
      <div class="wrapper nav">
        <a class="navigation-menu__show" href="#" id="nav-trigger"><span></span></a><!-- /.show-menu -->
 			<?php wp_nav_menu(); ?><!-- /.menu -->
      </div><!-- /.wrapper -->
    </nav><!-- /.header__menu-->
  </header>
  <!-- # Header end # -->

<!-- Open Main -->
<main role="main">