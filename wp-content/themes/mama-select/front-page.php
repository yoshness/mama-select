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
		<video autoplay="" muted="" loop="">
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
						<div class="category-block u-flex u-flex--center">
							<img src="<?php the_field('icon', $cat); ?>" alt="">
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
				$ranked_categories = get_terms([
				    'taxonomy' => 'product_category',
				    'order'    => 'ASC',
				    'meta_key' => 'rank',
					'orderby'  => 'meta_value',
				    'hide_empty' => false,
				]);
			?>
			<ul class="u-flex">
				<?php foreach($ranked_categories as $key=>$cat) {
					switch($key + 1) {
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
				        	<span><?php echo ($key + 1 == 1 || $key + 1 == 2 || $key + 1 == 3) ? $key + 1 : ''; ?></span>
				      	</div>
				      	<div class="medal__ribbon medal__ribbon--left"></div>
				      	<div class="medal__ribbon medal__ribbon--right"></div>
				    </div>
				    <a href="<?php echo get_category_link( $cat->term_id ) ?>">
						<div class="category-block u-flex u-flex--center">
							<img src="<?php the_field('icon', $cat); ?>" alt="">
								<h3><?php echo $cat->name; ?></h3>
						</div>
					</a>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</main>

<?php
get_footer();