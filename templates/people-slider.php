<?php 
	
	$args = array(
		'post_type' => 'people',
		'posts_per_page' => -1,
		'order' => 'ASC'
	);

	$query = new WP_Query( $args );
	if( $query->have_posts() ) : 

?>
<ul>
<?php while( $query->have_posts() ) : $query->the_post(); ?>
	<li><?php the_title(); ?></li>
<?php endwhile; ?>
</ul>
<?php endif; wp_reset_postdata(); ?>
