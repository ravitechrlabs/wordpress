<?php
global $content_width;
$content_width = 848;
/**
 * Setup the theme
 */
function franz_setup(){
	
	load_theme_textdomain( 'franz-josef', FRANZ_ROOTDIR . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'custom-background' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'html5' );
	add_theme_support( 'comment-form' );
	add_theme_support( 'post-formats', array( 'quote', 'status' ) );
	add_editor_style( array( 'bootstrap/css/bootstrap.min.css', 'fonts/fonts.css', 'editor-style.css' ) );
	
	$args = array(
		'width'                  => 250,
		'height'                 => 30,
		'flex-height'            => true,
		'flex-width'             => true,
		'default-text-color'     => 'ffffff',
		'wp-head-callback'       => '',
		'admin-head-callback'    => '',
		'admin-preview-callback' => '',
	);
	add_theme_support( 'custom-header', apply_filters( 'franz_custom_header_args', $args ) );
	
	$args = array( 'default-color'          => 'ffffff' );
	add_theme_support( 'custom-background', apply_filters( 'franz_custom_background_args', $args ) );
	
	set_post_thumbnail_size( 850, 450, false );
	add_image_size( 'franz-medium', 550, 300, true );
	add_image_size( 'franz-slider', 1920, 685, true );
	
	add_post_type_support( 'page', 'excerpt' );
	
	register_nav_menus( array( 
		'header-menu' => __( 'Header Menu', 'franz-josef' ),
		'footer-menu' => __( 'Footer Menu', 'franz-josef' ),
	) );
	
	do_action( 'franz_setup' );
}
add_action( 'after_setup_theme', 'franz_setup' );


/**
 * Register widgetized areas
 */
function franz_widgets_init() {
	global $franz_settings;
		
	$args = array( 
		'name' 			=> __( 'Sidebar', 'franz-josef' ),
		'id' 			=> 'sidebar',
		'before_widget' => '<div id="%1$s" class="clearfix widget %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h3 class="section-title-sm">',
		'after_title' 	=> '</h3>',
	);
	register_sidebar( apply_filters( 'franz_sidebar_args', $args ) );
	
	$args = array( 
		'name' 			=> __( 'Footer', 'franz-josef' ),
		'id' 			=> 'footer-widgets',
		'before_widget' => '<div id="%1$s" class="clearfix item col-sm-6 col-md-' . floor( 12 / $franz_settings['footerwidget_column'] ) . ' %2$s">',
		'after_widget' 	=> '</div>',
		'before_title' 	=> '<h4 class="item-title">',
		'after_title' 	=> '</h4>',
	);
	register_sidebar( apply_filters( 'franz_footer_widget_args', $args ) );
	
}
add_action( 'widgets_init', 'franz_widgets_init' );