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
					$featured_work_id = $post_ids[0];
					$featured_work2 = $post_ids[1];
				}
			}
		endwhile; wp_reset_postdata(); endif;

			$client_name = get_the_title(get_field( 'client_name', $featured_work_id )[0]);
			$campaign_title = get_field( 'campaign_title', $featured_work_id );
			$campaign_image = get_field( 'campaign_image', $featured_work_id )['url'];
			$permalink = get_permalink( $featured_work_id );
 	?>

		<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 work-wrapper work-one" style="background: url('<?php echo $campaign_image; ?>') center no-repeat; background-size: cover;">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 work-one-content">
				<h1><a href="<?php echo $permalink; ?>">Featured Work</a></h1>
				<h1><a href="<?php echo $permalink; ?>""><?php echo $client_name; ?></a></h1>
			</div>
		</div>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 work-wrapper work-two">

		<?php 
			if( is_single( 11687 ) ) {
				$case_term = 'finance';
			} elseif( is_single( 11693 ) ) {
				$case_term = 'nonprofit';
			} elseif( is_single( 11691 ) ) {
				$case_term = 'regional-brands';
			} elseif( is_single( 11689 ) ) {
				$case_term = 'retail';
			} elseif( is_single( 11683 ) ) {
				$case_term = 'health-care';
			}
			$case_args = array(
				'post_type' => 'case-studies',
				'posts_per_page' => -1,
				'order' => 'DESC',
				'tax_query' => array(
					array(
						'taxonomy' => 'case-study-categories',
						'field' => 'slug',
						'terms' => $case_term,
					),
				),
			);
			$case_query = new WP_Query( $case_args );
			
			if( $case_query->have_posts() ) : while( $case_query->have_posts() ) : $case_query->the_post();
		
			if( get_field( 'feature_industry' ) ) :
				$work_img = get_field( 'work_image' )['url'];
				
			
		?>
		
			<div class="img-container">
				<img class="img-responsive" src="<?php echo $work_img; ?>">
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 work-two-content">
				<h1><a href="<?php the_permalink(); ?>">Case History</a></h1>
				<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
			</div>
		<?php endif; endwhile; wp_reset_postdata(); endif; ?>
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
		<?php
			$client2 = get_the_title(get_field( 'client_name', $featured_work2 )[0]);
			$campaign_title2 = get_field( 'campaign_title', $featured_work2 );
			$campaign_image2 = get_field( 'campaign_image', $featured_work2 )['url'];
			$permalink2 = get_permalink( $featured_work2 );
		?>
		<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 work-wrapper work-five" style="background: url('<?php echo $campaign_image2; ?>') center no-repeat; background-size: cover;">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 work-five-content">
				<h1><a href="<?php echo $permalink2; ?>">Featured Work</a></h1>
				<h1><a href="<?php echo $permalink2; ?>""><?php echo $client2; ?></a></h1>
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
