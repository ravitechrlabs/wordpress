<div class="sidebar col-md-3">
	<?php do_action( 'franz_sidebar_top' ); ?>
    <?php 
		global $franz_settings;
		if ( ! $franz_settings['disable_search_widget'] ) {
			$sidebar_widgets = get_option( 'sidebars_widgets' );
			if ( $sidebar_widgets['sidebar'] ) {
				if ( ! preg_grep( '/^search-\d+/', $sidebar_widgets['sidebar'] ) ) {
					the_widget( 'WP_Widget_Search' );
				}
			}
		}
	?>
    
    <?php if ( is_page() ) franz_page_navigation(); ?>
    
    <?php dynamic_sidebar( 'sidebar' ); ?>
    <?php do_action( 'franz_sidebar_bottom' ); ?>
</div>