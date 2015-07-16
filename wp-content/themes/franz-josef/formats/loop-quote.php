<div <?php post_class(); ?> id="entry-<?php the_ID(); ?>">
	
	<?php if ( has_post_thumbnail() ) : ?>
    	<div class="featured-image"><?php the_post_thumbnail(); ?></div>
        <?php do_action( 'franz_loop_thumbnail' ); ?>
    <?php endif; ?>
    
    <div class="row">
        <div class="title-wrap col-sm-12">
			<?php the_content(); ?>           
            <div class="entry-meta-wrap"><?php franz_entry_meta(); ?></div>
        </div>
    </div>
    
    <?php do_action( 'franz_loop_format_quote' ); ?>
</div>