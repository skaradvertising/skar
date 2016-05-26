<div class="container-fluid category-archive-container">

<?php if( have_posts() ) :
	if( is_category() ) {
	    global $wp_query;
	    $term = $wp_query->get_queried_object();
	    $title = $term->name;
	}
?>
<h1 class="category-page-title"><span><?php echo $title; ?></span> <span>Insights</span></h1>

<?php while( have_posts() ) : the_post(); ?>
    <section id="post-<?php echo $post->ID; ?>" class="row category-post">
    	
    	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 title-side">
	    	<h1 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
	    </div>

	    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 content-side">
	    	<p><?php the_excerpt(); ?></p>
	    </div>

    </section>
<?php endwhile; endif; ?>
<div class="navigation row"><p><?php posts_nav_link(); ?></p></div>
</div>
