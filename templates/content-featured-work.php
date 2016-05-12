<?php
	$args = array(
		'post_type' => 'work',
		'posts_per_page' => -1,
		'order' => 'ASC'
	);

	$query = new WP_Query( $args );
	$work_array = array();
	if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

	// all "Work" post ids
	$work_array[] = $post->ID;

	endwhile; wp_reset_postdata(); endif;

	// find the first "work" post that is a featured client. There is only supposed to be one featured post
	foreach ($work_array as $pid) {
		if( get_field( 'featured_client', $pid ) ) {
			$featured_work = $pid;
			break; // stops foreach loop once we find the first featured client
		}

		// if no "work" posts have featured client checked, returns the most recent "work" post
		if( !$featured_work ) {
			$featured_work = $work_array[0];
		}
	}
?>

<?php $campaign = get_field( 'campaign', $featured_work ); ?>

<?php // chooses the featured campaign
	if( have_rows('campaign', $featured_work) ): while( have_rows('campaign', $featured_work) ): the_row();

	if( get_sub_field( 'feature_home' ) ) {
		$campaign_title = get_sub_field( 'campaign_title' );
		$campaign_image = get_sub_field( 'campaign_image' );
	} 
?>

<?php
	if( $campaign_image ) {
		$img_src = $campaign_image['url'];
	} else {
		$img_src = wp_get_attachment_image_src( get_post_thumbnail_id( $featured_work ), 'full' )[0];
	}
?>

<?php endwhile; endif; ?>

<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 featured-work" style="background: url('<?php echo $img_src; ?>') no-repeat; background-position: center; background-size: cover;">
	<div class="inner-content">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<p>featured work</p>
			<div class="inner-content-title">
				<p>
					<span><a href="<?php echo get_the_permalink( $featured_work ); ?>"><?php echo get_the_title( $featured_work ); ?></a></span><br>
					<span><a href="<?php echo get_the_permalink( $featured_work ); ?>"><?php echo $campaign_title; ?></a></span>
				</p>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
		<div>
			<span><a href="<?php echo get_the_permalink( $featured_work ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
</div>



