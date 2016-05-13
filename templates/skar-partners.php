<?php

	$args = array(
		'post_type' => 'skar-partners',
		'posts_per_page' => -1,
		'order' => 'ASC'
	);
	$query = new WP_Query( $args );

	if( $query->have_posts() ) :
?>
<div class="partners-container">
	<div class="container partners-wrapper">
		<div class="row partners-label"><span>Our Partners</span></div>
		<div class="row row-eq-height partners-content">

		<?php while( $query->have_posts() ) : $query->the_post(); ?>

			<?php if( get_field( 'logo' ) ) : $logo = get_field( 'logo' ); ?>

				<div class="partner"><img src="<?php echo $logo['url']; ?>" data-toggle="tooltip" title="<?php the_title(); ?>"></div>

			<?php endif; ?>
		<?php endwhile; ?>
		</div>
	</div>
</div>
<?php endif; wp_reset_postdata(); ?>