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
				 <!-- <div class=""> -->
					 <?php 
						 $args = array(
							'theme_location' => 'primary',    
							 'walker' => new My_Custom_Nav_Walker(),
							 'container_class' => 'hidden lg:flex items-center',
							 'menu_class' => 'sm:ml-8 lg:flex sm:space-x-8 items-center'
						 );
						 wp_nav_menu( $args ); 
					 ?>
					 <!-- <a
					 href="#"
					 class="inline-flex items-center px-1 pt-1 text-base font-normal text-gray-500 active"
					 >Home</a
					 >
					 <a
					 href="#"
					 class="inline-flex items-center px-1 pt-1 text-base font-normal text-gray-400 hover:text-indigo-500"
					 >Products</a> 
					 <div class="relative flex dropdown">
						 <a href="#" class="inline-flex items-center gap-x-1 text-base font-normal leading-6 hover:text-primary-600 text-gray-500" aria-expanded="false">
							 <span>Products</span>
							 <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								 <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
							 </svg>
						 </a>
						 <div class="dropdown-menu absolute right-0 top-6 z-10 mt-5 flex w-screen max-w-min px-4">
							 <div class="w-56 shrink rounded-xl bg-white p-4 text-base font-normal leading-6 text-gray-500 shadow-lg ring-1 ring-gray-900/5">
								 <a href="#" class="block p-2 hover:text-primary-600">Product One</a>
								 <a href="#" class="block p-2 hover:text-primary-600">Product Two</a>
								 <a href="#" class="block p-2 hover:text-primary-600">Product Three</a>
								 <a href="#" class="block p-2 hover:text-primary-600">Product Four</a>
								 <a href="#" class="block p-2 hover:text-primary-600">Product Five</a>
								 <a href="#" class="block p-2 hover:text-primary-600">Product Six</a>
							 </div>
						 </div>
					 </div>
					 <a
					 href="#"
					 class="inline-flex items-center px-1 pt-1 text-base font-normal text-gray-400 hover:text-indigo-500"
					 >Resources</a
					 >
					 <div class="relative flex dropdown">
						 <a href="#" class="inline-flex items-center gap-x-1 text-base font-normal leading-6 hover:text-primary-600 text-gray-500" aria-expanded="false">
							 <span>Resources</span>
							 <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
								 <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
							 </svg>
						 </a>
						 <div class="dropdown-menu absolute right-0 top-6 z-10 mt-5 flex w-screen max-w-min px-4">
							 <div class="w-56 shrink rounded-xl bg-white p-4 text-base font-normal leading-6 text-gray-500 shadow-lg ring-1 ring-gray-900/5">
								 <a href="#" class="block p-2 hover:text-primary-600">Resource One</a>
								 <a href="#" class="block p-2 hover:text-primary-600">Resource Two</a>
								 <a href="#" class="block p-2 hover:text-primary-600">Resource Three</a>
								 <a href="#" class="block p-2 hover:text-primary-600">Resource Four</a>
								 <a href="#" class="block p-2 hover:text-primary-600">Resource Five</a>
								 <a href="#" class="block p-2 hover:text-primary-600">Resource Six</a>
							 </div>
						 </div>
					 </div>
					 <a
					 href="#"
					 class="inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-base font-normal text-gray-500 hover:text-primary-600"
					 >Pricing</a
					 > 
				 </div>-->
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
 <!--         <div class="" id="mobile-menu">
		   <div class="s"> -->
			 <?php 
				 $args = array(
					 // 'theme_location' => 'primary',    
					 'walker' => new My_Custom_Nav_Walker_Mobile(),
					 'container_class' => 'hidden mobile-menu transition-all',
					 'container_id' => 'mobile-menu',
					 'menu_class' => 'space-y-1 pb-3 pt-2'
				 );
				 wp_nav_menu( $args ); 
			 ?>
			 <!-- <a
			   href="#"
			   class="block border-l-4 border-primary-600 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-primary-700"
			   >Home</a
			 >
			 <a
			   href="#"
			   class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700"
			   >Products</a
			 >
			 <a
			   href="#"
			   class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700"
			   >Resources</a
			 >
			 <a
			   href="#"
			   class="block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700"
			   >Pricing</a
			 > -->
		   <!-- </div>
		 </div> -->
	   </nav>
	 </header>
	 <!-- Header Section End Here -->
	 <main>