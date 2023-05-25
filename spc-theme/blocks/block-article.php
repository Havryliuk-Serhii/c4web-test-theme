<!--    Articles    -->
<section class="articleSpaceBlock container">
	<?php if ( have_rows( 'posts_section' ) ):
		while ( have_rows( 'posts_section' ) ): the_row();
			$title_main = get_sub_field( 'posts_section_title' );
			$articles   = get_sub_field( 'articles_list' );
			if ( $title_main && $articles ): ?>
                <h4 class="tittleBlock padleft"><?php echo $title_main; ?></h4>
				<?php foreach ( $articles as $article ) :
					setup_postdata( $article ); ?>
                    <div class="articleSpace">
                        <div class="imgBlock">
							<?php
							$thumbnail_id = get_post_thumbnail_id( $article->ID );
							echo wp_get_attachment_image( $thumbnail_id, '' ); ?>
                        </div>
                        <div class="contentText">
                            <h5 class="titleArticle"><?php echo $article->post_title; ?></h5>
							<?php echo apply_filters( 'the_content', $article->post_content ); ?>
                            <a href="<?php echo get_permalink( $article->ID ); ?>"
                               class="moreInfo"><?php echo __( 'MORE INFO' ); ?>
                            </a>
							<?php
							$book_now_link = get_field( 'book_now_link', $article->ID );
							if ( ! empty( $book_now_link ) ) { ?>
                                <a href="<?php echo $book_now_link['url']; ?>" class="bookNow"><?php echo
									$book_now_link['title']; ?></a>
								<?php
							}
							?>
                        </div>
                    </div>
				<?php endforeach;
				wp_reset_postdata();
			endif;
		endwhile;
	endif; ?>
</section>
