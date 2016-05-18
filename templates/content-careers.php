<?php
	$args = array(
		'post_type' => 'skar-careers',
		'posts_per_page' => -1,
		'order' => 'ASC'
	);

	$query = new WP_Query( $args );
	if( $query->have_posts() ) :
?>

<div class="career-posts">
<?php while( $query->have_posts() ) : $query->the_post(); ?>
	<div class="career-single-post">
		<?php the_title(); ?>
	</div>
<?php endwhile; wp_reset_postdata(); ?>
</div>
<?php endif; ?>