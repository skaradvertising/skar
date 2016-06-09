<div class="container-fluid category-archive-container">
<?php if( have_posts() ) :
	if( is_category() ) {
	    global $wp_query;
	    $term = $wp_query->get_queried_object();
	    $title = $term->name;
	    //query_posts( 'posts_per_page=10&cat=' . $term->term_id );
	    //query_posts( 'posts_per_page=10');
	}
?>
	<h1 class="category-page-title"><span><?php echo $title; ?></span> <span>Insights</span></h1>

	<div class="row other-categories">
		<ul class="list-unstyled">
		<?php
			$categories = get_categories( array(
			    'orderby' => 'name',
			    'parent'  => 0,
			    'exclude'    => array( 8, 55, 125, 1, $term->term_id ),
			) );
			 
			foreach ( $categories as $category ) {
			    printf( '<li><a href="%1$s"><span>%2$s</span> <span>Insights</span></a></li>',
			        esc_url( get_category_link( $category->term_id ) ),
			        esc_html( $category->name )
			    );
			}
		?>
		</ul>
	</div>
	<div class="container-fluid category-posts-container">
	<?php while( have_posts() ) : the_post(); ?>
	    <section id="post-<?php echo $post->ID; ?>" class="col-lg-6 col-md-6 col-sm-6 col-xs-12 category-post">
	    <?php if( has_post_thumbnail( $post->ID ) ) : ?>
	    <?php $img_src  = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ),  'full' ); ?>
	    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 post-img-container"><img class="img-responsive" src="<?php echo $img_src[0]; ?>"></div>
	    <?php endif; ?>
	    	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 post-title">
		    	<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
		    </div>
	    </section>
	<?php endwhile; endif; wp_reset_query(); ?>
	</div>
	<div class="navigation row"><p><?php posts_nav_link(); ?></p></div>
</div>
