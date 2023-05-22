<?php

/**
 * ACF Custom Hero Block Register
 */

 function acf_hero_item_block() {
	
	// check function exists
	if( function_exists('acf_register_block') ) {
		
		// register a Hero item block
		acf_register_block(array(
			'name'				=> 'hero',
			'title'				=> __('Hero'),
			'description'		=> __('A custom block for hero.'),
			'render_template'	=> 'template-parts/blocks/block-hero.php',
			'category'			=> 'layout',
			'icon'				=> 'cover-image',
			'keywords'			=> array( 'hero' ),
		));
	}
}

add_action('acf/init', 'acf_hero_item_block');