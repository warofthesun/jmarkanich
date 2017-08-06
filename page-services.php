<?php
/*
 Template Name: Services Page
*/
?>


<?php get_header(); ?>
<!--SERVICES-->
			<div id="content">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<?php
								$args = array( 'post_type' => 'portfolio_type', 'posts_per_page' => 9 );
								$loop = new WP_Query( $args );
								while ( $loop->have_posts() ) : $loop->the_post();
									echo '<a href="';
									the_permalink();
									echo '" class="d-1of3 portfolio_page">';
									echo '<div class="portfolio_image" style="background-image:url(';
									the_post_thumbnail_url('portfolio_page_image');
									echo ")";
									echo '"><div class="portfolio_image-overlay">';
									echo "<div class='portfolio_text'>";
								  the_title();
								  echo '</div></div></div></a>';

								endwhile;
							?>

						</main>
				</div>

			</div>


<?php get_footer(); ?>
