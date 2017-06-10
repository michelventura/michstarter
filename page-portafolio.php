<?php
/**
 * Custom Front Page
 *
 */
wp_enqueue_style('fadeupstyle', CHILD_URL . '/assets/css/fadeup.css');
wp_enqueue_script('fadeup', CHILD_URL . '/assets/js/fadeup.js', array( 'jquery' ) , CHILD_THEME_VERSION, true);

// Add custom portafolio heading page markup.
add_action('genesis_after_header', 'custom_portafolio_title_opening_wrap');
add_action('genesis_after_header', 'custom_portafolio_title');
add_action('genesis_after_header', 'custom_portafolio_description');
add_action('genesis_after_header', 'custom_portafolio_title_closing_wrap');

function custom_portafolio_title_opening_wrap() {
	echo '<div class="portafolio-heading">';
}

function custom_portafolio_title() {
	echo '<h1>Mi portafolio</h1>';
}

function custom_portafolio_description() {
	echo '<p>Aquí te muestro una selección de algunos trabajos recientes. Te muestro algunas funcionalidades que desarrollé para cada proyecto tanto de frontend (parte visible al visitante del sitio) cómo del backend (área de administración). Si te interesa colaborar conmigo <a href="/contacto">escríbeme</a> para descubrir juntos cómo podemos darle más valor a tu negocio.</p>';
}

function custom_portafolio_title_closing_wrap() {
	echo '</div>';
}

add_action('portafolio_content_area', 'mv_portafolio_page');
function mv_portafolio_page(){
    the_post();
    the_content();
}

add_action('custom_cta_content_area', 'display_cta_content_before_footer');
function display_cta_content_before_footer(){
	$id = 2175;
 	$contact_page = get_page($id);
 	echo apply_filters('the_content', $contact_page->post_content);
}

// Build the page
get_header();
do_action('portafolio_content_area');
do_action('custom_cta_content_area');
get_footer();
