<?php
	$args = array(
		'post_type' => 'campaigns',
		'posts_per_page' => -1,
		'order' => 'ASC'
	);

	$query = new WP_Query( $args );
	$campaign_array = array();
	if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

	// all "campaign" post ids
	$campaign_array[] = $post->ID;

	endwhile; wp_reset_postdata(); endif;

	// find the first "campaign" post that is a featured campaign. There is only supposed to be one featured post, but if there's more, it picks the most recent
	foreach ($campaign_array as $pid) {
		if( get_field( 'featured_home', $pid ) ) {
			$featured_work = $pid;
			break; // stops foreach loop once we find the first featured client
		}

		// if no "campaign" posts have featured client checked, returns the most recent "campaign" post
		if( !$featured_work ) {
			$featured_work = $campaign_array[0];
		}
	}
?>

<?php
	if( get_field( 'campaign_image', $featured_work ) ) {
		$img = get_field( 'campaign_image', $featured_work );
		$img_src = $img['url'];
	} else {
		$img_src = wp_get_attachment_image_src( get_post_thumbnail_id( $featured_work ), 'full' )[0];
	}
?>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 featured-work" style="background: url('<?php echo $img_src; ?>') no-repeat; background-position: center; background-size: cover;">
	<div class="inner-content">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<p>featured work</p>
			<div class="inner-content-title">
				<p>
					<a href="<?php echo get_the_permalink( $featured_work ); ?>">
						<span><?php echo get_field( 'campaign_title', $featured_work ); ?></span>
						<span><?php echo get_the_title( get_field( 'client_name', $featured_work )[0]); ?></span>
					</a>
				</p>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"><</div>
		<div>
			<span><a href="<?php echo get_the_permalink( $featured_work ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
</div>



