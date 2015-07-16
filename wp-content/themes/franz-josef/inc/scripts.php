<?php
/**
 * Enqueue required scripts
 */
function franz_enqueue_scripts(){
	global $franz_settings;
	if ( ! is_admin() ) {
		
		wp_enqueue_script( 'bootstrap', FRANZ_ROOTURI . '/bootstrap/js/bootstrap.min.js', array( 'jquery' ) );
		wp_enqueue_script( 'franzjosef', FRANZ_ROOTURI . '/js/franzjosef.js', array( 'jquery' ) );
		wp_enqueue_script( 'html5shiv', FRANZ_ROOTURI . '/js/html5shiv/html5shiv.min.js' );
		wp_enqueue_script( 'respond', FRANZ_ROOTURI . '/js/respond.js/respond.min.js' );
		
		wp_enqueue_style( 'bootstrap', FRANZ_ROOTURI . '/bootstrap/css/bootstrap.min.css' );
		if ( is_rtl() ) wp_enqueue_style( 'bootstrap-rtl', FRANZ_ROOTURI . '/bootstrap-rtl/bootstrap-rtl.min.css', array( 'bootstrap' ) );
		wp_enqueue_style( 'franzjosef-fonts', FRANZ_ROOTURI . '/fonts/fonts.css' );
		wp_enqueue_style( 'font-awesome', FRANZ_ROOTURI . '/fonts/font-awesome/css/font-awesome.min.css' );
		wp_enqueue_style( 'franzjosef', get_stylesheet_uri(), array( 'bootstrap', 'font-awesome' ) );
		wp_enqueue_style( 'franzjosef-responsive', FRANZ_ROOTURI . '/responsive.css', array( 'bootstrap', 'font-awesome', 'franzjosef' ) );
		if ( is_rtl() ) wp_enqueue_style( 'franzjosef-responsive-rtl', FRANZ_ROOTURI . '/responsive-rtl.css', array( 'franzjosef' ) );
		
		if ( $franz_settings['print_css'] ) wp_enqueue_style( 'franzjosef-print', FRANZ_ROOTURI . '/print.css', array( 'franzjosef-responsive' ), false, 'print' );
	}
}
add_action( 'wp_enqueue_scripts', 'franz_enqueue_scripts' );


/**
 * Add conditional comments for IE-specific scripts
 */
function franz_script_loader_tag( $tag, $handle ) {
    if ( in_array( $handle, array( 'html5shiv', 'respond' ) ) ) $tag = "<!--[if lt IE 9]>$tag<![endif]-->\n";
	
	return $tag;
}
add_filter( 'script_loader_tag', 'franz_script_loader_tag', 10, 2 );


/**
 * Localize scripts and add JavaScript data
 */
function franz_localize_scripts(){
	global $franz_settings;
	
	$js_object = array(
			/* General */
			'templateUrl'			=> esc_url( FRANZ_ROOTURI ),
			'isSingular'			=> is_singular(),
			
			/* Comments */
			'shouldShowComments'	=> franz_should_show_comments(),
			
			/* Slider */
			'sliderDisable'			=> $franz_settings['slider_disable'],
			'sliderInterval'		=> $franz_settings['slider_interval'],
	);
	wp_localize_script( 'franzjosef', 'franzJS', apply_filters( 'franz_js_object', $js_object ) );
}
add_action( 'wp_enqueue_scripts', 'franz_localize_scripts' );