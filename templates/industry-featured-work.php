<div class="container-fluid industry-featured-work-container">
	<div class="row">

	<?php
		$current_page = $post->post_name;
		$post_ids = array();
		$args = array(
			'post_type' => 'campaigns',
			'posts_per_page' => -1,
			'order' => 'DESC',
		);
		$query = new WP_Query( $args );
		if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();
			if( get_field('industry')[0]->post_name == $current_page ) {
				$post_ids[] = $post->ID;
				if( get_field( 'include_industry' ) ) {
					$featured_work_id = $post->ID;
				} else {
					$featured_work_id = $post_ids[0];
				}
			}
		endwhile;

			$client_name = get_the_title(get_field( 'client_name', $featured_work_id )[0]);
			$campaign_title = get_field( 'campaign_title', $featured_work_id );
			$campaign_image = get_field( 'campaign_image', $featured_work_id )['url'];
			$permalink = get_permalink( $featured_work_id );

		wp_reset_postdata(); endif;
 	?>

		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 work-wrapper work-one" style="background: url('<?php echo $campaign_image; ?>') center no-repeat; background-size: cover;">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 work-one-content">
				<h1><a href="<?php echo $permalink; ?>">Featured Work</a></h1>
				<h1><a href="<?php echo $permalink; ?>""><?php echo $client_name; ?></a></h1>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 work-wrapper work-two">
			<div class="img-container">
				<img class="img-responsive" src="/wp-content/uploads/2016/05/oppd-case-study.png">
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 work-two-content">
				<h1><a href="#">Case History</a></h1>
				<h1><a href="#">OPPD Energy-Saving Tree Program</a></h1>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 work-wrapper work-three" style="background: url('/wp-content/uploads/2016/05/featured-work-three.jpg') center no-repeat; background-size: cover;">

		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 work-wrapper work-four">
			<?php
				if( is_single( 11687 ) ) {
					$term = 'financial-content';
				} elseif( is_single( 11693 ) ) {
					$term = 'nonprofit-content';
				} elseif( is_single( 11691 ) ) {
					$term = 'regional-brands-content';
				} elseif( is_single( 11689 ) ) {
					$term = 'retail-content';
				} elseif( is_single( 11683 ) ) {
					$term = 'health-care-content';
				} else {
					$term = 'insights';
				}
				$args = array(
					'post_type' => 'post',
					'posts_per_page' => 1,
					'order' => 'DESC',
					'tax_query' => array(
						array(
							'taxonomy' => 'category',
							'field' => 'slug',
							'terms' => $term,
						),
					),
				);
				$query = new WP_Query( $args );
				if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post();
				$category_name = get_term_by( 'slug', $term, 'category' );
			?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 work-four-wrapper">
				<h1><a href="<?php the_permalink(); ?>"><?php echo $category_name->name; ?></a></h1>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog-post-excerpt">
					<?php the_excerpt(); ?>
				</div>
			</div>

		<?php endwhile; wp_reset_postdata(); endif; ?>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 work-wrapper work-five" style="background: url('/wp-content/uploads/2016/05/featured-work-section-five.jpg') center no-repeat; background-size: cover;">
		
		</div>
	</div>
</div>
