<!--    Hero slider -->
<section class="sliderBlock">
    <div class="owl-carousel owl-theme actSlider">
		<?php
		if ( have_rows( 'hero_slider' ) ):
			$counter = 1;
			while ( have_rows( 'hero_slider' ) ) : the_row();
				$image          = get_sub_field( 'slide_image' );
				$title          = get_sub_field( 'hero_title' );
				$text           = get_sub_field( 'hero_text' );
				$link           = get_sub_field( 'hero_link' );
				$background_url = $image ? $image['url'] : get_template_directory_uri() . '/img/slider/' . ( $counter % 2 == 0 ? '2.png' : '1.png' );
				?>

                <div class="item mainSlider<?php echo $counter; ?>">
                    <div class="sliderStyle slider<?php echo $counter; ?>"
                         style="background: url(<?php echo $background_url; ?>); background-size: cover; background-repeat: no-repeat;">
                        <div class="containerSlider">
                            <div class="blockNow">
								<?php if ( $title ) : ?>
                                    <h3><?php echo $title; ?></h3>
								<?php endif;
								if ( $text ) : ?>
                                    <p class="textSlider">
										<?php echo $text; ?>
                                    </p>
								<?php endif;
								if ( $link ) : ?>
                                    <a href="#" class="nowLink">BOOK NOW</a>
								<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
				<?php
				$counter ++;
			endwhile;
		endif; ?>
    </div>
</section>
