<?php
/**
 * Description
 *
 * @package     MichStarter\Mich\Structure
 * @since       1.0.0
 * @author      michelventura
 * @link        http://michelventura.com
 * @license     GNU General Public License 2.0+
 */
namespace MichStarter\Mich\Structure;

/**
 * Unregister post callbacks.
 *
 * @since 1.0.0
 *
 * @return void
 */
function unregister_post_callbacks() {

}

//* Customize the post meta function
add_filter( 'genesis_post_meta', __NAMESPACE__ . '\custom_post_meta_filter' );
function custom_post_meta_filter($post_meta) {
	if ( !is_page() ) {
		$post_meta = '[post_categories before="Categoria: "]';
		return $post_meta;
	}
}
