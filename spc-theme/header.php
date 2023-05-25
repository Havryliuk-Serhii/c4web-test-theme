<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Philharmo_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <meta name="description" content="description">
    <meta name="keywords" content="keywords">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'spc' ); ?></a>

    <header class="container">
        <div class="row">
            <div class="col-md-7 col-sm-7">
                <ul class="logoLine">
                    <li>
						<?php
						if ( has_custom_logo() ) {
							the_custom_logo();
						} else {
							if ( is_front_page() && is_home() ) :
								?>
                                <h1 class="site-title"><a class="logoPage"
                                                          href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                                          rel="home"><?php bloginfo( 'name' ); ?></a></h1>
							<?php
							else :
								?>
                                <p class="site-title"><a class="logoPage"
                                                         href="<?php echo esc_url( home_url( '/' ) ); ?>"
                                                         rel="home"><?php bloginfo( 'name' ); ?></a></p>
							<?php
							endif;
						}
						?>
                    </li>
                    <li>
						<?php
						$first_link_group = get_field( 'first_top_header_link', 'option' );
						$first_link       = $first_link_group['first_header_link'];
						$first_link_img   = $first_link_group['first_link_image'];
						if ( $first_link ): ?>
                            <a href="<?php echo $first_link['url'] ?>">
								<?php if ( $first_link_img ) : ?>
                                    <img src="<?php echo esc_url( $first_link_img['url'] ); ?>"
                                         alt="<?php echo esc_attr( $first_link_img['alt'] ); ?>">
								<?php endif; ?>
                            </a>
						<?php endif;
						?>
                    </li>
                    <li>
						<?php
						$second_link_group = get_field( 'second_top_header_link', 'option' );
						$second_link       = $second_link_group['second_header_link'];
						$second_link_img   = $second_link_group['second_link_image'];
						if ( $second_link ): ?>
                            <a href="<?php echo $second_link['url'] ?>">
								<?php if ( $second_link_img ) : ?>
                                    <img src="<?php echo esc_url( $second_link_img['url'] ); ?>"
                                         alt="<?php echo esc_attr( $second_link_img['alt'] ); ?>">
								<?php endif; ?>
                            </a>
						<?php endif;
						?>
                    </li>
                </ul>
            </div>
            <div class="col-md-5 col-sm-5">
                <div class="topHeaderBlock">
                    <ul class="headerNav">
						<?php
						$right_top_header_group = get_field( 'right_top_header_block', 'option' );
						$right_top_link         = $right_top_header_group['top_right_header_link'];
						$top_header_text        = $right_top_header_group['top_header_text'];
						$right_bottom_link      = $right_top_header_group['bottom_right_header_link'];
						?>
                        <li>
							<?php if ( $right_top_link ) : ?>
                                <a href="<?php echo $right_top_link['url']; ?>" class="shop"><?php echo
									$right_top_link['title']; ?></a>
							<?php endif; ?>
                        </li>
                        <li>
                            <ul class="headerListSoc">
                                <li>
                                    <div class="sendSearch"></div>
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
                            </ul>
                        </li>
                        <li>
							<?php if ( $right_bottom_link ) : ?>
                                <a href="<?php echo $right_bottom_link['url']; ?>"><?php echo
									$right_bottom_link['title']; ?></a>
							<?php endif; ?>
                        </li>
                    </ul>
                    <p class="headerText">
						<?php if ( ! empty( $top_header_text ) ) :
							echo $top_header_text;
						endif; ?>
                    </p>
                </div>
                <div class="searchRow">
	                <?php get_search_form(); ?>
                </div>
            </div>
        </div>
        <nav class="navbar navbar-default navbar-static-top">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed icon-menu menuActive" data-target="#navbar"
                        aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse menu">
	            <?php
	            wp_nav_menu(array(
		            'theme_location' => 'menu-1',
		            'container' => false,
		            'menu_class' => 'nav navbar-nav',
		            'fallback_cb' => 'wp_bootstrap_navwalker::fallback',
		            'walker' => new Bootstrap_Nav_Walker()
	            ));
	            ?>
            </div>
        </nav>
    </header>

