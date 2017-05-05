<?php
/**
 * Sidebar (widgetized areas) HTML markup structure
 *
 * @package     MichStarter\Mich\Structure
 * @since       1.0.0
 * @author      michelventura
 * @link        http://michelventura.com
 * @license     GNU General Public License 2.0+
 */
namespace MichStarter\Mich\Structure;

/**
 * Unregister sidebar callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_sidebar_callbacks() {
  unregister_sidebar( 'sidebar' );
  unregister_sidebar( 'sidebar-alt' );
}
