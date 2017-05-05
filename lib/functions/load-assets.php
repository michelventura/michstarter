<?php
/**
 * Asset loader handler
 *
 * @package     MichStarter\Mich
 * @since       1.0.0
 * @author      michelventura
 * @link        http://michelventura.com
 * @license     GNU General Public License 2.0+
 */
namespace MichStarter\Mich;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_assets' );
/**
 * Enqueue Scripts and Styles.
 *
 * @since 2.3.0
 *
 * @return void
 */
function enqueue_assets() {

	wp_enqueue_style( CHILD_TEXT_DOMAIN . '-fonts', '//fonts.googleapis.com/css?family=Lato:400,700,700italic', array(), CHILD_THEME_VERSION );
	wp_enqueue_script( CHILD_TEXT_DOMAIN . '-global', CHILD_URL . '/js/global.min.js', array( 'jquery' ), CHILD_THEME_VERSION, true );
	wp_enqueue_style( 'dashicons' );
	wp_enqueue_style( 'flexboxgrid', CHILD_URL . '/assets/css/flexboxgrid.min.css' );
	wp_enqueue_style( 'ionicons', '//code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css', array(), CHILD_THEME_VERSION );

	// suffix added by StudioPress in version 2.3.0
	$suffix = ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) ? '' : '.min';
	wp_enqueue_script( 
		CHILD_TEXT_DOMAIN . '-responsive-menu', 
		CHILD_URL . "/assets/js/responsive-menu{$suffix}.js", 
		array( 'jquery' ), 
		CHILD_THEME_VERSION, 
		true 
	);

	// changed for new Sample theme v.2.3.0
	wp_localize_script( 
		CHILD_TEXT_DOMAIN . '-responsive-menu', 
		'michstarter', 
		get_sample_responsive_menu_settings() 
	);
}

/**
 * Get the sample theme's responsive menu settings
 *
 * @since 2.3.0
 *
 * @return array
 */
function get_sample_responsive_menu_settings() {
	$settings = array(
		'mainMenu'         => __( 'Menu', TEXT_DOMAIN ),
		'menuIconClass'    => 'dashicons-before dashicons-menu',
		'subMenu'          => __( 'Menu', TEXT_DOMAIN ),
		'subMenuIconClass' => 'dashicons-before dashicons-arrow-down-alt2',
		'menuClasses'      => array(
			'combine' => array(
				'.nav-primary',
				'.nav-header',
				'.nav-secondary',
			),
			'others'  => array(
				'.nav-footer',
				'.nav-sidebar',
			),
		),
	);
	return $settings;
}