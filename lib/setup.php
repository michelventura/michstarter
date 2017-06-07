<?php
/**
 * Description
 *
 * @package     MichStarter\Mich
 * @since       1.0.0
 * @author      michelventura
 * @link        http://michelventura.com
 * @license     GNU General Public License 2.0+
 */
namespace MichStarter\Mich;

add_action( 'genesis_setup', __NAMESPACE__ . '\setup_child_theme', 15 );
/**
 * Setup child theme.
 *
 * @since 2.3.0
 *
 * @return void
 */
function setup_child_theme() {
	adds_theme_supports();
	unregister_layouts();

	add_filter( 'edit_post_link', '__return_empty_string' );

	unregister_genesis_callbacks();

}

/**
 * Adds theme supports to the site.
 *
 * @since 1.0.0
 *
 * @return void
 */
function adds_theme_supports() {
	$config = array(
		'html5'                           => array(
			'caption',
			'comment-form',
			'comment-list',
			'gallery',
			'search-form'
		),
		'genesis-accessibility'           => array(
			'404-page',
			'drop-down-menu',
			'headings',
			'rems',
			'search-form',
			'skip-links'
		),
		'genesis-responsive-viewport'     => null,
		'custom-background'               => null,
		'genesis-after-entry-widget-area' => null,
		'genesis-footer-widgets'          => 3,
		'genesis-menus'                   => array(
			'primary'   => __( 'After Header Menu', CHILD_TEXT_DOMAIN ),
			'secondary' => __( 'Footer Menu', CHILD_TEXT_DOMAIN )
		),
	);

	foreach ( $config as $feature => $args ) {
		add_theme_support( $feature, $args );
	}
}

/**
 * Unregister the Genesis Layouts.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_layouts() {
	$layouts = array(
		'sidebar-content',
//		'content-sidebar',
		'content-sidebar-sidebar',
		'sidebar-content-sidebar',
		'sidebar-sidebar-content',
	);
	foreach( $layouts  as $layout ) {
		genesis_unregister_layout( $layout );
	}
	// temporary fix for Genesis bug 06.22.2016
	genesis_set_default_layout( 'full-width-content' );
}

/**
 * Unregister Genesis callbacks.  We do this here because the child theme loads before Genesis.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_genesis_callbacks() {
	Structure\unregister_menu_callbacks();
	Structure\unregister_sidebar_callbacks();
}

add_filter( 'genesis_theme_settings_defaults', __NAMESPACE__ . '\set_theme_settings_defaults' );
/**
 * Set theme settings defaults.
 *
 * @since 1.0.0
 *
 * @param array $defaults
 *
 * @return array
 */
function set_theme_settings_defaults( array $defaults ) {
	$config = get_theme_settings_defaults();

	$defaults = wp_parse_args( $config, $defaults );

	return $defaults;
}

add_action( 'after_switch_theme', __NAMESPACE__ . '\update_theme_settings_defaults' );
/**
 * Sets the theme setting defaults.
 *
 * @since 1.0.0
 *
 * @return void
 */
function update_theme_settings_defaults() {
	$config = get_theme_settings_defaults();

	if ( function_exists( 'genesis_update_settings' ) ) {
		genesis_update_settings( $config );
	}

	update_option( 'posts_per_page', $config['blog_cat_num'] );
}

/**
 * Get the theme settings defaults.
 *
 * @since 1.0.0
 *
 * @return array
 */
function get_theme_settings_defaults() {
	return array(
		'blog_cat_num'              => 12,
		'content_archive'           => 'full',
		'content_archive_limit'     => 250,
		'content_archive_thumbnail' => 0,
		'posts_nav'                 => 'numeric',
		'site_layout'               => 'full-width-content',
	);
}

add_filter( 'theme_page_templates', __NAMESPACE__ . '\remove_genesis_page_templates' );
/**
 * Remove Genesis Blog page template.
 *
 * @param array $page_templates Existing recognised page templates.
 *
 * @return array Amended recognised page templates.
 */
function remove_genesis_page_templates( $page_templates ) {
	unset( $page_templates['page_blog.php'] );
	unset( $page_templates['page_landing.php'] );
	unset( $page_templates['page_archive.php'] );
	return $page_templates;
}

//* Remove post info
add_filter( 'genesis_post_info', __NAMESPACE__ . '\mv_post_info_filter' );
	function mv_post_info_filter() {
		return;
}

//* Customize the next page link
add_filter ( 'genesis_next_link_text', __NAMESPACE__ . '\sp_next_page_link' );
function sp_next_page_link ( $text ) {
    return 'Siguiente página &#x000BB;';
}

//* Customize the previous page link
add_filter ( 'genesis_prev_link_text', __NAMESPACE__ . '\sp_previous_page_link' );
function sp_previous_page_link ( $text ) {
    return '&#x000AB; Página anterior';
}

//* Change the footer text */
add_filter('genesis_footer_creds_text', __NAMESPACE__ . '\custom_footer_creds_filter');
function custom_footer_creds_filter( $creds ) {
			$creds = 'Copyright [footer_copyright] <a href="'.get_bloginfo( 'url' ).'">'.get_bloginfo( 'name' ).'</a>.';
			return $creds;
}

//* Modify breadcrumb arguments.
add_filter( 'genesis_breadcrumb_args', __NAMESPACE__ . '\mv_breadcrumb_args' );
function mv_breadcrumb_args( $args ) {
	$args['home'] = 'Inicio';
	$args['sep'] = '&nbsp;  &raquo; &nbsp;';
	$args['labels']['prefix'] = 'Estas aquí: &nbsp;';
return $args;
}

//* Remove Contact Page title
add_action( 'get_header', __NAMESPACE__ . '\remove_contact_page_title' );
function remove_contact_page_title() {
        if ( is_page( 'contacto' ) ) {
           remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
  }
}
