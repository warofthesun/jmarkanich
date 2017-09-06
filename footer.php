			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div id="inner-footer" class="wrap cf">
					<div class="footer_info">
							<?php $my_query = new WP_Query('pagename=footer');
							while ($my_query->have_posts()) : $my_query->the_post();
							$do_not_duplicate = $post->ID;?>

					    <div class="entry">

								<?php

								// check if the repeater field has rows of data
								if( have_rows('social_platform') ):

								// loop through the rows of data
									while ( have_rows('social_platform') ) : the_row();



										// display a sub field value
									?>
											<a href="<?php the_sub_field('social_link') ?>" class="fa fa-<?php the_sub_field('social_icon')?>" target="_blank"></a>
								<?php

									endwhile;

								else :

									// no rows found

								endif;

								?>
								<div class="footer_contact">
								<span class="email">email: <a href="mailto:<?php the_field('email_address') ?>"><?php the_field('email_address') ?></a></span>
								<span class="phone">phone: <?php the_field('phone_number') ?></span>
								<div class="address"><?php the_field('address') ?></div>
								</div>
					    </div>

					 <?php endwhile; ?>

						<p class="source-org copyright" style="text-align:center">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
					</div>
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
