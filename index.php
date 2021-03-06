<?php get_header(); ?>
<!--INDEX-->
			<div id="content" class="post-page">

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-5of7 cf top-post" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
							<h1 class="page-title m-all t-all d-all"><?php single_post_title(); ?></h1>
							<div>
							   <?php the_post(); ?>
								 <article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
	 								<?php the_post_thumbnail('blog_hero') ?>
	 								<header class="article-header">

	 									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
	 									<p class="byline entry-meta vcard">
	                                                                         <?php printf( __( '', 'bonestheme' ).'%2$s',
	                        								/* the time the post was published */
	                        								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
	                        								/* the author of the post */
	                        								'<span class="by">'.__( 'By', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
	                     							); ?>
	 									</p>

	 								</header>
	 								<section class="entry-content cf">
	 									<?php the_excerpt(); ?>
	 								</section>
	 								<footer class="article-footer cf">
	                  	<?php printf( '<p class="footer-category">' . __('', 'bonestheme' ) . ' %1$s</p>' , get_the_category_list(' | ') ); ?>
	                   	<?php the_tags( '<p class="footer-tags tags"><span class="tags-title">' . __( 'Tags:', 'bonestheme' ) . '</span> ', ', ', '</p>' ); ?>
	 								</footer>
	 							</article>
							</div>
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<?php if(is_sticky()) continue; //ignore sticky posts?>
							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article">
								<div class="m-all t-1of3 d-1of3 post-list-thumbnail">
									<?php the_post_thumbnail('portfolio_gallery_thumbnail') ?>
								</div>
								<div class="m-all t-2of3 d-2of3">
								<header class="article-header post-list">
									<h1 class="h2 entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
									<p class="byline entry-meta vcard">
                    <?php printf( __( '', 'bonestheme' ).'%2$s',
                       								/* the time the post was published */
                       								'<time class="updated entry-time" datetime="' . get_the_time('Y-m-d') . '" itemprop="datePublished">' . get_the_time(get_option('date_format')) . '</time>',
                       								/* the author of the post */
                       								'<span class="by">'.__( 'By', 'bonestheme').'</span> <span class="entry-author author" itemprop="author" itemscope itemptype="http://schema.org/Person">' . get_the_author_link( get_the_author_meta( 'ID' ) ) . '</span>'
                    							); ?>
									</p>

								</header>

								<section class="entry-content cf">
									<?php the_excerpt(); ?>
								</section>
								</div>
							</article>

							<?php endwhile; ?>

									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>


						</main>

					<?php get_sidebar(); ?>

				</div>

			</div>


<?php get_footer(); ?>
