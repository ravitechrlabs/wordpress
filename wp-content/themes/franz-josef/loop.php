<?php global $franz_settings; ?>
<div <?php post_class(); ?> id="entry-<?php the_ID(); ?>">
	
	<?php if ( has_post_thumbnail() ) : ?>
    	<div class="featured-image"><?php the_post_thumbnail(); ?></div>
        <?php do_action( 'franz_loop_thumbnail' ); ?>
    <?php endif; ?>
    
    <div class="row">
        <div class="title-wrap col-sm-10 col-md-11">
            <h1 class="entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
            <div class="entry-meta-wrap"><?php franz_entry_meta(); ?></div>
        </div>
        <?php franz_author_avatar(); ?>
    </div>
    
    <div class="entry-content">
        <?php 
			if ( $franz_settings['archive_full_content'] ) : the_content();
			else : the_excerpt(); 
		?>
        <p class="read-more"><a class="btn btn-lg btn-default" href="<?php the_permalink();?>"><?php _e( 'Read More', 'franz-josef' ); ?></a></p>
        <?php endif; ?>
    </div>
    
    <?php do_action( 'franz_loop' ); ?>
</div>