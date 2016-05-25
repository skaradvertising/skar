<div class="skar-content">
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 case-history">
		<div class="inner-content">
		<?php
			$case_args = array(
				'post_type' => 'case-studies',
				'posts_per_page' => -1,
				'order' => 'DESC'
			);
			$case_query = new WP_Query( $case_args );
			if( $case_query->have_posts() ) : while( $case_query->have_posts() ) : $case_query->the_post();
			if( 'featured' ) :
				$client_name = get_field( 'client_name' );
				$case_title = get_field( 'case_title' );
				$excerpt = get_field( 'excerpt' );
				$permalink = get_the_permalink();
				endif;
				endwhile; wp_reset_postdata(); endif;
		?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p>case history</p>
				<div  class="inner-content-title">
				
					<p>
						<span><a href="<?php echo $permalink; ?>"><?php echo $client_name; ?></a></span>
						<span><a href="<?php echo $permalink; ?>"><?php echo $case_title; ?>:</a></span>
					</p>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p>
					<?php echo $excerpt; ?>
				</p>
			</div>
			<div>
				<span><a href="<?php echo $permalink; ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 recent-article">
		<div class="inner-content">

		<?php
			$post_args = array(
				'post_type' => 'post',
				'posts_per_page' => 1,
				'order' => 'DESC'
			);

			$post_query = new WP_Query( $post_args );
			if( $post_query->have_posts() ) : while( $post_query->have_posts() ) : $post_query->the_post();
			$pl = get_the_permalink();
			$title = get_the_title();
			$excerpt = get_the_excerpt();
			endwhile; wp_reset_postdata(); endif;
			
		?>

			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p>recent article</p>

				<div class="inner-content-title">
					<a href="<?php echo $pl; ?>"><p><?php echo $title; ?></p></a>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p>
					<span>Latest Blog Post | <?php echo $title; ?>.</span>
					<?php echo $excerpt; ?>
				</p>
			</div>
			<div>
				<span><a href="<?php echo $pl; ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
			</div>
		</div>
	</div>
	<?php get_template_part( 'templates/content', 'featured-work' ); ?>
</div>