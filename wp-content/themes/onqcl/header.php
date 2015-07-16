<html>
	<head>
		<title>Online QCL Compiler</title>
		<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
	</head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<body>
	<div id='header'>
		<ul id='nav'>
			<li id='brand'><a href='<?php get_site_url(); ?>'><?php bloginfo('title'); ?></a></li><span id='brandSeparator'>|</span>
			
			<li><a href=''>Signup</a></li>
			<li><a href=''>Examples</a></li>
			<li><a href=''>About</a></li>
			<li><a href=''>Github</a></li>
		</ul>
	</div>
	
	<?php 
	$args = array(
        'order'                  => 'ASC',
        'orderby'                => 'menu_order',
        'post_type'              => 'nav_menu_item',
        'post_status'            => 'publish',
        'output'                 => ARRAY_A,
        'output_key'             => 'menu_order',
        'nopaging'               => true,
        'update_post_term_cache' => false );
	
	$menulist = wp_get_nav_menu_items( $menu, $args );
		
	?>