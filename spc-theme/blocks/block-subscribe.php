<!--    Block subscribe -->
<section class="subscribe">
	<?php
	$title = get_field( 'block_subscribe_title' );
	if ( $title ) : ?>
        <h4 class="tittleBlock text-center"><?php echo $title; ?></h4>
	<?php endif; ?>
    <div class="formEmail">
		<?php
		$form = get_field( 'subscribe_form' );
		if ( $form ):
			echo $form;
		endif; ?>
    </div>
</section>
