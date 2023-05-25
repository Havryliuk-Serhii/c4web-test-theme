<!--    Block our instagram -->
<section class="instagramBlock">
	<?php
	$title = get_field( 'block_instagram_title' );
	if ( $title ) : ?>
        <h4 class="tittleBlock text-center"><?php echo $title; ?></h4>
	<?php endif;
	$img = get_field( 'block_instagram_image' );
	if ( $img ) : ?>
        <div class="wiget">
            <img src="<?php echo esc_url($img['url']); ?>" alt=" alt="<?php echo esc_attr($img['alt']); ?>">
        </div>
	<?php endif; ?>
</section>
