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

add_action( 'genesis_setup', __NAMESPACE__ . '\setup_child_theme' );
/**
 * Setup child theme.
 *
 * @since 2.3.0
 *
 * @return void
 */
function setup_child_theme() {
	unregister_genesis_callbacks();

	adds_theme_supports();
	adds_new_image_sizes();
}

/**
 * Unregister Genesis callbacks.  We do this here because the child theme loads before Genesis.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_genesis_callbacks() {
	unregister_menu_callbacks();
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
		'custom-header'                   => array(
			'width'           => 600,
			'height'          => 160,
			'header-selector' => '.site-title a',
			'header-text'     => false,
			'flex-height'     => true,
		),
		'custom-background'               => null,
		'genesis-after-entry-widget-area' => null,
		//'genesis-footer-widgets'          => 3,
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
 * Adds new image sizes.
 *
 * @since 1.0.0
 *
 * @return void
 */
function adds_new_image_sizes() {
	$config = array(
		'featured-image' => array(
			'width'  => 720,
			'height' => 400,
			'crop'   => true,
		),
		'large' => array(
			'width'  => 500,
			'height' => 500,
			'crop'   => true,
		),
		'thumb' => array(
			'width'  => 280,
			'height' => 280,
			'crop'   => true,
		),
	);

	foreach( $config as $name => $args ) {
		$crop = array_key_exists( 'crop', $args ) ? $args['crop'] : false;

		add_image_size( $name, $args['width'], $args['height'], $crop );
	}
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
		'content_archive_limit'     => 0,
		'content_archive_thumbnail' => 0,
		'posts_nav'                 => 'numeric',
		'site_layout'               => 'content-sidebar',
	);
}

//add_action( 'after_setup_theme', 'genesis_sample_localization_setup' );
/**
 * Setup the theme's localization
 *
 * @since 2.3.0
 *
 * @return void
 */
function genesis_sample_localization_setup(){
	load_child_theme_textdomain( 'genesis-sample', get_stylesheet_directory() . '/languages' );
}
