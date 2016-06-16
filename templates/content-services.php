<?php
	$args = array(
		'post_type' => 'services',
		'posts_per_page' => -1,
	);
	
	$query = new WP_Query( $args );
	if( $query->have_posts() ) :
?>

<div class="container services-wrapper">
	<div class="services-label">
		<span>OUR SERVICES</span>
	</div>
	<div class="row row-eq-height">
<?php while( $query->have_posts() ) : $query->the_post(); ?>

		<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 service">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 service-container">
				<div class="col-lg-3 col-md-3 col-sm-4 col-xs-3 service-square">
				<?php 
					if ( get_field( 'icon' ) ) {
						$src = get_field( 'icon' )['url'];
					} else {
						$src = '/wp-content/uploads/2016/05/green-square.jpg';
					}
				?>
					<img src="<?php echo $src; ?>">
				</div>
				<div class="col-lg-9 col-md-9 col-sm-8 col-xs-9 service-content">
					<p><?php the_title(); ?></p>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	<?php endwhile; wp_reset_postdata(); ?>
	</div>
</div>
<?php endif; ?>