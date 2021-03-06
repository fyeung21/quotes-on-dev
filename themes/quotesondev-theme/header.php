<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page" class="hfeed site">
		<a class="skip-link screen-reader-text" href="#content"><?php echo esc_html('Skip to content'); ?></a>

		<header id="masthead" class="site-header" role="banner">
			<div class="site-branding">
				<h1 class="site-title screen-reader-text"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
				
				<a class="qod-logo" href="<?php bloginfo('url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/assets/qod-logo.svg" alt="back to home"></a>
			</div>

		</header>

		<div class="content-container">
		<h1 class="quote-icon"><i class="fa fa-quote-left" aria-hidden="true"></i></h1>
		<div id="content" class="site-content">