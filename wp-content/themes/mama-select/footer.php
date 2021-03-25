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
<span class="popup__close js-popup-close"></span>
<div class="popup" id="js-popup">
	<div class="popup__content">
		<div class="popup__details">
			<img src="" class="popup__image js-popup-image" alt="">
			<p class="popup__title js-popup-title"></p>
			<p class="popup__description js-popup-description"></p>

			<div class="popup__bottom u-flex">
				<em class="popup__price js-popup-price"></em>
				<a href="#" class="js-popup-url" target="_blank" rel="nofollow">Read More</a>
			</div>
		</div>
	</div>
</div>

		<?php wp_footer(); ?>
		
		<script src="<?php echo get_template_directory_uri(); ?>/assets/app.js"></script>
	</body>
</html>
