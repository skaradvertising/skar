<?php
/**
 * Template Name: Careers/Internships Template
 */
?>
<div class="container-fluid careers-container">
	<section class="row row-eq-height careers-section">
		<div class="col-lg-7 col-md-7 col-sm-5 col-xs-12 left-side">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 careers-label">
				<?php the_title('<h3>', '</h3>'); ?>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-6 left-image">
			<?php if( get_field( 'main_image' ) ) : ?>
				<img class="img-responsive" src="<?php echo get_field( 'main_image' )['url']; ?>">
			<?php else : ?>
				<?php get_template_part( 'templates/svgs/big', 'skar' ); ?>
			<?php endif; ?>
			</div>
		</div>
		<div class="col-lg-5 col-md-5 col-sm-7 col-xs-12 careers-content-wrapper">
			
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 careers-content">
				<?php the_field( 'main_copy' ); ?>

				<?php get_template_part( 'templates/content', 'careers' );  ?>

				<?php the_field( 'bottom_copy' ); ?>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 careers-contact">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 skar-map"><?php the_field( 'map' ); ?></div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 address"><?php the_field( 'address' ); ?></div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 social">
				<?php if(have_rows( 'social' )) : ?>
					<ul>
						<?php while( have_rows( 'social' ) ) : the_row(); ?>
							<?php if( get_sub_field( 'icon' ) ) : ?>
								<li><a href="<?php the_sub_field( 'url' ); ?>" data-toggle="tooltip" data-placement="top" title="<?php the_sub_field( 'social_network' ); ?>" target="_blank"><img src="<?php echo get_sub_field( 'icon' )['url']; ?>"></a></li>
							<?php endif; ?>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				</div>
			</div>

		</div>
	</section>
</div>