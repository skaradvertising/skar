<?php
/**
 * Template Name: Get In Touch Template
 */
?>

<div class="container-fluid in-touch-container">
	<section class="in-touch-section">
		<div class="row in-touch-label">
			<h2><span>Let's chat about you</span> <span>or your advertising</span></h2>
		</div>
		<div class="row in-touch-content-wrapper">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 in-touch-image-lg">
			<?php if( get_field( 'image' ) ) : ?>
				<img class="img-responsive" src="<?php echo get_field( 'image' )['url']; ?>">
			<?php endif; ?>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 in-touch-content">
				<div class="tag-line"><?php the_field( 'tag_line' ); ?></div>
				<div class="main-content-area"><?php the_field( 'main_content' ); ?></div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 skar-contact-form"><?php the_field( 'contact_form' ); ?></div>
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
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 in-touch-image-sm">
			<?php if( get_field( 'image' ) ) : ?>
				<img class="img-responsive" src="<?php echo get_field( 'image' )['url']; ?>">
			<?php endif; ?>
			</div>
		</div>
	</section>
</div>