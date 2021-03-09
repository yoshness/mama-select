<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */
?>

		<!-- <?php include( locate_template( 'template-parts/footer.php', false, false ) ); ?> -->

		<?php wp_footer(); ?>
		
		<script src="<?php echo get_template_directory_uri(); ?>/assets/app.js"></script>
	</body>
</html>
