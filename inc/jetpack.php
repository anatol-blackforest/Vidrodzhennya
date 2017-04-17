<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package partia
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function partia_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'partia_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function partia_jetpack_setup
add_action( 'after_setup_theme', 'partia_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function partia_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function partia_infinite_scroll_render
