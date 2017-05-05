<?php
/**
 * Custom Front Page
 *
 */
function mich_front_page() {
  //echo '<div class="home-content"><div class="wrap">';
  the_post();
  the_content();
  //echo '</div></div>';
}
add_action( 'home_content_area', 'mich_front_page' );

// Remove 'site-inner' from structural wrap
add_theme_support( 'genesis-structural-wraps', array( 'header', 'footer-widgets', 'footer' ) );

/**
 * Add attributes for site-inner element, since we're removing 'content'.
 *
 * @param array $attributes Existing attributes.
 * @return array Amended attributes.
 */
function mv_site_inner_attr( $attributes ) {
	$attributes['role']     = 'main';
	$attributes['itemprop'] = 'mainContentOfPage';
	return $attributes;
}
// Remove div.site-inner's div.wrap
add_filter( 'genesis_structural_wrap-site-inner', '__return_empty_string' );

// Build the page
get_header();
do_action( 'home_content_area' );
get_footer();


