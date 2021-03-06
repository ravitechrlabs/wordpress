<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
    <head>
        <meta charset="<?php esc_attr( bloginfo( 'charset' ) ); ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
    	<!-- Header -->
    	<div class="navbar navbar-inverse navbar-fixed-top">
            
            <div class="header container">
                <div class="navbar-header logo">
                	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#header-menu-wrapper">
                        <span class="sr-only"><?php _e( 'Toggle navigation', 'franz-josef' ); ?></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <?php $tag = ( is_front_page() ) ? 'h1' : 'h2'; ?>
                    <<?php echo $tag; ?> class="site-title"><a href="<?php echo home_url(); ?>">
                    	<?php franz_header_image(); ?>
                    </a></<?php echo $tag; ?>>
                </div>
                <div class="collapse navbar-collapse" id="header-menu-wrapper">
                	<?php 
						/* Header menu */
						$args = array(
							'theme_location'=> 'header-menu',
							'container'     => false,
							'menu_class'    => 'nav navbar-nav navbar-right flip',
							'echo'          => true,
							'fallback_cb'   => 'franz_page_menu',
							'items_wrap'    => '<ul id="%1$s" class="%2$s">%3$s</ul>',
							'depth'         => 3,
							'walker'		=> new FJ_Walker_Page()
						);
						if ( has_nav_menu( $args['theme_location'] ) ) $args['walker'] = new FJ_Walker_Nav_Menu();
						
						wp_nav_menu( $args );
					?>
                    <?php do_action( 'franz_header_menu' ); ?>
                </div>
            </div>
        </div>
        
        <?php do_action( 'franz_before_content' ); ?>