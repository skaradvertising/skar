<?php
/**
 * Template Name: Who We Are Template
 */
?>
<div class="container-fluid who-we-are-container">
	<?php // featured image as background
		$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' );
	?>
	<section class="container-fluid who-we-are-section one" style="background: url('<?php echo $src[0]; ?>') no-repeat center left; background-size: cover;">
		<div class="row row-eq-height">
			<div class="col-lg-6 col-md-6"></div>
			<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 section-one-content">
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 tag-line">
					<div class="tag-content">
						<?php the_field( 'tag_line' ); ?>
					</div>
					<div class="short-description">
						<?php the_field( 'short_description' ); ?>
					</div>
				</div>
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 skar-description">
					<?php the_field( 'full_description' ); ?>
				</div>
			</div>
		</div>
		<span class="return-to-top"><a href="#"><?php get_template_part( 'templates/svgs/alt', 'arrow' ); ?></a></span>
	</section>

	<section class="container-fluid who-we-are-section two">
		<div class="row"><?php get_template_part( 'templates/skar', 'content' ); ?></div>
		<div class="row"><?php get_template_part( 'templates/people', 'slider' ); ?></div>
	</section>

	<section class="container-fluid who-we-are-section three">
		<div class="row"><?php get_template_part( 'templates/skar', 'partners' ); ?></div>
	</section>

</div>
