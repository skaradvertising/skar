<div class="container-fluid industry-featured-work-container">
	<div class="row">

	<?php
		
		if( get_field( 'featured_work_1' ) ) :

			$id = get_field( 'featured_work_1' )->ID;
			$fw1 = array(
				'permalink' => get_the_permalink( $id ),
				'client' => get_the_title(get_field('client_name', $id)[0]),
				'title' => get_field( 'campaign_title', $id ),
				'excerpt' => get_the_excerpt( $id ),
				'campaign-image' => get_field('campaign_image', $id)['url'],
				'background' => get_field( 'campaign_bg_color', $id ),
			);

		endif;

		if( get_field( 'featured_case_study' ) ) :

			$id = get_field( 'featured_case_study' )->ID;
			$case_study = array(
				'permalink' => get_the_permalink( $id ),
				'client' => get_field('client_name', $id),
				'title' => get_the_title( $id ),
				'excerpt' => get_field( 'excerpt', $id ),
				'work-image' => get_field( 'work_image', $id )['url'],
			);

		endif;

		if( get_field( 'featured_work_2' ) ) :

			$id = get_field( 'featured_work_2' )->ID;
			$fw2 = array(
				'permalink' => get_the_permalink( $id ),
				'client' => get_the_title(get_field('client_name', $id)[0]),
				'title' => get_the_title( $id ),
				'excerpt' => get_the_excerpt( $id ),
				'campaign-image' => get_field('campaign_image', $id)['url'],
				'background' => get_field( 'campaign_bg_color', $id ),
			);

		endif;

 	?>

		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 work-wrapper work-one" style="background: <?php echo $fw1['background']; ?> url('<?php echo $fw1['campaign-image']; ?>') center no-repeat; background-size: cover;">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 work-one-content">
				<h1><a href="<?php echo $fw1['permalink']; ?>">Featured Work</a></h1>
				<h1><a href="<?php echo $fw1['permalink']; ?>""><?php echo $fw1['client']; ?></a></h1>
			</div>
		</div>

		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 work-wrapper work-two">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 work-two-content">
				<h1><a href="<?php echo $case_study['permalink']; ?>">Case History</a></h1>
				<h1><a href="<?php echo $case_study['permalink']; ?>"><?php echo $case_study['title']; ?></a></h1>
			</div>
			<div class="img-container">
				<img class="img-responsive" src="<?php echo $case_study['work-image']; ?>">
			</div>
		</div>

	</div>
	<div class="row">
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
			'posts_per_page' => 2,
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
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 work-wrapper work-three">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 work-four-wrapper">
				<h1><a href="<?php the_permalink(); ?>"><?php echo $category_name->name; ?></a></h1>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 blog-post-excerpt">
					<?php the_excerpt(); ?>
				</div>
			</div>
		</div>
		<?php endwhile; wp_reset_postdata(); endif; ?>
		
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 work-wrapper work-five" style="background: <?php echo $fw2['background']; ?> url('<?php echo $fw2['campaign-image']; ?>') center no-repeat; background-size: cover;">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 work-five-content">
				<h1><a href="<?php echo $fw2['permalink']; ?>">Featured Work</a></h1>
				<h1><a href="<?php echo $fw2['permalink']; ?>""><?php echo $fw2['client']; ?></a></h1>
			</div>
		</div>
	</div>
</div>
<div class="row more-posts">
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<a href="<?php the_field( 'more_work' ); ?>">More <?php echo $category_name->name; ?> Work</a>
	</div>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
		<a href="<?php echo '/category/' . $category_name->slug; ?>">More <?php echo $category_name->name; ?> Insights</a>
	</div>

</div>
