<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name='viewport' content="width=device-width">
		<title><?php bloginfo('name'); ?></title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
		<?php wp_head(); ?>
	</head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<body <?php body_class(); ?>>
	<div id='header'>
		<ul id='nav'>
			<li id='brand'><a href='<?php echo get_site_url(); ?>'><?php bloginfo('title'); ?></a></li><span id='brandSeparator'>|</span>
			
			<?php 
			wp_nav_menu(array(
					'theme_location' => is_user_logged_in() ? 'signed': 'newmember'
			)); ?>
			
			<!-- <li><a href=''>Signup</a></li>
			<li><a href=''>Examples</a></li>
			<li><a href=''>About</a></li>
			<li><a href=''>Github</a></li>-->
		</ul>
	</div>