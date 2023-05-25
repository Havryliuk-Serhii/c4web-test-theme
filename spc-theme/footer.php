<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Philharmo_Theme
 */

?>
<footer>
	<?php
	$top_block       = get_field( 'footer_top_block', 'option' );
	$top_block_title = $top_block['footer_top_block_title'];
    $top_block_slider = $top_block['footer_slider'];

	if ( $top_block_title ) : ?>
        <h4 class="tittleBlock text-center"><?php echo $top_block_title; ?></h4>
	<?php endif;
	?>

    <div class="owl-carousel owl-theme logoList actSliderFooter">
	    <?php
	    $counter = 1;
        foreach ($top_block_slider as $slide) : ?>
            <div class="item">
                <a href="<?php echo $slide['footer_slider_link']['url']; ?>">
                    <img src="<?php echo $slide['footer_slider_image']['url']; ?>" alt="<?php echo $slide['footer_slider_image']['alt']; ?>"
                         class="logo<?php echo $counter; ?>">
                </a>
            </div>
	    <?php
	        $counter++;
        endforeach; ?>
    </div>
    <div class="back-to-top">
        <img src="<?php bloginfo( 'template_directory' ); ?>/images/upArroy.png" alt="up">
    </div>
    <p class="textFooter text-center text-uppercase"><?php bloginfo( 'name' ); ?></p>
	<?php
	$middle_block   = get_field( 'middle_footer_block', 'option' );
	$middle_address = $middle_block['footer_address'];
	$middle_phone   = $middle_block['footer_phone'];
	$middle_email   = $middle_block['footer_email'];
	$website_links  = $middle_block['footer_websites_links'];

	if ( $middle_address ) : ?>
        <p class="textFooter text-center"><?php echo $middle_address; ?></p>
	<?php endif;
	if ( $middle_phone ) : ?>
        <p class="textFooter text-center"><?php echo __( 'Phone: ' ); ?><a href="tel:<?php echo $middle_phone; ?>"
                                                                           class="footerLinkNum"><?php echo $middle_phone; ?></a>
        </p>
	<?php endif;
	if ( $middle_email ) : ?>
        <a href="mailto:<?php echo $middle_email; ?>" class="text-center footerLink"><?php echo $middle_email; ?></a>
	<?php endif;
	foreach ( $website_links as $website_link ) : ?>
        <a href="<?php echo $website_link['website_item']; ?>"
           class="text-center footerLink"><?php echo $website_link['website_item']; ?> </a>
	<?php endforeach; ?>
    <ul class="footerListSoc">
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
        <li><a href="#"><img src="<?php bloginfo( 'template_directory' ); ?>/images/search.png" alt="search"></a></li>
    </ul>
	<?php
	$bottom_group   = get_field( 'bottom_footer_block', 'option' );
	$design         = $bottom_group['design_footer'];
	$design_website = $bottom_group['design_website'];
	$photo          = $bottom_group['photography_footer'];
	?>
    <p class="textFooter text-center">
		<?php if ( $design && $design_website ) : ?>
            <b><?php echo __( 'DESIGN ' ); ?></b><?php echo $design; ?> <a href="<?php echo $design_website; ?>"
                                                                           class="footerLinkNum"><?php echo $design_website; ?></a>
		<?php endif; ?>
    </p>
    <p class="textFooter text-center">
		<?php if ( $photo ) : ?>
            <b><?php echo __( 'PHOTOGRAPHY ' ); ?></b>
			<?php echo $photo;
		endif; ?>
    </p>

</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
