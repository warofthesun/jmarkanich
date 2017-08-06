<?php
/*
 * TESTIMONIAL POST TYPE ARCHIVE TEMPLATE
*/
?>

<?php get_header(); ?>
<!--ARCHIVE TESTIMONIAL-->
			<div id="content">

				<div id="inner-content" class="wrap cf">
						<main id="main" class="m-all t-3of3 d-3of3 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

								<header class="article-header">

									<h1 class="page-title m-all t-2of3 d-2of3"><?php post_type_archive_title(); ?></h1>
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
								</header>
							<?php endwhile; ?>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();
									?>

								</section>

							</article>

							<?php endwhile; else : ?>

							<?php endif; ?>

						</main>
						<?php
							$imageArray = get_field('image_one'); // Array returned by Advanced Custom Fields
							$imageThumbURL = esc_url($imageArray['sizes']['portfolio_gallery_thumbnail']); //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<div class="m-all t-1of3 d-1of3"><img src="<?php echo $imageThumbURL;?>"></div>
						<?php
							$imageArray = get_field('image_two'); // Array returned by Advanced Custom Fields
							$imageThumbURL = esc_url($imageArray['sizes']['portfolio_gallery_thumbnail']); //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<div class="m-all t-1of3 d-1of3"><img src="<?php echo $imageThumbURL;?>"></div>
						<?php
							$imageArray = get_field('image_three'); // Array returned by Advanced Custom Fields
							$imageThumbURL = esc_url($imageArray['sizes']['portfolio_gallery_thumbnail']); //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<div class="m-all t-1of3 d-1of3"><img src="<?php echo $imageThumbURL;?>"></div>
				</div>

			</div>

<?php get_footer(); ?>
