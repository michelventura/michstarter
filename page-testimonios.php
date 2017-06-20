<?php

//* Remove breadcrumbs and page title
remove_action( 'genesis_before_loop', 'genesis_do_breadcrumbs' );
remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_open', 5 );
remove_action( 'genesis_entry_header', 'genesis_entry_header_markup_close', 15 );

// Add custom portafolio heading page markup.
add_action('genesis_after_header', 'custom_portafolio_title_opening_wrap');
add_action('genesis_after_header', 'custom_portafolio_title');
add_action('genesis_after_header', 'custom_portafolio_title_closing_wrap');

function custom_portafolio_title_opening_wrap() {
	echo '<div class="portafolio-heading">';
}

function custom_portafolio_title() {
	echo '<h1>Testimonios</h1>';
}

function custom_portafolio_title_closing_wrap() {
	echo '</div>';
}

genesis();
