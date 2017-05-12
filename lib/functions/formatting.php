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

remove_filter( 'the_content', 'wpautop' );
remove_filter( 'the_excerpt', 'wpautop' );