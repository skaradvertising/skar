<div class="skar-content">
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 case-history">
		<div class="inner-content">
		<?php
			if( get_field( 'featured_case_study' ) ) :
				$id = get_field( 'featured_case_study' )->ID;
				$case_study = array(
					'permalink' => get_the_permalink( $id ),
					'client' => get_field('client_name', $id),
					'title' => get_field( 'case_title', $id ),
					'excerpt' => get_field( 'excerpt', $id ),
				);
			endif;
		?>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p>case history</p>
				<div  class="inner-content-title">
				
					<p>
						<span><a href="<?php echo $case_study['permalink']; ?>"><?php echo $case_study['client']; ?></a></span>
						<span><a href="<?php echo $case_study['permalink']; ?>"><?php echo $case_study['title']; ?>:</a></span>
					</p>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p>
					<?php echo $case_study['excerpt']; ?>
				</p>
			</div>
			<div>
				<span><a href="<?php echo $case_study['permalink']; ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
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

	<?php

		if( get_field( 'featured_work' ) ) :

			$id = get_field( 'featured_work' )->ID;
			$featured_work = array(
				'permalink' => get_the_permalink( $id ),
				'client' => get_the_title(get_field('client_name', $id)[0]),
				'title' => get_field( 'campaign_title', $id ),
				'excerpt' => get_the_excerpt( $id ),
				'campaign-image' => get_field('campaign_image', $id)['url'],
			);

		endif;

	?>
	
	<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 featured-work" style="background: url('<?php echo $featured_work['campaign-image']; ?>') no-repeat; background-position: center; background-size: cover;">
		<div class="inner-content">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<p>featured work</p>
				<div class="inner-content-title">
					<p>
						<a href="<?php echo $featured_work['permalink']; ?>">
							<span><?php echo $featured_work['client']; ?></span>
							<span><?php echo $featured_work['title']; ?></span>
						</a>
					</p>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"></div>
			<div>
				<span><a href="<?php echo $featured_work['permalink']; ?>"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
			</div>
		</div>
	</div>
</div>