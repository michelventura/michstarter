<?php
/*
 * Template Name: Custom
 * Template Post Type: page
 */
wp_enqueue_style( 'custom-styles', CHILD_URL . '/custom.css', array(), CHILD_THEME_VERSION );
add_filter( 'body_class', 'custom_genesis_page_body_class' );
/**
 * Adds a css class to the body element
 *
 * @param  array $classes the current body classes
 * @return array $classes modified classes
 */
function custom_genesis_page_body_class( $classes ) {
	$classes[] = 'mv-custom';
	return $classes;
}

add_filter( 'genesis_attr_site-inner', 'custom_genesis_page_attributes_site_inner' );
/**
 * Add attributes for site-inner element.
 *
 * @since 2.0.0
 *
 * @param array $attributes Existing attributes.
 *
 * @return array Amended attributes.
 */
function custom_genesis_page_attributes_site_inner( $attributes ) {
	$attributes['role']     = 'main';
	$attributes['itemprop'] = 'mainContentOfPage';

	return $attributes;
}

// Remove div.site-inner's div.wrap
add_filter( 'genesis_structural_wrap-site-inner', '__return_empty_string' );

// Display Header
get_header();

// Display Content
the_post(); 
the_content();

// Display Footer
get_footer();
