<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package 😍
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function 😍_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => '😍_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function 😍_jetpack_setup
add_action( 'after_setup_theme', '😍_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function 😍_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function 😍_infinite_scroll_render
