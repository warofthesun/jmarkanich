<?php
/*
 Template Name: Contact Page Alt
*/
?>
<!--PAGE CONTACT ALT-->
<?php get_header(); ?>
			<div id="content">
				<div id="inner-content" class="wrap cf">
						<main id="main" class="m-all t-2of3 d-2of3 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">


							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<h1 class="page-title"><?php the_title(); ?></h1>
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
						<div class="m-all t-1of3 d-1of3 cf sidebar-image"><?php the_post_thumbnail('sidebar_image') ?></div>
						<div style="clear:both">
						<?php if( get_field('image_one') ): ?>
						<?php
							$imageArray = get_field('image_one'); // Array returned by Advanced Custom Fields
							$imageThumbURL = esc_url($imageArray['sizes']['portfolio_gallery_thumbnail']); //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<div class="m-all t-1of3 d-1of3 image-row"><img src="<?php echo $imageThumbURL;?>"></div>
						<?php endif; ?>
						<?php if( get_field('image_two') ): ?>
						<?php
							$imageArray = get_field('image_two'); // Array returned by Advanced Custom Fields
							$imageThumbURL = esc_url($imageArray['sizes']['portfolio_gallery_thumbnail']); //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<div class="m-all t-1of3 d-1of3 image-row"><img src="<?php echo $imageThumbURL;?>"></div>
						<?php endif; ?>
						<?php if( get_field('image_three') ): ?>
						<?php
							$imageArray = get_field('image_three'); // Array returned by Advanced Custom Fields
							$imageThumbURL = esc_url($imageArray['sizes']['portfolio_gallery_thumbnail']); //grab from the array, the 'sizes', and from it, the 'thumbnail'
						?>
						<div class="m-all t-1of3 d-1of3 image-row"><img src="<?php echo $imageThumbURL;?>"></div>
						<?php endif; ?>
					</div>
				</div>

			</div>


<?php get_footer(); ?>
