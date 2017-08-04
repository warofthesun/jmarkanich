<?php get_header('front'); ?>
<!--front-page-->
			<div id="content">
				<div class="hero_image"><a href="<?php the_field('hero_image_link'); ?>"><img src="<?php the_field('hero_image'); ?>"></a></div>
				<div id="inner-content" class="wrap cf">
					<?php
						$imageArray = get_field('first_navigation_image'); // Array returned by Advanced Custom Fields
						$imageAlt = esc_attr($imageArray['alt']); // Grab, from the array, the 'alt'
						$imageThumbURL = esc_url($imageArray['sizes']['front-page-navigation']); //grab from the array, the 'sizes', and from it, the 'thumbnail'
					?>
						<a href="#" class="d-1of3 m-all">

							<div class="navigation_image">
								<img src="<?php echo $imageThumbURL;?>">
							</div>
							<div class="navigation_text">
								<?php echo the_field('first_navigation_text'); ?>
							</div>
						</a>

						<a href="#" class="d-1of3 m-all navigation_image">
							<?php
								$imageArray = get_field('second_navigation_image'); // Array returned by Advanced Custom Fields
								$imageAlt = esc_attr($imageArray['alt']); // Grab, from the array, the 'alt'
								$imageThumbURL = esc_url($imageArray['sizes']['front-page-navigation']); //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<div>
								<img src="<?php echo $imageThumbURL;?>">
							</div>
							<div class="navigation_text">
								<?php echo the_field('second_navigation_text'); ?>
							</div>

						</a>
						<a class="d-1of3 m-all navigation_image">
							<?php
								$imageArray = get_field('third_navigation_image'); // Array returned by Advanced Custom Fields
								$imageAlt = esc_attr($imageArray['alt']); // Grab, from the array, the 'alt'
								$imageThumbURL = esc_url($imageArray['sizes']['front-page-navigation']); //grab from the array, the 'sizes', and from it, the 'thumbnail'
							?>
							<div>
								<img src="<?php echo $imageThumbURL;?>">
							</div>
							<div class="navigation_text">
								<?php echo the_field('third_navigation_text'); ?>
							</div>
						</a>
				</div>

			</div>

<?php get_footer(); ?>
