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


?>
