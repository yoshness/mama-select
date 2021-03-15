<?php
/**
 * The template for displaying Interview Archive
 */
get_header();
?>

<main class="l-products">
	<?php
      	$article_args = array(
			'post_type'      => 'product',
			'product_category' => get_queried_object()->slug,
	    	'posts_per_page' => 12,
	    	'order'          => 'DESC',
	    	'post_status'    => 'publish',
	    	'paged' => get_query_var('paged')
		);
		$articles = new WP_Query($article_args);
		if ($articles->have_posts()) {
    ?>
	<section class="l-products__content">
		<div class="l-container">
			<ul class="u-flex">
				<?php 
					while ($articles->have_posts()): $articles->the_post(); 
						$featured_image = get_field('cover');
				?>
				<li>
					<div class="product-block">
						<a href="<?php the_field('url'); ?>" class="u-flex u-flex--center" target="_blank" rel="nofollow">
							<img src="<?php the_field('image'); ?>" alt="">
							<h3 class="js-truncate"><?php the_title(); ?></h3>
							<span>¥<?php the_field('price'); ?></span>
						</a>
					</div>
				</li>
				<?php endwhile; wp_reset_query(); ?>
			</ul>
			<div class="l-pagination pagination" id="js-pagination">
				<?php if ( function_exists('wp_pagenavi') ) : ?>
		        	<div class="pagenavi">
		            	<?php wp_pagenavi( array( 'query' => $articles = new WP_Query($article_args) ) ); ?>
		        	</div>
		        <?php endif; wp_reset_postdata(); ?>
			</div>
		</div>
	</section>
	<?php } else { ?>
	<div class="l-container">
		<p class="l-products__blank">そのカテゴリに属する​​製品は見つかりませんでした。</p>
	</div>
	<?php } ?>
</main>

<?php
get_footer();