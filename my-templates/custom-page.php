<?php
/*
 * Template Name: Custom
 * Template Post Type: page
 */
?>
<?php
add_action( 'wp_head', 'custom_genesis_page_styles' );
function custom_genesis_page_styles() {
	echo '<style type="text/css">.mv-custom,.mv-custom .site-container,.mv-custom .site-container .site-inner{max-width:100%;width:100%;background:none;border:0;float:none;margin:0 auto;padding:0;box-shadow:none;border-radius:0;-webkit-border-radius:0;-webkit-box-shadow:none}.mv-custom .center-block{margin:0 auto}.mv-custom .center-text{text-align:center}.mv-custom .clearfix:before,.clearfix:after{content:"\0020";display:table}.mv-custom .clearfix:after{clear:both}.mv-custom .clearfix{*zoom:1}@media screen and (max-width: 500px){.mv-custom .fl-row-bg-video video{left:0!important}.mv-custom .fl-row-bg-video{min-width:360px}}</style>';
    }

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
