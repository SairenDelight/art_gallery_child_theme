<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up until id="main-core".
 *
 * @package ThinkUpThemes
 */
?><!DOCTYPE html>

<html <?php language_attributes();?>>
<head>
<?php thinkup_hook_header();?>
<meta charset="<?php bloginfo('charset');?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="//gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo('pingback_url');?>" />
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/lib/scripts/html5.js" type="text/javascript"></script>
<![endif]-->

<?php wp_head();?>

</head>

<body <?php body_class();?><?php thinkup_bodystyle();?>>
<div id="body-core" class="hfeed site">

	<header id="site-header">

		<?php if (get_header_image()): ?>
			<div class="custom-header"><img src="<?php header_image();?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt=""></div>
		<?php endif; // End header image check. ?>

		<div id="pre-header">
			<div class="wrap-safari">
				<div id="pre-header-core" class="main-navigation">

					<?php if (has_nav_menu('pre_header_menu')): ?>
					<?php wp_nav_menu(array('container_class' => 'header-links', 'container_id' => 'pre-header-links-inner', 'theme_location' => 'pre_header_menu'));?>
					<?php endif;?>

					<?php /* Header Search */thinkup_input_headersearch();?>

					<?php /* Social Media Icons */social_media_buttons()?>

				</div>
			</div>
		</div>
		<!-- #pre-header -->

		<div id="header">
			<div id="header-core">

				<div id="logo">
					<a rel="home" href="<?php echo esc_url(home_url('/')); ?>"><?php /* Custom Logo */thinkup_custom_logo();?></a>
				</div>

			<?php /* Add responsive header menu */thinkup_input_responsivehtml();?>

			</div>
		</div>

		<div id="header" class="nav-background">
			<div id="header-core">
				<div id="header-links" style="float:none;" class="main-navigation">
					<div id="header-links-inner" class="header-links">
						<?php wp_nav_menu(array('container' => false, 'theme_location' => 'header_menu'));?>
					</div>
				</div>
			</div>
		</div>
		<!-- #header -->
		<?php /* Custom Slider */thinkup_input_sliderhome();?>

	</header>


	<!-- header -->


		<div id="main-core">
<?php
   if (is_front_page() or thinkup_check_ishome()) {
	   ?>
	   <div class="container-fluid">
			<div class="row">
				<div class="col-md-8">
					<img id="nt-featured-img" src="<?php echo get_theme_mod('nt_exhibition_featured_image_upload')?>"/>
				</div>
				<div class="col-md-4">
					<h1>Natalie and Thompson Event</h1>
					<p><?php echo get_theme_mod('nt_caption')?> </p>
				</div>
			</div>
			<!-- <div class="row">
				<div class="col-md-12">
					<img src="<?php echo get_theme_mod('nt_exhibition_featured_image_upload')?>"/>
				</div>
			</div> -->
   		</div>
		<?php
	}
?>
	

	<!-- Ending Upcoming Events Section -->

	<?php /*  Call To Action - Intro */thinkup_input_ctaintro();?>
	<!-- <?php /*  Pre-Designed HomePage Content */thinkup_input_homepagesection();?> -->

	<div id="content">
	<div id="content-core">

		<div id="main">
		<?php /* Custom Intro */thinkup_custom_intro();?>

