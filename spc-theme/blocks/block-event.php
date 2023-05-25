<!--    Block our Events-->
<section class="ourEvent container">
    <div class="row">
		<?php
		if ( have_rows( 'events' ) ):
			while ( have_rows( 'events' ) ) : the_row();
				$link     = get_sub_field( 'event_link' );
				$title    = get_sub_field( 'event_title' );
				$image    = get_sub_field( 'event_image' );
				$text     = get_sub_field( 'event_text' );
				$checkbox = get_sub_field( 'only_text' );
				?>
                <div class="col-md-4">
					<?php
					if ( $checkbox == true ) {
						if ( $link && $text ) : ?>
                            <a href="<?php echo $link['url']; ?>">
                                <div class="concertBlockText">
									<?php echo $text; ?>
                                </div>
                            </a>
						<?php endif;
					} else {
						if ( $title && $link && $image ) : ?>
                            <h4 class="tittleBlock"><?php echo $title; ?></h4>
                            <a href="<?php echo $link['url']; ?>">
                                <img src="<?php echo esc_url( $image['url'] ); ?>"
                                     alt="<?php echo esc_attr( $image['alt'] ); ?>">
                            </a>
						<?php endif;
					}
					?>
                </div>
			<?php endwhile;
		endif; ?>
    </div>
</section>
