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

<main class="l-index">
	<div class="l-index__categories">
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
					<div class="category-block u-flex u-flex--center">
						<a href="<?php echo get_category_link( $cat->term_id ) ?>" class="u-flex u-flex--center">
							<img src="<?php the_field('icon', $cat); ?>" alt="">
							<h3><?php echo $cat->name; ?></h3>
						</a>
					</div>
				</li>
				<?php } ?>
			</ul>
		</div>
	</div>
</main>

<?php
get_footer();