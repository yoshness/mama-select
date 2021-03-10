<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header(); ?>

<main class="l-products">
	<section class="l-products__content">
		<div class="l-container">
			<h2 class="l-products__title">Search: <?php echo get_search_query(); ?></h2>
		    <?php
		      $article_args = array(
		        'custom_query'   => $wp_query
		      );

		      if ( $article_args['custom_query']->have_posts() ) {
		    ?>
			<ul class="u-flex">
				<?php 
					while($article_args['custom_query']->have_posts()): $article_args['custom_query']->the_post();
						$featured_image = get_field('cover');
				?>
				<li>
					<div class="product-block">
						<a href="<?php the_field('url'); ?>" class="u-flex u-flex--center" target="_blank">
							<img src="<?php the_field('image'); ?>" alt="">
							<h3><?php the_title(); ?></h3>
							<span>¥<?php the_field('price'); ?></span>
						</a>
					</div>
				</li>
				<?php endwhile; wp_reset_query(); ?>
			</ul>
			<?php } else { ?>
				<p class="l-products__blank">そのキーワードの商品は見つかりませんでした。</p>
			<?php } ?>
		</div>
	</section>
</main>

<?php
get_footer();
