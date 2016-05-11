<?php 

	$args = array(
		'post_type' => 'work',
		'posts_per_page' => -1,
		'order' => 'ASC'
	);

	$query = new WP_Query( $args );
	$work_array = array();
	$ordered = array();
	$one = '';
	$two = '';
	$three = '';
	$four = '';
	if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

	// all "Work" post ids
	$work_array[] = $post->ID;

	endwhile; wp_reset_postdata(); endif;

// put each work post with one or more campaigns with specified order into an array to be used below to fetch the right post order on the What We Do page
	foreach ($work_array as $id) {
		if( have_rows('campaign', $id) ): while( have_rows('campaign', $id) ): the_row();
			if( get_sub_field( 'order' ) ) {
				$check = get_sub_field_object( 'order' );
				echo get_the_title($id_ . ' ' $check['choices'] . '<br>';
			}
		endwhile; endif;
	}
?>