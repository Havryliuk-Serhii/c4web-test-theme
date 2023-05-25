<!--    Block social links  -->
<section class="socBlock">
	<h2 style="visibility: hidden;"><?php the_field('social_block_title'); ?></h2>
	<ul class="socList">
		<li>
			<?php
			$fb      = get_field( 'facebook', 'option' );
			$fb_link = $fb['facebook_link'];
			$fb_img  = $fb['facebook_icon'];
			if ( $fb_link && $fb_img ) : ?>
				<a href="<?php echo $fb_link['url']; ?>">
					<img src="<?php echo esc_url( $fb_img['url'] ); ?>"
					     alt="<?php echo esc_attr( $fb_img['alt'] ); ?>">
				</a>
			<?php endif; ?>
		</li>
		<li>
			<?php
			$tw      = get_field( 'twitter', 'option' );
			$tw_link = $tw['twitter_link'];
			$tw_img  = $tw['twitter_icon'];
			if ( $tw_link && $tw_img ) : ?>
				<a href="<?php echo $tw_link['url']; ?>">
					<img src="<?php echo esc_url( $tw_img['url'] ); ?>" alt="<?php echo
					esc_attr( $tw_img['alt'] ); ?>">
				</a>
			<?php endif; ?>
		</li>
		<li>
			<?php
			$insta      = get_field( 'instagram', 'option' );
			$insta_link = $insta['instagram_link'];
			$insta_img  = $insta['instagram_icon'];
			if ( $insta_link && $insta_img ) : ?>
				<a href="<?php echo $insta_link['url']; ?>">
					<img src="<?php echo esc_url( $insta_img['url'] ); ?>" alt="<?php echo
					esc_attr( $insta_img['alt'] ); ?>">
				</a>
			<?php endif; ?>
		</li>
		<li>
			<?php
			$yt      = get_field( 'youtube', 'option' );
			$yt_link = $yt['youtube_link'];
			$yt_img  = $yt['youtube_icon'];
			if ( $yt_link && $yt_img ) : ?>
				<a href="<?php echo $yt_link['url']; ?>">
					<img src="<?php echo esc_url( $yt_img['url'] ); ?>" alt="<?php echo
					esc_attr( $yt_img['alt'] ); ?>">
				</a>
			<?php endif; ?>
		</li>
	</ul>
</section>
