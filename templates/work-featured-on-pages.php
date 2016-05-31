<?php 
// This template file gets the campaign posts in the correct order for the "What We Do" page and displays them on that page
	$args = array(
		'post_type' => 'campaigns',
		'posts_per_page' => -1,
		'order' => 'ASC',
		/*'tax_query' => array(
			array(
				'taxonomy' => 'work-categories',
				'field' => 'slug',
				'terms' => 'featured'
			),
		),*/
	);

	$query = new WP_Query( $args );
	$work_array = array();
	$ordered = array();
	$one = array();
	$two = array();
	$three = array();
	$four = array();
	$five = array();
	if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();

	// all "Campaign" post ids that are "featured"
	$work_array[] = $post->ID;

	endwhile; wp_reset_postdata(); endif;

// put each returned campaign post (id) into an array to be used below to fetch the right post order on the What We Do page
	foreach ($work_array as $id) {
		if( have_rows('include_on_what_we_do_page', $id) ) : while ( have_rows('include_on_what_we_do_page', $id) ) : the_row();
		 // if the post has an order, extract the fields, put in an array to be used to display on the page
			$value = get_sub_field('order');
			$client = get_the_title(get_field('client_name', $id)[0]);
			$title = get_field( 'campaign_title', $id );
			if( get_field('campaign_image', $id) ) {
				$image = get_field('campaign_image', $id)['url'];
			} else {
				$image = wp_get_attachment_image_src( get_post_thumbnail_id( $id ), 'full' )[0];
			}
			$text_color = get_sub_field('label_color');
			
			switch ($value) {
				case 1:
					$one[] = $id;
					$one[] = $client;
					$one[] = $title;
					$one[] = $image;
					$one[] = $text_color;
					break;
				case 2:
					$two[] = $id;
					$two[] = $client;
					$two[] = $title;
					$two[] = $image;
					$two[] = $text_color;
					break;
				case 3:
					$three[] = $id;
					$three[] = $client;
					$three[] = $title;
					$three[] = $image;
					$three[] = $text_color;
					break;
				case 4:
					$four[] = $id;
					$four[] = $client;
					$four[] = $title;
					$four[] = $image;
					$four[] = $text_color;
					break;
				case 5:
					$five[] = $id;
					$five[] = $client;
					$five[] = $title;
					$five[] = $image;
					$five[] = $text_color;
					break;
			}

		endwhile; endif;

	}
?>

<div class="row row-eq-height work-container">

	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-one" style="background: url('<?php echo $one[3]; ?>') center no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $one[0] ); ?>">
				<style type="text/css">span:nth-of-type(2) { color: <?php echo $one[3]; ?> }</style>
					<p>
						<span><?php echo $one[1]; ?></span>
						<span style="color: <?php echo $one[4]; ?>"><?php echo $one[2]; ?></span>
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo get_the_permalink( $one[0] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>

	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-three-sm" style="background: url('<?php echo $three[3]; ?>') 25% no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $three[0] ); ?>">
					<p>
						<span><?php echo $three[1]; ?>	</span>
						<span style="color: <?php echo $three[4]; ?>"><?php echo $three[2]; ?>	</span>	
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo get_the_permalink( $three[0] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 work-two" style="background: url('<?php echo $two[3]; ?>') center no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $two[0] ); ?>">
					<p>
						<span><?php echo $two[1]; ?></span>
						<span style="color: <?php echo $two[4]; ?>"><?php echo $two[2]; ?></span>
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo get_the_permalink( $two[0] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-three-lg" style="background: url('<?php echo $three[3]; ?>') 25% no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $three[0] ); ?>">
					<p>
						<span><?php echo $three[1]; ?></span>
						<span style="color: <?php echo $three[4]; ?>"><?php echo $three[2]; ?></span>
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo get_the_permalink( $three[0] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-four" style="background: url('<?php echo $four[3]; ?>') center no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $four[0] ); ?>">
					<p>
						<span><?php echo $four[1]; ?></span>
						<span style="color: <?php echo $four[4]; ?>"><?php echo $four[2]; ?></span>
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo get_the_permalink( $four[0] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-five" style="background: url('<?php echo $five[3]; ?>') center no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $five[0] ); ?>">
					<p>
						<span><?php echo $five[1]; ?></span>
						<span style="color: <?php echo $five[4]; ?>"><?php echo $five[2]; ?></span>
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo get_the_permalink( $five[0] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
</div>



