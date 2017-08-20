<?php
/*
 Template Name: Press Page
*/
?>
<?php get_header(); ?>
<!--PRESS PAGE-->
			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-3of3 d-7of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<?php
								$args = array( 'post_type' => 'press_type', 'posts_per_page' => 0 );
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
									echo '<a href="';
									the_permalink();
									echo '" class="m-all t-1of3 d-1of3 press_page">';
									echo '<img src="';
									the_post_thumbnail_url('press_page_thumbnail');
									echo '" width="100%"><div class="press_title">';
									the_title();
									echo '</div></a>';

								endwhile;
							?>

						</main>
				</div>

			</div>


<?php get_footer(); ?>
