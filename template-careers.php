<?php
/**
 * Template Name: Careers Template
 */
?>
<div class="container-fluid careers-container">
	<section class="row row-eq-height careers-section">
		<div class="col-lg-5 col-md-5 col-sm-5"></div>
		<div class="col-lg-7 col-md-7 col-sm-7 careers-content-wrapper">
			<div class="col-lg-3 col-md-3 col-sm-4 col-xs-5 careers-label">
				<?php the_title(); ?>
			</div>
			<div class="col-lg-9 col-md-9 col-sm-8 col-xs-7 careers-content">
				<?php the_field( 'main_copy' ); ?>

				<?php get_template_part( 'templates/content', 'careers' ); ?>

				<?php the_field( 'bottom_copy' ); ?>
			</div>
		</div>
	</section>
</div>