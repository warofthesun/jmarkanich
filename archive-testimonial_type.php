<?php
/*
 * TESTIMONIAL POST TYPE ARCHIVE TEMPLATE
*/
?>

<?php get_header(); ?>
<!--ARCHIVE TESTIMONIAL-->
			<div id="content" class="testimonial">

				<div id="inner-content" class="wrap cf">
						<main id="main" class="m-all t-3of3 d-3of3 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<h1 class="page-title m-all t-1of2 d-2of3"><?php post_type_archive_title(); ?></h1>
							<div class="title_buttons m-all t-1of2 d-1of3">
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


							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

									<section class="entry-content cf testimonial" itemprop="articleBody">
										<div class="m-all t-1of3 d-1of4">
											<div class="customer_name"><?php the_field('customer_name') ?></div>
											<a href="<?php site_url(); ?>/portfolio_item/<?php the_field('portfolio_link') ?>" class="project_name"><?php the_title() ?></a>
										</div>
										<div class="m-all t-2of3 d-3of4">
										<?php
											// the content (pretty self explanatory huh)
											the_content();
										?>
										</div>
										<div style="width:100%;text-align:center">
										<a href="<?php site_url(); ?>/portfolio_item/<?php the_field('portfolio_link') ?>" class="white-btn" style="text-align:center;">view project</a>
									</div>
									</section>
									<div class="teaser_images">
										<?php
											$imageArray = get_field('image_one'); // Array returned by Advanced Custom Fields
											$imageThumbURL = esc_url($imageArray['sizes']['portfolio_gallery_thumbnail']); //grab from the array, the 'sizes', and from it, the 'thumbnail'
										?>
										<div class="m-all t-1of3 d-1of3 image-row"><img src="<?php echo $imageThumbURL;?>"></div>
										<?php
											$imageArray = get_field('image_two'); // Array returned by Advanced Custom Fields
											$imageThumbURL = esc_url($imageArray['sizes']['portfolio_gallery_thumbnail']); //grab from the array, the 'sizes', and from it, the 'thumbnail'
										?>
										<div class="m-all t-1of3 d-1of3 image-row"><img src="<?php echo $imageThumbURL;?>"></div>
										<?php
											$imageArray = get_field('image_three'); // Array returned by Advanced Custom Fields
											$imageThumbURL = esc_url($imageArray['sizes']['portfolio_gallery_thumbnail']); //grab from the array, the 'sizes', and from it, the 'thumbnail'
										?>
										<div class="m-all t-1of3 d-1of3 image-row"><img src="<?php echo $imageThumbURL;?>"></div>
									</div>
							</article>
							<?php endwhile; else : ?>

							<?php endif; ?>

						</main>

				</div>

			</div>

<?php get_footer(); ?>
