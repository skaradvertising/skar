<?php 
// This template file gets the campaign posts in the correct order for the "What We Do" page and displays them on that page
	$args = array(
		'post_type' => 'campaigns',
		'posts_per_page' => -1,
		'order' => 'ASC',
	);

	$query = new WP_Query( $args );
	$work_array = array();
	$ordered = array();
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

			switch ($value) { // create arrays to place the campaigns and their contents into the right order to appear on the What We Do page
				case 1:
					$one = array('id' => $id, 'client' => $client, 'title' => $title, 'image' => $image, 'text-color' => $text_color );
					break;
				
				case 2:
					$two = array('id' => $id, 'client' => $client, 'title' => $title, 'image' => $image, 'text-color' => $text_color );
					break;
				
				case 3:
					$three = array('id' => $id, 'client' => $client, 'title' => $title, 'image' => $image, 'text-color' => $text_color );
					break;
				
				case 4:
					$four = array('id' => $id, 'client' => $client, 'title' => $title, 'image' => $image, 'text-color' => $text_color );
					break;
				
				case 5:
					$five = array('id' => $id, 'client' => $client, 'title' => $title, 'image' => $image, 'text-color' => $text_color );
					break;
				
			}

		endwhile; endif;
	}
?>

<div class="row row-eq-height work-container">

	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-one" style="background: url('<?php echo $one['image']; ?>') center no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $one['id'] ); ?>">
				<style type="text/css">span:nth-of-type(2) { color: <?php echo $one['image']; ?> }</style>
					<p>
						<span><?php echo $one['client']; ?></span>
						<span style="color: <?php echo $one['text-color']; ?>"><?php echo $one['title']; ?></span>
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo get_the_permalink( $one['id'] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>

	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-three-sm" style="background: url('<?php echo $three['image']; ?>') 25% no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $three['id'] ); ?>">
					<p>
						<span><?php echo $three['client']; ?>	</span>
						<span style="color: <?php echo $three['text-color']; ?>"><?php echo $three['title']; ?>	</span>	
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo get_the_permalink( $three['id'] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
	<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 work-two" style="background: url('<?php echo $two['image']; ?>') center no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $two['id'] ); ?>">
					<p>
						<span><?php echo $two['client']; ?></span>
						<span style="color: <?php echo $two['text-color']; ?>"><?php echo $two['title']; ?></span>
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo get_the_permalink( $two['id'] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-three-lg" style="background: url('<?php echo $three['image']; ?>') 25% no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $three['id'] ); ?>">
					<p>
						<span><?php echo $three['client']; ?></span>
						<span style="color: <?php echo $three['text-color']; ?>"><?php echo $three['title']; ?></span>
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo get_the_permalink( $three['id'] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-four" style="background: url('<?php echo $four['image']; ?>') center no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $four['id'] ); ?>">
					<p>
						<span><?php echo $four['client']; ?></span>
						<span style="color: <?php echo $four['text-color']; ?>"><?php echo $four['title']; ?></span>
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo get_the_permalink( $four['id'] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 work-five" style="background: url('<?php echo $five['image']; ?>') center no-repeat; background-size: cover;">
		<div class="inner-content">
			<div class="content-container">
				<a href="<?php echo get_the_permalink( $five['id'] ); ?>">
					<p>
						<span><?php echo $five['client']; ?></span>
						<span style="color: <?php echo $five['text-color']; ?>"><?php echo $five['title']; ?></span>
					</p>
				</a>
			</div>
			<span class="campaign-link"><a href="<?php echo get_the_permalink( $five['id'] ); ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
		</div>
	</div>
</div>



