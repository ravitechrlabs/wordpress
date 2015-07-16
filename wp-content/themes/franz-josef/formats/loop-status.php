<div <?php post_class(); ?> id="entry-<?php the_ID(); ?>">
	
	<?php if ( has_post_thumbnail() ) : ?>
    	<div class="featured-image"><?php the_post_thumbnail(); ?></div>
        <?php do_action( 'franz_loop_thumbnail' ); ?>
    <?php endif; ?>
    
    <div class="row">
        <div class="title-wrap col-sm-10 col-md-11">
        	<div class="status-content"><?php the_content(); ?></div>
            <div class="entry-meta-wrap"><?php franz_entry_meta(); ?></div>
        </div>
        <p class="entry-author-avatar col-sm-2 col-md-1"><?php echo get_avatar( get_the_author_meta( 'ID' ), 50 ); ?></p>
    </div>
    <?php do_action( 'franz_loop_format_status' ); ?>
</div>