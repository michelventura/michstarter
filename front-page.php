<?php
/**
 * Custom Front Page
 *
 */

 wp_enqueue_style( 'frontpage', CHILD_URL . '/assets/css/frontpage.css' );
 wp_enqueue_script( 'fadeup', CHILD_URL . '/assets/js/fadeup.js', array('jquery'), CHILD_THEME_VERSION, true );

add_action( 'home_content_area', 'mv_front_page' );
function mv_front_page() {
  the_post();
  the_content();
}

// Build the page
get_header();
do_action( 'home_content_area' );
get_footer();