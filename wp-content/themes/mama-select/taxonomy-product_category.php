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
	    	'posts_per_page' => -1,
	    	'order'          => 'DESC',
	    	'post_status'    => 'publish'
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
						<a href="<?php the_field('url'); ?>" class="u-flex u-flex--center" target="_blank">
							<img src="<?php the_field('image'); ?>" alt="">
							<h3><?php the_title(); ?></h3>
							<span>¥<?php the_field('price'); ?></span>
						</a>
					</div>
				</li>
				<?php endwhile; ?>
			</ul>
		</div>
	</section>
	<?php } ?>
</main>

<?php
get_footer();