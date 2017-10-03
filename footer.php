<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package efektywnyaltruizm-org
 */

?>

	</main><!-- .page-main -->

	<footer class="background">
		<div class="container-fluid page-container page-footer">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'efektywnyaltruizm-org' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'efektywnyaltruizm-org' ), 'WordPress' );
			?></a>
			<span class="sep"> | </span>
			<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'efektywnyaltruizm-org' ), 'efektywnyaltruizm-org', '<a href="http://underscores.me/">Underscores.me</a>' );
			?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
