<?php

/**
 * ACF Option Page
 */

 if( function_exists('acf_add_options_page') ) {
    
    acf_add_options_page(array(
        'page_title'    => 'General Settings',
        'menu_title'    => 'General Settings',
        'menu_slug'     => 'general-option-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));
        
}