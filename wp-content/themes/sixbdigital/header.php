<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 6bDigital
 */


 ?>
 <!doctype html>
 <html <?php language_attributes(); ?>>
 <head>
	 <meta charset="<?php bloginfo( 'charset' ); ?>">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	 <link rel="profile" href="https://gmpg.org/xfn/11">
 
	 <?php wp_head(); ?>
 </head>
   <body>
	 <!-- Header Section Start Here -->
	 <header class="fixed top-0 left-0 right-0 z-30">
	   <nav class="bg-white shadow">
		 <div class="mx-auto px-4 sm:px-6 lg:px-16 py-5">
		   <div class="flex justify-between">
			 <div class="flex">
				   <div class="flex flex-shrink-0 text-gray-900 items-center text-3xl font-medium ">
					 <?php $logo = get_field("header_logo", "option"); ?>
					 <!-- Website Logo -->
					 <?php if(!empty($logo)): ?>
						 <a href="/" class="lg:flex items-center">
							 <img src="<?php echo $logo ['url'] ;?>" alt="Digital Logo" class="w-20 md:w-36 " />
						 </a>   
					 <?php endif; ?>           
				 </div>
					 <?php 
						 $args = array(
							//'theme_location' => 'primary',    
							 'walker' => new SixbdigitalCustom_Nav_Walker(),
							 'container_class' => 'hidden lg:flex items-center',
							 'menu_class' => 'sm:ml-8 lg:flex sm:space-x-8 items-center'
						 );
						 wp_nav_menu( $args ); 
					 ?>
			 </div>
			 <?php $cta_one_text = get_field("header_cta_one_text", "option"); ?>
			 <?php $cta_one_link = get_field("header_cta_one_link", "option"); ?>
			 <?php $cta_two_text = get_field("header_cta_two_text", "option"); ?>
			 <?php $cta_two_link = get_field("header_cta_two_link", "option"); ?>
			 <div class="hidden sm:ml-6 lg:flex sm:items-center">
				 <?php if(!empty($cta_one_text)): ?>
					 <a
						 href="<?php echo $cta_one_link['url']; ?>"
						 class="rounded-md py-3 px-5 bg-white p-1 text-gray-500 hover:text-primary-600 focus:outline-none focus:ring-2 focus:ring-primary-600 focus:ring-offset-2"
					 >
					 <?php echo $cta_one_text; ?>
					 </a>
				 <?php endif; ?>
 
			   <!-- Profile dropdown -->
			   <div class="relative ml-3">
				 <div>
					 <?php if(!empty($cta_two_text)): ?>
					 <a
						 href="<?php echo $cta_two_link['url']; ?>"
						 class="flex py-3 px-5 rounded-md bg-primary-700 text-white text-base focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
						 id="user-menu-button"
						 aria-expanded="false"
						 aria-haspopup="true"
					 >
						 <?php echo $cta_two_text; ?>
					 </a>
				   <?php endif; ?>
				 </div>
			   </div>
			 </div>
			 <div class="-mr-2 flex items-center lg:hidden">
			   <!-- Mobile menu button -->
			   <button
				 type="button"
				 class="mobile-menu-button inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
				 aria-controls="mobile-menu"
				 aria-expanded="false"
			   >
				 <span class="sr-only">Open main menu</span>
				 <svg
				   class="block h-6 w-6 mobile-menu-button"
				   fill="none"
				   viewBox="0 0 24 24"
				   stroke-width="1.5"
				   stroke="currentColor"
				   aria-hidden="true"
				 >
				   <path
					 stroke-linecap="round"
					 stroke-linejoin="round"
					 d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"
				   />
				 </svg>
				 <svg
				   class="hidden h-6 w-6"
				   fill="none"
				   viewBox="0 0 24 24"
				   stroke-width="1.5"
				   stroke="currentColor"
				   aria-hidden="true"
				 >
				   <path
					 stroke-linecap="round"
					 stroke-linejoin="round"
					 d="M6 18L18 6M6 6l12 12"
				   />
				 </svg>
			   </button>
			 </div>
		   </div>
		 </div>
 
		 <!-- Mobile menu -->
			 <?php 
				 $args = array(
					 // 'theme_location' => 'primary',    
					 'walker' => new SixbdigitalCustom_Nav_Walker_Mobile(),
					 'container_class' => 'hidden mobile-menu transition-all',
					 'container_id' => 'mobile-menu',
					 'menu_class' => 'space-y-1 pb-3 pt-2'
				 );
				 wp_nav_menu( $args ); 
			 ?>
	   </nav>
	 </header>
	 <!-- Header Section End Here -->
	 <main>