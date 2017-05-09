<?php 
	function portafolio_styles() {
		wp_enqueue_style( 'style.css', get_stylesheet_uri() );
	}
	add_action('wp_enqueue_scripts','portafolio_styles');

	function wpdocs_custom_excerpt_length( $length ) {
 	return 20;
	}
	add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 0);

	add_theme_support('post-thumbnails');

	function register_my_menus(){
		register_nav_menus(
			array(
				'top_menu' => __ ("Menu Superior"),
				'bottom_menu' => __("Menu del footer")
				)
			);
	}
	add_action('init', register_my_menus());

