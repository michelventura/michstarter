<?php
/**
 * Custom Front Page
 *
 */

 wp_enqueue_style( 'animate', CHILD_URL . '/assets/css/animate.min.css' );
 wp_enqueue_script( 'wow', CHILD_URL . '/assets/js/wow.min.js', array(), CHILD_THEME_VERSION, true );

 //* Enqueue script to activate WOW.js
function home_wow_init_in_footer() {
	add_action( 'print_footer_scripts', 'wow_init' );
}
//* Add JavaScript before </body>
function wow_init() { ?>
	<script type="text/javascript">
		new WOW().init();
	</script>
<?php }

add_action('wp_enqueue_scripts', 'home_wow_init_in_footer');

function mv_front_page() {
  mv_genesis_header();
  echo '<section class="home-content">';
  the_post();
  the_content();
  echo '</section>';
  mv_genesis_footer();
}
add_action( 'home_content_area', 'mv_front_page' );

// Customised Genesis Header
function mv_genesis_header() {
	do_action( 'genesis_doctype' );
	do_action( 'genesis_title' );
	do_action( 'genesis_meta' );
	wp_head();
?>
	</head>
	<?php
	genesis_markup( array(
		'html5'   => '<body %s>',
		'xhtml'   => sprintf( '<body class="%s">', implode( ' ', get_body_class() ) ),
		'context' => 'body',
	) );
	do_action( 'genesis_before' );
	genesis_markup( array(
		'html5'   => '<div %s>',
		'xhtml'   => '<div id="wrap">',
		'context' => 'site-container',
	) );
	do_action( 'genesis_before_header' );
	do_action( 'genesis_header' );
	do_action( 'genesis_after_header' );
}
// Customised Genesis Footer
function mv_genesis_footer() {
	do_action( 'genesis_before_footer' );
	do_action( 'genesis_footer' );
	do_action( 'genesis_after_footer' );
	echo '</div>';
	do_action( 'genesis_after' );
	wp_footer();
	?>
	</body>
	</html>
<?php
}

// Build the page
do_action( 'home_content_area' );
