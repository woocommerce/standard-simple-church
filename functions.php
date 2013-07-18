<?php

//load google webfont
	wp_register_style( 'google_font_one', 'http://fonts.googleapis.com/css?family=Open+Sans:300,400,700' );
wp_enqueue_style( 'google_font_one' );

// Disable pings to self
function no_self_ping( &$links ) {
    $home = get_option( 'home' );
    foreach ( $links as $l => $link )
        if ( 0 === strpos( $link, $home ) )
            unset($links[$l]);
}
add_action( 'pre_ping', 'no_self_ping' );


//Redirect single result searches to post
add_action('template_redirect', 'single_result');
function single_result() {
    if (is_search()) {
        global $wp_query;
        if ($wp_query->post_count == 1) {
            wp_redirect( get_permalink( $wp_query->posts['0']->ID ) );
        }
    }
}



/* ----------------------------- *
 * 	DO NOT MODIFY ANYTHING BELOW THIS LINE
 * ----------------------------- */

/**
 * Defines the required plugins.
 */

require_once dirname( __FILE__ ) . '/required-plugin-activation.php';
add_action( 'tgmpa_register', 'my_theme_register_required_plugins' );
function my_theme_register_required_plugins() {

	$plugins = array(

		array(
			'name' 		=> 'Meteor Slides',
			'slug' 		=> 'meteor-slides',
			'required' 	=> true,
		),

		array(
			'name' => 'Standard Sticky Footer',
			'slug' => 'standard-sticky-footer',
			'source' => get_stylesheet_directory() . '/lib/plugins/standard-sticky-footer.zip',
			'required' => true,
			'force_deactivation' => true,
        ),

	);


	tgmpa( $plugins, $config );

}


?>