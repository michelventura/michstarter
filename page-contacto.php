<?php
/**
 * Contact Page
 *
 */

// Enqueue Angular scripts
wp_enqueue_script('angularjs', CHILD_URL . '/node_modules/angular/angular.min.js');
wp_enqueue_script('angularjs-route', CHILD_URL . '/node_modules/angular-route/angular-route.min.js');
wp_enqueue_script( 'myApp', CHILD_URL . '/assets/js/mvApp.js', array( 'angularjs', 'angularjs-route' ));

//*Remove Standard Genesis Loop
remove_action('genesis_loop', 'genesis_do_loop');

//*Add a controller in the Angular view to work with
add_action('genesis_loop', __NAMESPACE__ . '\do_ng_view_content');
function do_ng_view_content() {
$output = '<div ng-controller="controlador">
<form>
<input type="text" ng-model="post.placeholder" />
</form>
<div>{{post.placeholder}}</div>
</div>';
echo $output;
}

genesis();
