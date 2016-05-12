<?php
/**
 * Template Name: What We Do Template
 */
?>
<div class="what-we-do-container">
	<?php // featured image as background
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
	?>
	<section class="container-fluid what-we-do-section one" style="background: url('<?php echo $src[0]; ?>') no-repeat center; background-size: cover;">
		<div class="row row-eq-height">
			<div class="col-lg-6 col-md-6"></div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 section-1-div-1">
					<div class="section-1-div-1-overlay"></div>
					<p>More than 300 years of combined experience –</p>
					<p>all under one roof.</p>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 section-1-div-2">
					<p>We're experts in the health care, financial and retail industries while also working with dozens of other regional and nonprofit brands.</p>
				</div>
			</div>
		</div>
	</section>

	<section class="container-fluid what-we-do-section two">
		<div class="row two-top">
			<?php get_template_part( 'templates/industries', 'boxes' ); ?>
			<div class="row work-label-container">
				<div class="col-lg-4 co-md-4 col-sm-4 col-xs-4">
					<span>OUR WORK</span>	
				</div>
				<div class="col-lg-8 co-md-8 col-sm-8 col-xs-8">
					<?php
		                if (has_nav_menu('work_navigation')) :
		                    wp_nav_menu(['theme_location' => 'work_navigation', 'menu_class' => 'work_nav', 'after' => '<span> | </span>']);
		                endif;
		            ?>
				</div>
			</div>
		</div>
		<?php get_template_part('templates/work', 'featured-on-pages'); ?>
		
	</section>

	<section class="container-fluid what-we-do-section three">
		<?php get_template_part('templates/content', 'services'); ?>
	</section>

</div>
