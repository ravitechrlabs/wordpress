<?php
if ( ! function_exists( 'franz_header_image' ) ) :
/**
 * Creates the tag for header image
 */
function franz_header_image(){
	$header = get_custom_header(); 
	if ( $header->url ) :
	
		/* Scale hidpi header image */
		$custom_header = get_theme_support( 'custom-header' );
		$header_args = array_pop( $custom_header );
		if ( $header->width >= ( 2 * $header_args['width'] ) ) {
			$header->width = floor( $header->width / 2 );
			$header->height = floor( $header->height / 2 );
		}
	?>
        <img src="<?php echo esc_url( $header->url ); ?>" height="<?php echo esc_attr( $header->height ); ?>" width="<?php echo esc_attr( $header->width ); ?>" alt="" />
        <!-- <img src="<?php echo esc_url( FRANZ_ROOTURI ); ?>/images/logo.png" srcset="<?php echo esc_url( FRANZ_ROOTURI ); ?>/images/logo.png 320w, <?php echo esc_url( FRANZ_ROOTURI ); ?>/images/logo-hd.png" class="img-responsive" width="250" height="30" alt="Franz Josef" /> -->
    <?php else : bloginfo( 'name' ); endif;
}
endif;


/**
 * Breadcrumb NavXT
 */
function franz_breadcrumbs(){
	if ( ! function_exists( 'bcn_display' ) ) return;
	if ( ! is_singular() && ! is_archive() && ! is_search() ) return;
	if ( is_front_page() || is_author() ) return;
	?>
    <div class="breadcrumbs-wrapper">
        <div class="container breadcrumbs" xmlns:v="http://rdf.data-vocabulary.org/#"><?php bcn_display(); ?></div>
    </div>
    <?php
}
add_action( 'franz_before_content', 'franz_breadcrumbs' );