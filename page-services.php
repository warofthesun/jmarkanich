<?php
/*
 Template Name: Services Page
*/
?>
<?php get_header(); ?>
<!--SERVICES-->
			<div id="content" class="services">

				<div id="inner-content" class="wrap cf">
					<h1 class="page-title m-all t-2of3 d-2of3"><i class="ti-logo-bug"></i><?php the_title(); ?></h1>
					<div class="title_buttons m-all t-1of3 d-1of3">
						<?php $my_query = new WP_Query('pagename=title buttons');
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate = $post->ID;

						// check if the repeater field has rows of data
						if( have_rows('title_buttons') ):

						// loop through the rows of data
							while ( have_rows('title_buttons') ) : the_row();

							// display a sub field value
						?>
						<a href="/<?php the_sub_field('title_button') ?>" class="white-btn"><?php the_sub_field('title_button') ?></a>
					<?php
						endwhile;
					else :
						// no rows found
					endif;
					?>
					</div>
					<?php endwhile; ?>
						<main id="main" class="m-all t-2of3 d-2of3 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php the_content(); ?>
							<?php endwhile; ?>

							<?php else : ?>

								<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the single.php template.', 'bonestheme' ); ?></p>
										</footer>
								</article>

							<?php endif; ?>

						</main>
						<div class="m-all t-1of3 d-1of3 cf sidebar-image"><?php the_post_thumbnail('portfolio_page_image') ?></div>
				</div>

			</div>

<?php get_footer(); ?>
