<?php
/**
 * Output stacks
 */
function franz_stack( $stack, $args = array() ){
	$stack = str_replace( '-', '_', $stack );
	if ( function_exists( 'franz_stack_' . $stack ) ) {
		do_action( 'franz_before_stack_' . $stack );
		call_user_func( 'franz_stack_' . $stack, $args );
		do_action( 'franz_after_stack_' . $stack );
	}
}


if ( ! function_exists( 'franz_stack_contra' ) ) :
/**
 * Stack: Contra
 */
function franz_stack_contra( $args = array() ){
	?>
    <!-- Contra -->
    <div class="contra">
        <div class="container">
            <div class="row with-icon">
                <div class="col-md-4 item">
                    <h3 class="item-title">Perfect for business</h3>
                    <p>Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam. Aliquam in tortor enim.</p>
                    <i class="fa fa-bullseye"></i>
                </div>
                <div class="col-md-4 item">
                    <h3 class="item-title">Clean, modern code</h3>
                    <p>Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam. Aliquam in tortor enim.</p>
                    <i class="fa fa-desktop"></i>
                </div>
                <div class="col-md-4 item">
                    <h3 class="item-title">Endlessly customisable</h3>
                    <p>Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam. Aliquam in tortor enim.</p>
                    <i class="fa fa-cogs"></i>
                </div>
            </div>
        </div>
    </div>
    
    <div class="contra contra-inverse">
        <div class="container">
            <div class="row with-icon">
                <div class="col-md-4 item">
                    <h3 class="item-title">Perfect for business</h3>
                    <p>Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam. Aliquam in tortor enim.</p>
                    <i class="fa fa-bullseye"></i>
                </div>
                <div class="col-md-4 item">
                    <h3 class="item-title">Clean, modern code</h3>
                    <p>Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam. Aliquam in tortor enim.</p>
                    <i class="fa fa-desktop"></i>
                </div>
                <div class="col-md-4 item">
                    <h3 class="item-title">Endlessly customisable</h3>
                    <p>Phasellus enim libero, blandit vel sapien vitae, condimentum ultricies magna et. Quisque euismod orci ut et lobortis aliquam. Aliquam in tortor enim.</p>
                    <i class="fa fa-cogs"></i>
                </div>
            </div>
        </div>
    </div>
    <?php
}
endif;


if ( ! function_exists( 'franz_stack_gallery' ) ) :
/**
 * Stack: Gallery
 */
function franz_stack_gallery( $args = array() ){
	?>
    <div class="gallery">
        <div class="container">
            <div class="row">
                <div class="item col-xs-6 col-md-4">
                    <a href="#"><img src="<?php echo FRANZ_ROOTURI; ?>/images/content/frontpage-gallery.jpg" width="370" height="270" alt="" /></a>
                </div>
                <div class="item item-title col-xs-6 col-md-4">
                    <a href="#">
                        <img src="<?php echo FRANZ_ROOTURI; ?>/images/content/frontpage-gallery.jpg" width="370" height="270" alt="" />
                        <span></span>
                        <div class="gallery-title">
                            <h3>Aotearoa Travelogue</h3>
                            <p class="gallery-date">March 24, 2014</p>
                        </div>
                    </a>
                </div>
                <div class="item col-xs-6 col-md-4">
                    <a href="#"><img src="<?php echo FRANZ_ROOTURI; ?>/images/content/frontpage-gallery.jpg" width="370" height="270" alt="" /></a>
                </div>
                <div class="item col-xs-6 col-md-4">
                    <a href="#"><img src="<?php echo FRANZ_ROOTURI; ?>/images/content/frontpage-gallery.jpg" width="370" height="270" alt="" /></a>
                </div>
                <div class="item col-xs-6 col-md-4">
                    <a href="#"><img src="<?php echo FRANZ_ROOTURI; ?>/images/content/frontpage-gallery.jpg" width="370" height="270" alt="" /></a>
                </div>
                <div class="item col-xs-6 col-md-4">
                    <a href="#"><img src="<?php echo FRANZ_ROOTURI; ?>/images/content/frontpage-gallery.jpg" width="370" height="270" alt="" /></a>
                </div>
            </div>
        </div>
    </div><strong></strong>
    <?php
}
endif;


if ( ! function_exists( 'franz_stack_quote' ) ) :
/**
 * Stack: Quote
 */
function franz_stack_quote( $args = array() ){
	?>
    <div class="quote">
        <div class="container">
            <div class="row">
                <blockquote>
                    <p>"The behavior you're seeing is the behavior you've designed for."</p>
                    <cite>Joshua Porter</cite>
                </blockquote>
            </div>
        </div>
    </div>
    <?php
}
endif;


if ( ! function_exists( 'franz_stack_cta' ) ) :
/**
 * Stack: Call to Action
 */
function franz_stack_cta( $args = array() ){
	?>
    <div class="cta">
        <div class="container">
            <h2 class="item-title">Like what you're seeing?</h2>
            <p>You can have the same call-to-action anywhere on your website too.</p>
            <p><a href="" class="btn btn-lg btn-default">View Portfolio</a></p>
        </div>
    </div>
    <?php
}
endif;


if ( ! function_exists( 'franz_stack_mentions_bar' ) ) :
/**
 * Stack: Mentions Bar
 */
function franz_stack_mentions_bar( $args = array() ){
	global $franz_settings;
	if ( ! $franz_settings['brand_icons'] ) return;
	?>
	<div class="affiliates">
        <div class="container">
        	<?php do_action( 'franz_mentions_bar' ); ?>
            <ul class="affiliates-logo">
            	<?php foreach ( $franz_settings['brand_icons'] as $brand_icon ) : ?>
                <li>
                	<?php if ( $brand_icon['link'] ) : ?><a href="<?php echo $brand_icon['link']; ?>"><?php endif; ?>
					<?php echo wp_get_attachment_image( $brand_icon['image_id'], 'full' ); ?>
                    <?php if ( $brand_icon['link'] ) : ?></a><?php endif; ?>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <?php
}
endif;


if ( ! function_exists( 'franz_stack_testimonials' ) ) :
/**
 * Stack: Testimonials
 */
function franz_stack_testimonials( $args = array() ){
	?>
	<div class="testimonial highlights">
        <div class="container">
            <h2 class="highlight-title"><?php _e( 'Testimonials', 'franz-josef' ); ?></h2>
            <p><?php _e( 'They love you!', 'franz-josef' ); ?></p>
            <div class="row">
                <div class="item col-md-6">
                    <img src="<?php echo FRANZ_ROOTURI; ?>/images/content/profile.jpg" width="125" height="126" alt="" />
                    <blockquote>
                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
                        <cite>
                            <span class="name">Maxi Milli</span>
                            <span class="cred">Public Relations - <a href="#">Max Mobilcom</a></span>
                        </cite>
                    </blockquote>
                </div>
                <div class="item col-md-6">
                    <img src="<?php echo FRANZ_ROOTURI; ?>/images/content/profile.jpg" width="125" height="126" alt="" />
                    <blockquote>
                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
                        <cite>
                            <span class="name">Maxi Milli</span>
                            <span class="cred">Public Relations - <a href="#">Max Mobilcom</a></span>
                        </cite>
                    </blockquote>
                </div>
                <div class="item col-md-6">
                    <img src="<?php echo FRANZ_ROOTURI; ?>/images/content/profile.jpg" width="125" height="126" alt="" />
                    <blockquote>
                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
                        <cite>
                            <span class="name">Maxi Milli</span>
                            <span class="cred">Public Relations - <a href="#">Max Mobilcom</a></span>
                        </cite>
                    </blockquote>
                </div>
                <div class="item col-md-6">
                    <img src="<?php echo FRANZ_ROOTURI; ?>/images/content/profile.jpg" width="125" height="126" alt="" />
                    <blockquote>
                        <p>Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus.</p>
                        <cite>
                            <span class="name">Maxi Milli</span>
                            <span class="cred">Public Relations - <a href="#">Max Mobilcom</a></span>
                        </cite>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>
    <?php
}
endif;


if ( ! function_exists( 'franz_stack_posts' ) ) :
/**
 * Stack: Posts
 */
function franz_stack_posts( $args = array() ){
	global $franz_settings;
	if ( 'page' == get_option( 'show_on_front' ) && $franz_settings['disable_front_page_blog'] ) return;
	
	$defaults = array(
		'title'					=> __( 'Latest Articles', 'franz-josef' ),
		'description'			=> '',
		'post_type'				=> array( 'post' ),
		'posts_per_page'		=> get_option( 'posts_per_page' ),
		'orderby'				=> 'date',
		'order'					=> 'DESC',
		'ignore_sticky_posts'	=> false
	);
	$args = wp_parse_args( $args, $defaults );
	
	$query_args = array(
		'post_type'				=> $args['post_type'],
		'posts_per_page'		=> $args['posts_per_page'],
		'orderby'				=> $args['orderby'],
		'order'					=> $args['order'],
		'ignore_sticky_posts'	=> $args['ignore_sticky_posts'],
		'paged' 				=> get_query_var( 'paged' )
	);
	
	if ( get_option( 'show_on_front' ) == 'page' ) {
		$query_args['ignore_sticky_posts'] = true;
		$query_args['paged'] = get_query_var( 'page' );
	}
	
	if ( $franz_settings['slider_type'] == 'categories' && $franz_settings['slider_exclude_categories'] != 'disabled' ) {
		$query_args['category__not_in'] =  franz_object_id( $franz_settings['slider_specific_categories'], 'category' );
	}
	if ( $franz_settings['frontpage_posts_cats'] ) {
		$query_args['category__in'] =  franz_object_id( $franz_settings['frontpage_posts_cats'], 'category' );
	}
	
	$posts = new WP_Query( $query_args );
	?>
	<div class="posts-list highlights" id="posts-stack">
        <div class="container">
            <h2 class="highlight-title"><?php echo $args['title']; ?></h2>
            <?php echo wpautop( $args['description'] ); ?>
            <div class="row">
            	<?php 
					while ( $posts->have_posts() ) : 
						$posts->the_post();
						$col = ( $posts->current_post == 0 ) ? 'col-md-12' : 'col-sm-6';
				?>
                    <div class="item-wrap <?php echo $col; ?>" id="item-<?php the_ID(); ?>">
                        <div <?php post_class( 'item' ); ?>>
                        	<?php if ( has_post_thumbnail() ) : ?>
                            	<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <?php endif; ?>
                            <h3 class="item-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                            <div class="excerpt"><?php the_excerpt(); ?></div>
                            <?php franz_stack_posts_meta(); ?>
                        </div>
                    </div>
                <?php endwhile; wp_reset_postdata(); ?>                
            </div>
            
            <?php 
				$args = apply_filters( 'franz_posts_stack_nav_args', array(
					'current'			=> max( 1, $posts->query['paged'] ),
					'total'				=> $posts->max_num_pages,
					'add_fragment'		=> '#posts-stack',
				), $posts );
				franz_posts_nav( $args );
			?>
            
        </div>
    </div>
    <?php
}
endif;


/**
 * Item meta for Posts stack
 */
function franz_stack_posts_meta(){
	$meta = array();
	
	$meta['date'] = array(
		'class'	=> 'date',
		'meta'	=> '<a href="' . esc_url( get_permalink() ) . '">' . get_the_time( get_option( 'date_format' ) ) . '</a>',
	);
	
	$comment_count = get_comment_count( get_the_ID() );
	$comment_text = ( $comment_count['approved'] ) ? sprintf( _n( '%d comment', '%d comments', $comment_count['approved'], 'franz-josef' ), $comment_count['approved'] ) : __( 'Leave a reply', 'franz-josef' );
	$comments_link = ( $comment_count['approved'] ) ? get_comments_link() : str_replace( '#comments', '#respond', get_comments_link() );
	$meta['comments'] = array(
		'class'	=> 'comments-count',
		'meta'	=> '<a href="' . $comments_link . '"><i class="fa fa-comment"></i> ' . $comment_text . '</a>',
	);
	
	$meta = apply_filters( 'franz_stack_posts_meta', $meta );
	if ( ! $meta ) return;
	?>
    	<div class="item-meta clearfix">
        	<?php foreach ( $meta as $item ) : ?>
            <p class="<?php echo esc_attr( $item['class'] ); ?>"><?php echo $item['meta']; ?></p>
            <?php endforeach; ?>
        </div>
    <?php
}