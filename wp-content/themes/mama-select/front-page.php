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
		<video autoplay muted loop playsinline>
		  <source src="<?php echo IMAGE_URL; ?>/intro-video.mp4" type="video/mp4">
		</video>
	</div>
	<div class="l-index__categories js-toggle-show" id="js-categories">
		<div class="l-container">
			<?php 
				$page = ( get_query_var('paged') ) ? get_query_var( 'paged' ) : 1;
				$per_page = 12;
			    $offset = ( $page-1 ) * $per_page;
			    $args = array( 'orderby' => 'ID', 'order' => 'ASC', 'number' => $per_page, 'offset' => $offset, 'hide_empty' => 0 );

				$categories = get_terms('product_category', $args);
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
			<?php
				$total_terms = wp_count_terms( 'product_category' );
			    $pages = ceil($total_terms/$per_page);

			    if( $pages > 1 ): 
			?>
			<div class="l-pagination" id="js-pagination">
				<div class="pagenavi">
					<?php echo '<ul class="custom-pagination">
						<li>
							<span>Page'.$page.' of '.$pages.'</span>
						</li>';
				        for ($pagecount=1; $pagecount <= $pages; $pagecount++):
				        	if($pagecount == $page - 1) {
					        	$page_class = 'previouspostslink';
					        }
					        else if($pagecount == $page + 1) {
					        	$page_class = 'nextpostslink';
					        }
					        else {
					        	$page_class = '';
					        }
				            echo '<li>';
					            if($pagecount == $page) {
					            	echo '<span class="current">'.$pagecount.'</span>';
					            }
					            else {
					            	echo '<a href="'.HOME_URL.'categories/page/'.$pagecount.'/" class="'.$page_class.'">'.$pagecount.'</a>';
					            }
				            echo '</li>';
				        endfor;
				        echo '</ul>';
					?>
				</div>
			</div>
			<?php endif;?>
		</div>
	</div>
	<div class="l-index__ranking js-toggle-show" id="js-ranking">
		<div class="l-container">
			<?php 
				$ranked_products = array(
				    'post_type'=> 'product',
				    'order'    => 'ASC',
				    'meta_key' => 'rank',
					'orderby'  => 'meta_value_num',
				    'meta_query'      => array(
				        array(
				            'key'     => 'rank',
				            'value'   => '',
				            'compare' => '!='
				        )
				    ),
				    'posts_per_page' => 12
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
				        	<span><?php echo $count ?></span>
				      	</div>
				      	<div class="medal__ribbon medal__ribbon--left"></div>
				      	<div class="medal__ribbon medal__ribbon--right"></div>
				    </div>
				    <div class="product-block">
						<a href="#" 
							class="u-flex u-flex--center js-popup-trigger" 
							data-img="<?php the_field('image'); ?>" 
							data-title="><?php the_title(); ?>" 
							data-description="<?php the_field('description'); ?>" 
							data-price="<?php the_field('price'); ?>" 
							data-url="<?php the_field('url'); ?>">
							<img src="<?php the_field('image'); ?>" alt="">
							<h3 class="js-truncate"><?php the_title(); ?></h3>
							<span>¥<?php the_field('price'); ?></span>
						</a>
					</div>
				</li>
				<?php endwhile; wp_reset_query(); ?>
			</ul>
			<?php } ?>
		</div>
	</div>
	<div class="l-index__latest js-toggle-show" id="js-latest">
		<div class="l-container">
			<?php 
				$ranked_products = array(
				    'post_type'=> 'product',
				    'order'    => 'DESC',
				    'posts_per_page' => 12
				);
				$articles = new WP_Query($ranked_products);
				if ($articles->have_posts()) {
			?>
			<ul class="u-flex">
				<?php 
					while ($articles->have_posts()): $articles->the_post();
					$featured_image = get_field('cover');
				 ?>
				<li>
				    <div class="product-block">
						<a href="#" 
							class="u-flex u-flex--center js-popup-trigger" 
							data-img="<?php the_field('image'); ?>" 
							data-title="><?php the_title(); ?>" 
							data-description="<?php the_field('description'); ?>" 
							data-price="<?php the_field('price'); ?>" 
							data-url="<?php the_field('url'); ?>">
							<img src="<?php the_field('image'); ?>" alt="">
							<h3 class="js-truncate"><?php the_title(); ?></h3>
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