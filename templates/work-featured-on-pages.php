<?php 
// This template file gets the work posts in the correct order for the "What We Do" page and displays them on that page
	$args = array(
		'post_type' => 'work',
		'posts_per_page' => -1,
		'order' => 'ASC'
	);

	$query = new WP_Query( $args );
	$work_array = array();
	$ordered = array();
	/*$one = array();
	$two = array();
	$three = array();
	$four = array();
	$five = array();*/
	if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

	// all "Work" post ids
	$work_array[] = $post->ID;

	endwhile; wp_reset_postdata(); endif;

// put each work post with one or more campaigns with specified order into an array to be used below to fetch the right post order on the What We Do page
	foreach ($work_array as $id) {
		if ( have_rows('campaign', $id) ): while( have_rows('campaign', $id) ): the_row();
			if ( get_sub_field( 'featured' ) ) {
				if ( get_sub_field( 'order' ) ) { // if the post has an order, extract the fields, put in an array to be used to display on the page
					$value = get_sub_field('order');
					$title = get_sub_field( 'campaign_title' );
					if( get_sub_field('campaign_image') ) {
						$image = get_sub_field('campaign_image')['url'];
					} else {
						$image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' )[0];
					}
					$text_color = get_sub_field('campaign_color');
					
					switch ($value) {
						case 1:
							$one[] = $id;
							$one[] = $title;
							$one[] = $image;
							$one[] = $text_color;
							break;
						case 2:
							$two[] = $id;
							$two[] = $title;
							$two[] = $image;
							$two[] = $text_color;
							break;
						case 3:
							$three[] = $id;
							$three[] = $title;
							$three[] = $image;
							$three[] = $text_color;
							break;
						case 4:
							$four[] = $id;
							$four[] = $title;
							$four[] = $image;
							$four[] = $text_color;
							break;
						case 5:
							$five[] = $id;
							$five[] = $title;
							$five[] = $image;
							$five[] = $text_color;
							break;
					}

				}
			}
		endwhile; endif;
	}
?>

<div class="row row-eq-height work-container">

	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-one" style="background: url('<?php echo $one[2]; ?>') center no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $one[0] ); ?>">
					<p><?php echo get_the_title( $one[0] ); ?></p>
					<p><?php echo $one[1]; ?></p>
				</a>
			</div>
			<span><a href="<?php echo get_the_permalink( $one[0] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>

	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-three-sm" style="background: url('<?php echo $three[2]; ?>') 25% no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $three[0] ); ?>">
					<p><?php echo get_the_title( $three[0] ); ?></p>
					<p><?php echo $three[1]; ?></p>
				</a>
			</div>
			<span><a href="<?php echo get_the_permalink( $three[0] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 work-two" style="background: url('<?php echo $two[2]; ?>') center no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $two[0] ); ?>">
					<p><?php echo get_the_title( $two[0] ); ?></p>
					<p><?php echo $two[1]; ?></p>
				</a>
			</div>
			<span><a href="<?php echo get_the_permalink( $two[0] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-three-lg" style="background: url('<?php echo $three[2]; ?>') 25% no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $three[0] ); ?>">
					<p><?php echo get_the_title( $three[0] ); ?></p>
					<p><?php echo $three[1]; ?></p>
				</a>
			</div>
			<span><a href="<?php echo get_the_permalink( $three[0] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-four" style="background: url('<?php echo $four[2]; ?>') center no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $four[0] ); ?>">
					<p><?php echo get_the_title( $four[0] ); ?></p>
					<p><?php echo $four[1]; ?></p>
				</a>
			</div>
			<span><a href="<?php echo get_the_permalink( $four[0] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-five" style="background: url('<?php echo $five[2]; ?>') center no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $five[0] ); ?>">
					<p><?php echo get_the_title( $five[0] ); ?></p>
					<p><?php echo $five[1]; ?></p>
				</a>
			</div>
			<span><a href="<?php echo get_the_permalink( $five[0] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>

</div>



