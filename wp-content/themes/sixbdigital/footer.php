<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 6bDigital
 */

?>
</main>
	<footer id="colophon" class="flex flex-shrink-0 text-gray-900 justify-center text-center text-xl font-medium my-4">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'sixbdigital' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'sixbdigital' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'sixbdigital' ), 'sixbdigital', '<a href="http://underscores.me/">Ravi</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
