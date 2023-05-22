<?php

/**
 * Enqueue scripts and styles.
 */
function epos_scripts() {
	wp_enqueue_style( 'style', get_template_directory_uri(). '/dist/css/style.css');
		wp_enqueue_script( 'jquery-core-js', get_template_directory_uri(). '/assets/js/jquery.js','','1.1',true);
	wp_enqueue_script( 'slick', 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js', "", '1.1', true);
	wp_enqueue_script( 'script', get_template_directory_uri(). '/dist/js/script.js','','1.1',true);
}
add_action( 'wp_enqueue_scripts', 'epos_scripts' );
