<div class="scrolling-home-container">

	<section class="intro home-section section one">

		<div class="intro-content mask">

			<div class="skar-home-bg">
				<div class="row bg-row-00"><img class="animated slideInLeft" src="/wp-content/uploads/2016/05/00.png"></div>
				<div class="row bg-row-01"><img class="animated slideInRight" src="/wp-content/uploads/2016/05/01.png"></div>
				<div class="row bg-row-02"><img class="animated slideInLeft" src="/wp-content/uploads/2016/05/02.png"></div>
				<div class="row bg-row-03"><img class="animated slideInRight" src="/wp-content/uploads/2016/05/03.png"></div>
				<div class="row bg-row-04"><img class="animated slideInLeft" src="/wp-content/uploads/2016/05/04.png"></div>
				<div class="row bg-row-05"><img class="animated slideInRight" src="/wp-content/uploads/2016/05/05.png"></div>
				<div class="row bg-row-06"><img class="animated slideInLeft" src="/wp-content/uploads/2016/05/06.png"></div>
				<div class="row bg-row-07"><img class="animated slideInRight" src="/wp-content/uploads/2016/05/07.png"></div>
				<div class="row bg-row-08"><img class="animated slideInLeft" src="/wp-content/uploads/2016/05/08.png"></div>
				<div class="row bg-row-09"><img class="animated slideInRight" src="/wp-content/uploads/2016/05/09.png"></div>
				<div class="row bg-row-10"><img class="animated slideInLeft" src="/wp-content/uploads/2016/05/10.png"></div>
				<div class="row bg-row-11"><img class="animated slideInRight" src="/wp-content/uploads/2016/05/11.png"></div>
				<div class="row bg-row-12"><img class="animated slideInLeft" src="/wp-content/uploads/2016/05/12.png"></div>
				<div class="row bg-row-13"><img class="animated slideInRight" src="/wp-content/uploads/2016/05/13.png"></div>
				<div class="row bg-row-14"><img class="animated slideInLeft" src="/wp-content/uploads/2016/05/14.png"></div>
				<div class="row bg-row-15"><img class="animated slideInRight" src="/wp-content/uploads/2016/05/15.png"></div>
				<div class="row bg-row-16"><img class="animated slideInLeft" src="/wp-content/uploads/2016/05/16.png"></div>
				<div class="row bg-row-17"><img class="animated slideInRight" src="/wp-content/uploads/2016/05/17.png"></div>
				<div class="row bg-row-17"><img class="animated slideInRight" src="/wp-content/uploads/2016/05/17.png"></div>
				<div class="row bg-row-16"><img class="animated slideInLeft" src="/wp-content/uploads/2016/05/16.png"></div>
				<div class="row bg-row-15"><img class="animated slideInRight" src="/wp-content/uploads/2016/05/15.png"></div>
			</div>

			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 big-skar-container animated zoomInRight">
					<span class="big-skar"><?php get_template_part( 'templates/svgs/big', 'skar' ); ?></span>
				</div>
			</div>

			<div class="row action-container">
				<div class="action-wrapper">
					<?php the_field( 'home_tag_line' ); ?>
					<p>
						<a class="scroll-down" href="#0"><?php get_template_part( 'templates/svgs/pxd', 'arrow' ); ?></a>
					</p>
				</div>
			</div>

		</div>

	</section>

	<section class="home-section section two">
		<div class="row row-eq-height">
			<div class="col-lg-5 col-md-4 col-sm-3 section-2-div-1">
				<img src="/wp-content/uploads/2016/05/hand.png">
			</div>
			<div class="col-lg-7 col-md-8 col-sm-9 col-xs-12 section-2-div-2">
				<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 headline-content">
					<?php the_field( 'home_headline' ); ?>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 main-page-content">
					<?php the_field( 'main_page_content' ); ?>
					<div class="paper-airplane row">
						<img class="img-responsive" src="/wp-content/uploads/2016/05/paper-airplane.png">
					</div>
				</div>
			</div>
		</div>

		<?php get_template_part( 'templates/industries', 'boxes' ); ?>
		<span class="return-to-top"><a href="#"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
	</section>

	<section class="home-section section three">
		<div class="section-3-top">
			<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12 case-history">
				<div class="inner-content">
				<?php
					$case_args = array(
						'post_type' => 'case-studies',
						'posts_per_page' => 1,
						'order' => 'DESC'
					);
					$case_query = new WP_Query( $case_args );
					if( $case_query->have_posts() ) : while( $case_query->have_posts() ) : $case_query->the_post();
				?>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<p>case history</p>
						<div  class="inner-content-title">
						
							<p>
								<span><?php the_field( 'client_name' ); ?></span>
								<span><?php the_field( 'case_title' ); ?>:</span>
							</p>
						</div>
					</div>
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<p>
							<?php the_excerpt(); ?>
						</p>
					</div>
					<div>
						<span><a href="#"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
					</div>
					<?php endwhile; endif; ?>
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

		<div class="section-3-bottom">
			<div class="container">
				<div class="row">
				<?php 
				$work_args = array(
				'post_type' => 'work',
				'posts_per_page' => -1,
				'orderby' => 'menu_order'
			);

			$work_query = new WP_Query( $work_args );
			$work_array = array();
			if( $work_query->have_posts() ) : while( $work_query->have_posts() ) : $work_query->the_post(); ?>
					<div class="col-lg-2 col-md-2 col-sm-3 col-xs-3 logo-img-container">
					<?php

						if( get_field( 'home_logo' ) ) {
							$image = get_field( 'home_logo' );
						} else {
							$image = get_field( 'logo' );
						}

						if( !empty($image) ) :
					?>
						<a title="<?php the_title(); ?>" href="<?php the_permalink(); ?>"><img class="img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo wp_get_attachment_image($image); ?>" /></a>
					<?php endif; ?>
					</div>
				<?php endwhile; wp_reset_postdata(); endif; ?>
				</div>
			</div>
		</div>
	</section>
</div>