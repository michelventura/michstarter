<?php
/**
* Template Name: Portafolio child
* Description: Template for single portafolio 
*/
wp_enqueue_script('portafolio', CHILD_URL . '/assets/js/portafolio.js', array( 'jquery' ) , '', true);

//* Remove breadcrumbs and page title
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );

//* Add Featured Image on single portafolio
add_action( 'portafolio_feat_img', 'display_feat_img' );
function display_feat_img() {
        echo '<div class="feat-img">';
    	echo "<p>Hola Carola</p>";
        echo '</div>';    
}

add_action('portafolio_child_content', 'portafolio_child_page');
function portafolio_child_page(){
    the_post();
    the_content();
}

add_action('paginacion', 'before_cta_quote');
function before_cta_quote(){
    echo '<div class="paginacion-nav">';
	echo "Paginacion";
    echo '</div>';
}

add_action('before_cta_quote', 'before_cta_content');
function before_cta_content(){
	echo '<div class="cta-content">';
}

add_action('cta_quote', 'cta_content');
function cta_content(){
	$id = 2175;
 	$contact_page = get_page($id);
 	echo apply_filters('the_content', $contact_page->post_content);
}

add_action('after_cta_quote', 'after_cta_content');
function after_cta_content(){
	echo '</div>';
}

// Build the page
get_header();
do_action('portafolio_feat_img');
do_action('portafolio_child_content');
do_action('paginacion');
do_action('before_cta_quote');
do_action('cta_quote');
do_action('after_cta_quote');
get_footer();
