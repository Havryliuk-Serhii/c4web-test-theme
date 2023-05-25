<!--    YouTube video   -->
<section class="youtube">
	<?php
	$title      = get_field( 'youtube_title' );
	$video_link = get_field( 'video_link' );
	$poster     = get_field( 'poster' );
	if ( $title ) : ?>
        <h4 class="tittleBlock padleft"><?php echo $title; ?></h4>
	<?php endif;
	if ( $video_link && $poster ) : ?>
        <div class="video_container" data-youtube-src="<?php echo $video_link; ?>">
            <buttom class="play_button">
                <img src="<?php bloginfo( 'template_directory' ); ?>/images/page/buttonStart.png" alt="start Play">
            </buttom>
            <div class="poster">
                <img src="<?php echo esc_url( $poster['url'] ); ?>" alt="<?php echo esc_attr( $poster['alt'] ); ?>">
            </div>
        </div>
	<?php endif; ?>
</section>
