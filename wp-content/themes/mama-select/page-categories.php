<?php
/* 
Template Name: Categories List
*/

get_header();
?>

<main class="l-index">
	<div class="l-index__categories is-shown">
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
</main>

<?php
get_footer();