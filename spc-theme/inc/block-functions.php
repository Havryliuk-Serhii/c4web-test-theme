<?php
/**
 * Register ACF Blocks
 */
if( function_exists('acf_register_block') ) {
	add_action('acf/init', 'register_acf_block_types');
}
function register_acf_block_types() {
	acf_register_block_type([
		'name' => 'Hero slider',
		'title' => __('Hero slider'),
		'render_template' => 'blocks/block-hero.php',
		'icon' => 'block-default',
		'keywords' => array('block-hero'),
	]);
	acf_register_block_type([
		'name' => 'Articles',
		'title' => __('Articles'),
		'render_template' => 'blocks/block-article.php',
		'icon' => 'block-default',
		'keywords' => array('block-article'),
	]);
	acf_register_block_type([
		'name' => 'YouTube video',
		'title' => __('YouTube video'),
		'render_template' => 'blocks/block-video.php',
		'icon' => 'block-default',
		'keywords' => array('block-video'),
	]);
	acf_register_block_type([
		'name' => 'Our event',
		'title' => __('Our event'),
		'render_template' => 'blocks/block-event.php',
		'icon' => 'block-default',
		'keywords' => array('block-event'),
	]);
	acf_register_block_type([
		'name' => 'Subscribe',
		'title' => __('Subscribe'),
		'render_template' => 'blocks/block-subscribe.php',
		'icon' => 'block-default',
		'keywords' => array('block-subscribe'),
	]);
	acf_register_block_type([
		'name' => 'Our instagram',
		'title' => __('Our instagram'),
		'render_template' => 'blocks/block-instagram.php',
		'icon' => 'block-default',
		'keywords' => array('block-instagram'),
	]);
	acf_register_block_type([
		'name' => 'Block social links',
		'title' => __('Block social links'),
		'render_template' => 'blocks/block-social.php',
		'icon' => 'block-default',
		'keywords' => array('block-social'),
	]);

}
