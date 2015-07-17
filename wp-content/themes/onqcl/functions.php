<?php

function wp_getresources(){
	wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'wp_getresources');

// Navigation Menus
register_nav_menus(array(
		'newmember' => __('Sign Up'),
		'signed' => __('Logged in')
));

?>