<?php

// Custom functions

/**
 * Enqueue scripts and styles.
 */

 include( get_template_directory() . '/inc/admin/init/enqueue.php' );

/**
 * Custom Admin Init Functions
 * Onle for Admin
 */

 include( get_template_directory() . '/inc/admin/init/acf-json.php' );

/**
 * ACF Option Page
 */

 include( get_template_directory() . '/inc/admin/init/acf-option-page.php' );

/**
 * Custom Block Functions
 * ACF Custom Blocks
 */

 include( get_template_directory() . '/inc/admin/init/register-blocks.php' );

 /**
 * Custom Nav Meu
 */

 include( get_template_directory() . '/inc/admin/init/nav-menu-walker.php');
