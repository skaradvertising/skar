<?php 
	
	// set up and display each person
	// we're using a pure jQuery plugin to display portraits in a carousel slider

	$args = array(
		'post_type' => 'people',
		'posts_per_page' => -1,
		'order' => 'ASC'
	);

	$query = new WP_Query( $args );
	if( $query->have_posts() ) : 
?>
<div class="people-container">
	<div class="people-slider-label">
		<span>our people</span>
		<span>Sign up for email alerts</span>
	</div>
	<div class="people-slider">
	<?php while( $query->have_posts() ) : $query->the_post(); ?>

		<div class="person-container">
		<?php 
			$src = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, '' ); //get each person image (set as featured image)
			if( get_field( 'signature' ) ) {
				$signature = get_field( 'signature' );
			}
		?>
			<img class="portrait" src="<?php echo $src[0]; ?>">
			<img class="signature" src="<?php echo $signature['url']; ?>">
		</div>

	<?php endwhile; ?>
	</div>
</div>
<?php endif; wp_reset_postdata(); ?>