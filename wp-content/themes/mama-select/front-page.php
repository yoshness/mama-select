<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<main class="l-index" id="js-index-page">
	<div class="hero js-toggle-show" id="js-hero">
		<video id="js-hero-video" autoplay muted loop playsinline>
		  <source src="<?php echo IMAGE_URL; ?>/intro-video.mp4" type="video/mp4">
		</video>
	</div>
	<div class="l-index__categories js-toggle-show" id="js-categories">
		<div class="l-container">
			<?php 
				$categories = get_terms([
				    'taxonomy' => 'product_category',
				    'order'    => 'ASC',
				    'orderby'  => 'ID',
				    'hide_empty' => false,
				]);
			?>
			<ul class="u-flex">
				<?php foreach($categories as $cat) { ?>
				<li>
					<a href="<?php echo get_category_link( $cat->term_id ) ?>">
						<div class="category-block u-flex">
							<div class="category-block__image">
								<img src="<?php the_field('icon', $cat); ?>" alt="">
							</div>
							<h3><?php echo $cat->name; ?></h3>
						</div>
					</a>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
	<div class="l-index__ranking js-toggle-show" id="js-ranking">
		<div class="l-container">
			<?php 
				$ranked_products = array(
				    'post_type'=> 'product',
				    'order'    => 'ASC',
				    'meta_key' => 'rank',
					'orderby'  => 'meta_value',
				    'hide_empty' => false,
				);
				$articles = new WP_Query($ranked_products);
				if ($articles->have_posts()) {
			?>
			<ul class="u-flex">
				<?php 
					$count = 0;

					while ($articles->have_posts()): $articles->the_post();
					$featured_image = get_field('cover');
					$count++; 

					switch($count) {
						case 1:
							$modifier = 'gold';
							break;
						case 2:
							$modifier = 'silver';
							break;
						case 3:
							$modifier = 'bronze';
							break;
						default:
							$modifier = '';
							break;
					}
				 ?>
				<li class="<?php echo $modifier; ?>">
					<div class="medal">
				    	<div class="medal__circle">
				        	<span><?php echo ($count == 1 || $count == 2 || $count == 3) ? $count : ''; ?></span>
				      	</div>
				      	<div class="medal__ribbon medal__ribbon--left"></div>
				      	<div class="medal__ribbon medal__ribbon--right"></div>
				    </div>
				    <div class="product-block">
						<a href="<?php the_field('url'); ?>" class="u-flex u-flex--center" target="_blank" rel="nofollow">
							<img src="<?php the_field('image'); ?>" alt="">
							<h3><?php the_title(); ?></h3>
							<span>¥<?php the_field('price'); ?></span>
						</a>
					</div>
				</li>
				<?php endwhile; wp_reset_query(); ?>
			</ul>
			<?php } ?>
		</div>
	</div>
</main>

<?php
get_footer();